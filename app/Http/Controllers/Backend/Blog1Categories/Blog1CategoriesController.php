<?php

namespace App\Http\Controllers\Backend\Blog1Categories;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Blog1Categories\CreateBlog1CategoriesRequest;
use App\Http\Requests\Backend\Blog1Categories\DeleteBlog1CategoriesRequest;
use App\Http\Requests\Backend\Blog1Categories\EditBlog1CategoriesRequest;
use App\Http\Requests\Backend\Blog1Categories\ManageBlog1CategoriesRequest;
use App\Http\Requests\Backend\Blog1Categories\StoreBlog1CategoriesRequest;
use App\Http\Requests\Backend\Blog1Categories\UpdateBlog1CategoriesRequest;
use App\Http\Responses\Backend\Blog1Category\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Blog1Categories\Blog1Category;
use App\Repositories\Backend\Blog1Categories\Blog1CategoriesRepository;

/**
 * Class Blog1CategoriesController.
 */
class Blog1CategoriesController extends Controller
{
    protected $blog1category;

    /**
     * @param Blog1CategoriesRepository $blog1category
     */
    public function __construct(Blog1CategoriesRepository $blog1category)
    {
        $this->blog1category = $blog1category;
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1Categories\ManageBlog1CategoriesRequest $request
     *
     * @return ViewResponse
     */
    public function index(ManageBlog1CategoriesRequest $request)
    {
        return new ViewResponse('backend.Blog1Categories.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1Categories\CreateBlog1CategoriesRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateBlog1CategoriesRequest $request)
    {
        return new ViewResponse('backend.Blog1Categories.create');
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1Categories\StoreBlog1CategoriesRequest $request
     *
     * @return mixed
     */
    public function store(StoreBlog1CategoriesRequest $request)
    {
        $this->blog1category->create($request->all());

        return new RedirectResponse(route('admin.Blog1Categories.index'), ['flash_success' => trans('alerts.backend.Blog1Categories.created')]);
    }

    /**
     * @param \App\Models\Blog1Categories\Blog1Category                             $blog1Category
     * @param \App\Http\Requests\Backend\Blog1Categories\EditBlog1CategoriesRequest $request
     *
     * @return \App\Http\Responses\Backend\Blog1Category\EditResponse
     */
    public function edit(Blog1Category $blog1Category, EditBlog1CategoriesRequest $request)
    {
        return new EditResponse($blog1Category);
    }

    /**
     * @param \App\Models\Blog1Categories\Blog1Category                               $blog1Category
     * @param \App\Http\Requests\Backend\Blog1Categories\UpdateBlog1CategoriesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Blog1Category $blog1Category, UpdateBlog1CategoriesRequest $request)
    {
        $this->blog1category->update($blog1Category, $request->all());

        return new RedirectResponse(route('admin.Blog1Categories.index'), ['flash_success' => trans('alerts.backend.Blog1Categories.updated')]);
    }

    /**
     * @param \App\Models\Blog1Categories\Blog1Category                               $blog1Category
     * @param \App\Http\Requests\Backend\Blog1Categories\DeleteBlog1CategoriesRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Blog1Category $blog1Category, DeleteBlog1CategoriesRequest $request)
    {
        $this->blog1category->delete($blog1Category);

        return new RedirectResponse(route('admin.Blog1Categories.index'), ['flash_success' => trans('alerts.backend.Blog1Categories.deleted')]);
    }
}
