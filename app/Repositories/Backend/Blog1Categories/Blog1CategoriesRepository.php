<?php

namespace App\Repositories\Backend\Blog1Categories;

use App\Events\Backend\Blog1Categories\Blog1CategoryCreated;
use App\Events\Backend\Blog1Categories\Blog1CategoryDeleted;
use App\Events\Backend\Blog1Categories\Blog1CategoryUpdated;
use App\Exceptions\GeneralException;
use App\Models\Blog1Categories\Blog1Category;
use App\Repositories\BaseRepository;
use DB;

/**
 * Class Blog1CategoriesRepository.
 */
class Blog1CategoriesRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Blog1Category::class;

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin(config('access.users_table'), config('access.users_table').'.id', '=', config('module.blog1_categories.table').'.created_by')
            ->select([
                config('module.blog1_categories.table').'.id',
                config('module.blog1_categories.table').'.name',
                config('module.blog1_categories.table').'.status',
                config('module.blog1_categories.table').'.created_by',
                config('module.blog1_categories.table').'.created_at',
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
        if ($this->query()->where('name', $input['name'])->first()) {
            throw new GeneralException(trans('exceptions.backend.blog1categories.already_exists'));
        }

        DB::transaction(function () use ($input) {
            $input['status'] = isset($input['status']) ? 1 : 0;
            $input['created_by'] = access()->user()->id;

            if ($blog1category = Blog1Category::create($input)) {
                event(new Blog1CategoryCreated($blog1category));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.blog1categories.create_error'));
        });
    }

    /**
     * @param \App\Models\Blog1Categories\Blog1Category $blog1category
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Blog1Category $blog1category, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $blog1category->id)->first()) {
            throw new GeneralException(trans('exceptions.backend.blog1categories.already_exists'));
        }

        DB::transaction(function () use ($blog1category, $input) {
            $input['status'] = isset($input['status']) ? 1 : 0;
            $input['updated_by'] = access()->user()->id;

            if ($blog1category->update($input)) {
                event(new Blog1CategoryUpdated($blog1category));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.blog1categories.update_error'));
        });
    }

    /**
     * @param \App\Models\Blog1Categories\Blog1Category $blog1category
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Blog1Category $blog1category)
    {
        DB::transaction(function () use ($blog1category) {
            if ($blog1category->delete()) {
                event(new Blog1CategoryDeleted($blog1category));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.blog1categories.delete_error'));
        });
    }
}
