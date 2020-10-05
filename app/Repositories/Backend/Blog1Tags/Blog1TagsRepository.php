<?php

namespace App\Repositories\Backend\Blog1Tags;

use App\Events\Backend\Blog1Tags\Blog1TagCreated;
use App\Events\Backend\Blog1Tags\Blog1TagDeleted;
use App\Events\Backend\Blog1Tags\Blog1TagUpdated;
use App\Exceptions\GeneralException;
use App\Models\Blog1Tags\Blog1Tag;
use App\Repositories\BaseRepository;
use DB;

/**
 * Class Blog1TagsRepository.
 */
class Blog1TagsRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Blog1Tag::class;

    /**
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->leftjoin(config('access.users_table'), config('access.users_table').'.id', '=', config('module.blog1_tags.table').'.created_by')
            ->select([
                config('module.blog1_tags.table').'.id',
                config('module.blog1_tags.table').'.name',
                config('module.blog1_tags.table').'.status',
                config('module.blog1_tags.table').'.created_by',
                config('module.blog1_tags.table').'.created_at',
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
            throw new GeneralException(trans('exceptions.backend.blog1tags.already_exists'));
        }

        DB::transaction(function () use ($input) {
            $input['status'] = isset($input['status']) ? 1 : 0;
            $input['created_by'] = access()->user()->id;

            if ($blog1tag = Blog1Tag::create($input)) {
                event(new Blog1TagCreated($blog1tag));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.blog1tags.create_error'));
        });
    }

    /**
     * @param \App\Models\Blog1Tags\Blog1Tag $blog1tag
     * @param  $input
     *
     * @throws \App\Exceptions\GeneralException
     *
     * return bool
     */
    public function update(Blog1Tag $blog1tag, array $input)
    {
        if ($this->query()->where('name', $input['name'])->where('id', '!=', $blog1tag->id)->first()) {
            throw new GeneralException(trans('exceptions.backend.blog1tags.already_exists'));
        }

        DB::transaction(function () use ($blog1tag, $input) {
            $input['status'] = isset($input['status']) ? 1 : 0;
            $input['updated_by'] = access()->user()->id;

            if ($blog1tag->update($input)) {
                event(new Blog1TagUpdated($blog1tag));

                return true;
            }

            throw new GeneralException(
                trans('exceptions.backend.blog1tags.update_error')
            );
        });
    }

    /**
     * @param \App\Models\Blog1Tags\Blog1Tag $blog1tag
     *
     * @throws \App\Exceptions\GeneralException
     *
     * @return bool
     */
    public function delete(Blog1Tag $blog1tag)
    {
        DB::transaction(function () use ($blog1tag) {
            if ($blog1tag->delete()) {
                event(new Blog1TagDeleted($blog1tag));

                return true;
            }

            throw new GeneralException(trans('exceptions.backend.blog1tags.delete_error'));
        });
    }
}
