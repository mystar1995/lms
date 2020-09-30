<?php

namespace App\Repositories\Backend\SpeakUp;

use DB;
use Carbon\Carbon;
use App\Models\SpeakUp\Speakup;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpeakupRepository.
 */
class SpeakupRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Speakup::class;

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
                config('module.speakups.table').'.id',
                config('module.speakups.table').'.created_at',
                config('module.speakups.table').'.updated_at',
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
        if (Speakup::create($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.speakups.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Speakup $speakup
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Speakup $speakup, array $input)
    {
    	if ($speakup->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.speakups.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Speakup $speakup
     * @throws GeneralException
     * @return bool
     */
    public function delete(Speakup $speakup)
    {
        if ($speakup->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.speakups.delete_error'));
    }
}
