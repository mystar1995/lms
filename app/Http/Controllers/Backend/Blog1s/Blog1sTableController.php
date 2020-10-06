<?php

namespace App\Http\Controllers\Backend\Blog1s;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Blog1s\ManageBlog1sRequest;
use App\Repositories\Backend\Blog1s\Blog1sRepository;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class Blog1sTableController.
 */
class Blog1sTableController extends Controller
{
    protected $blog1s;

    /**
     * @param \App\Repositories\Backend\Blog1s\Blog1sRepository $cmspages
     */
    public function __construct(Blog1sRepository $blog1s)
    {
        $this->blog1s = $blog1s;
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1s\ManageBlog1sRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageBlog1sRequest $request)
    {
        return Datatables::of($this->blog1s->getForDataTable())
            ->escapeColumns(['name'])
            ->addColumn('status', function ($blog1s) {
                return $blog1s->status;
            })
            ->addColumn('publish_datetime', function ($blog1s) {
                return $blog1s->publish_datetime->format('d/m/Y h:i A');
            })
            ->addColumn('created_by', function ($blog1s) {
                return $blog1s->user_name;
            })
            ->addColumn('created_at', function ($blog1s) {
                return $blog1s->created_at->toDateString();
            })
            ->addColumn('actions', function ($blog1s) {
                return $blog1s->action_buttons;
            })
            ->make(true);
    }
}
