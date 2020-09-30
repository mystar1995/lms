<?php

namespace App\Repositories\Backend\Aa;

use DB;
use Carbon\Carbon;
use App\Models\Aa\Aa;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AaRepository.
 */
class AaRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Aa::class;

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
                config('module.aas.table').'.id',
                config('module.aas.table').'.created_at',
                config('module.aas.table').'.updated_at',
            ]);
    }

}
