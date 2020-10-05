<?php

namespace App\Http\Controllers\Backend\Blog1Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Blog1Categories\ManageBlog1CategoriesRequest;
use App\Repositories\Backend\Blog1Categories\Blog1CategoriesRepository;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

/**
 * Class Blog1CategoriesTableController.
 */
class Blog1CategoriesTableController extends Controller
{
    protected $blog1category;

    /**
     * @param \App\Repositories\Backend\Blog1Categories\Blog1CategoriesRepository $cmspages
     */
    public function __construct(Blog1CategoriesRepository $blog1category)
    {
        $this->blog1category = $blog1category;
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1Categories\ManageBlog1CategoriesRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageBlog1CategoriesRequest $request)
    {
        return Datatables::of($this->blog1category->getForDataTable())
            ->escapeColumns(['name'])
            ->addColumn('status', function ($blog1category) {
                return $blog1category->status_label;
            })
            ->addColumn('created_by', function ($blog1category) {
                return $blog1category->user_name;
            })
            ->addColumn('created_at', function ($blog1category) {
                return Carbon::parse($blog1category->created_at)->toDateString();
            })
            ->addColumn('actions', function ($blog1category) {
                return $blog1category->action_buttons;
            })
            ->make(true);
    }
}
