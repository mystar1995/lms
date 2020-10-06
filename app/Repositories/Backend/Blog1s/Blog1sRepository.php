<?php

namespace App\Repositories\Backend\Blog1s;

use App\Events\Backend\Blog1s\Blog1Created;
use App\Events\Backend\Blog1s\Blog1Deleted;
use App\Events\Backend\Blog1s\Blog1Updated;
use App\Exceptions\GeneralException;
use App\Models\Blog1Categories\Blog1Category;
use App\Models\Blog1MapCategories\Blog1MapCategory;
use App\Models\Blog1MapTags\Blog1MapTag;
use App\Models\Blog1s\Blog1;
use App\Models\Blog1Tags\Blog1Tag;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class Blog1sRepository.
 */
class Blog1sRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Blog1::class;

    protected $upload_path;

    /**
     * Storage Class Object.
     *
     * @var \Illuminate\Support\Facades\Storage
     */
    protected $storage;

    public function __construct()
    {
        $this->upload_path = 'img'.DIRECTORY_SEPARATOR.'blog1'.DIRECTORY_SEPARATOR;
        $this->storage = Storage::disk('public');
    }

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin(config('access.users_table'), config('access.users_table').'.id', '=', config('module.blog1s.table').'.created_by')
            ->select([
                config('module.blog1s.table').'.id',
                config('module.blog1s.table').'.name',
                config('module.blog1s.table').'.publish_datetime',
                config('module.blog1s.table').'.status',
                config('module.blog1s.table').'.created_by',
                config('module.blog1s.table').'.created_at',
                config('access.users_table').'.first_name as user_name',
            ]);
    }

    /**
     * @param array $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function create(array $input)
    {
        $tagsArray = $this->createTags($input['tags']);
        $categoriesArray = $this->createCategories($input['categories']);
        unset($input['tags'], $input['categories']);

        DB::transaction(function () use ($input, $tagsArray, $categoriesArray) {
            $input['slug'] = Str::slug($input['name']);
            $input['publish_datetime'] = Carbon::parse($input['publish_datetime']);
            $input = $this->uploadImage($input);
            $input['created_by'] = access()->user()->id;

            if ($blog1 = Blog1::create($input)) {
                // Inserting associated category's id in mapper table
                if (count($categoriesArray)) {
                    $blog1->categories()->sync($categoriesArray);
                }

                // Inserting associated tag's id in mapper table
                if (count($tagsArray)) {
                    $blog1->tags()->sync($tagsArray);
                }

                event(new Blog1Created($blog1));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.blog1s.create_error'));
        });
    }

    /**
     * Update Blog1.
     *
     * @param \App\Models\Blog1s\Blog1 $blog1
     * @param array                  $input
     */
    public function update(Blog1 $blog1, array $input)
    {
        $tagsArray = $this->createTags($input['tags']);
        $categoriesArray = $this->createCategories($input['categories']);
        unset($input['tags'], $input['categories']);

        $input['slug'] = Str::slug($input['name']);
        $input['publish_datetime'] = Carbon::parse($input['publish_datetime']);
        $input['updated_by'] = access()->user()->id;

        // Uploading Image
        if (array_key_exists('featured_image', $input)) {
            $this->deleteOldFile($blog1);
            $input = $this->uploadImage($input);
        }

        DB::transaction(function () use ($blog1, $input, $tagsArray, $categoriesArray) {
            if ($blog1->update($input)) {

                // Updateing associated category's id in mapper table
                if (count($categoriesArray)) {
                    $blog1->categories()->sync($categoriesArray);
                }

                // Updating associated tag's id in mapper table
                if (count($tagsArray)) {
                    $blog1->tags()->sync($tagsArray);
                }

                event(new Blog1Updated($blog1));

                return true;
            }

            throw new GeneralException(
                trans('exceptions.backend.blog1s.update_error')
            );
        });
    }

    /**
     * Creating Tags.
     *
     * @param array $tags
     *
     * @return array
     */
    public function createTags($tags)
    {
        //Creating a new array for tags (newly created)
        $tags_array = [];

        foreach ($tags as $tag) {
            if (is_numeric($tag)) {
                $tags_array[] = $tag;
            } else {
                $newTag = Blog1Tag::create(['name' => $tag, 'status' => 1, 'created_by' => 1]);
                $tags_array[] = $newTag->id;
            }
        }

        return $tags_array;
    }

    /**
     * Creating Categories.
     *
     * @param Array($categories)
     *
     * @return array
     */
    public function createCategories($categories)
    {
        //Creating a new array for categories (newly created)
        $categories_array = [];

        foreach ($categories as $category) {
            if (is_numeric($category)) {
                $categories_array[] = $category;
            } else {
                $newCategory = Blog1Category::create(['name' => $category, 'status' => 1, 'created_by' => 1]);

                $categories_array[] = $newCategory->id;
            }
        }

        return $categories_array;
    }

    /**
     * @param \App\Models\Blog1s\Blog1 $blog1
     *
     * @throws GeneralException
     *
     * @return bool
     */
    public function delete(Blog1 $blog1)
    {
        DB::transaction(function () use ($blog1) {
            if ($blog1->delete()) {
                Blog1MapCategory::where('blog1_id', $blog1->id)->delete();
                Blog1MapTag::where('blog1_id', $blog1->id)->delete();

                event(new Blog1Deleted($blog1));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.blog1s.delete_error'));
        });
    }

    /**
     * Upload Image.
     *
     * @param array $input
     *
     * @return array $input
     */
    public function uploadImage($input)
    {
        $avatar = $input['featured_image'];

        if (isset($input['featured_image']) && !empty($input['featured_image'])) {
            $fileName = time().$avatar->getClientOriginalName();

            $this->storage->put($this->upload_path.$fileName, file_get_contents($avatar->getRealPath()));

            $input = array_merge($input, ['featured_image' => $fileName]);

            return $input;
        }
    }

    /**
     * Destroy Old Image.
     *
     * @param int $id
     */
    public function deleteOldFile($model)
    {
        $fileName = $model->featured_image;

        return $this->storage->delete($this->upload_path.$fileName);
    }
}
