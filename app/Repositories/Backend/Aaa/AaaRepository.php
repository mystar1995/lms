<?php

namespace App\Repositories\Backend\Aaa;

use DB;
use Carbon\Carbon;
use App\Models\Aaa\Aaa;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AaaRepository.
 */
class AaaRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Aaa::class;

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
                config('module.aaas.table').'.id',
                config('module.aaas.table').'.created_at',
                config('module.aaas.table').'.updated_at',
            ]);
    }

}
