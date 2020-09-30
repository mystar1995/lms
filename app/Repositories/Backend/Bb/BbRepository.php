<?php

namespace App\Repositories\Backend\Bb;

use DB;
use Carbon\Carbon;
use App\Models\Bb\Bb;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BbRepository.
 */
class BbRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Bb::class;

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
                config('module.bbs.table').'.id',
                config('module.bbs.table').'.created_at',
                config('module.bbs.table').'.updated_at',
            ]);
    }

}
