<?php

namespace App\Http\Controllers\Backend\Blog1Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Blog1Tags\ManageBlog1TagsRequest;
use App\Repositories\Backend\Blog1Tags\Blog1TagsRepository;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class Blog1TagsTableController.
 */
class Blog1TagsTableController extends Controller
{
    /**
     * @var \App\Repositories\Backend\Blog1Tags\Blog1TagsRepository
     */
    protected $blog1tags;

    /**
     * @param \App\Repositories\Backend\Blog1Tags\Blog1TagsRepository $blog1tags
     */
    public function __construct(Blog1TagsRepository $blog1tags)
    {
        $this->blog1tags = $blog1tags;
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1Tags\ManageBlog1TagsRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageBlog1TagsRequest $request)
    {
        return Datatables::of($this->blog1tags->getForDataTable())
            ->escapeColumns(['name'])
            ->addColumn('status', function ($blog1tags) {
                return $blog1tags->status_label;
            })
            ->addColumn('created_by', function ($blog1tags) {
                return $blog1tags->user_name;
            })
            ->addColumn('created_at', function ($blog1tags) {
                return Carbon::parse($blog1tags->created_at)->toDateString();
            })
            ->addColumn('actions', function ($blog1tags) {
                return $blog1tags->action_buttons;
            })
            ->make(true);
    }
}
