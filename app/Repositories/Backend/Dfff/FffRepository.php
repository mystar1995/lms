<?php

namespace App\Repositories\Backend\Dfff;

use DB;
use Carbon\Carbon;
use App\Models\Dfff\Fff;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class FffRepository.
 */
class FffRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Fff::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.fffs.table').'.id',
                config('module.fffs.table').'.created_at',
                config('module.fffs.table').'.updated_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        if (Fff::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.fffs.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Fff $fff
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Fff $fff, array $input)
    {
    	if ($fff->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.fffs.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Fff $fff
     * @throws GeneralException
     * @return bool
     */
    public function delete(Fff $fff)
    {
        if ($fff->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.fffs.delete_error'));
    }
}
