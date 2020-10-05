<?php

namespace App\Http\Controllers\Backend\Blog1Tags;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Blog1Tags\CreateBlog1TagsRequest;
use App\Http\Requests\Backend\Blog1Tags\DeleteBlog1TagsRequest;
use App\Http\Requests\Backend\Blog1Tags\EditBlog1TagsRequest;
use App\Http\Requests\Backend\Blog1Tags\ManageBlog1TagsRequest;
use App\Http\Requests\Backend\Blog1Tags\StoreBlog1TagsRequest;
use App\Http\Requests\Backend\Blog1Tags\UpdateBlog1TagsRequest;
use App\Http\Responses\Backend\Blog1Tag\EditResponse;
use App\Http\Responses\RedirectResponse;
use App\Http\Responses\ViewResponse;
use App\Models\Blog1Tags\Blog1Tag;
use App\Repositories\Backend\Blog1Tags\Blog1TagsRepository;

/**
 * Class Blog1TagsController.
 */
class Blog1TagsController extends Controller
{
    /**
     * @var \App\Repositories\Backend\Blog1Tags\Blog1TagsRepository
     */
    protected $blog1tag;

    /**
     * @param \App\Repositories\Backend\Blog1Tags\Blog1TagsRepository $blog1tag
     */
    public function __construct(Blog1TagsRepository $blog1tag)
    {
        $this->blog1tag = $blog1tag;
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1Tags\ManageBlog1TagsRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function index(ManageBlog1TagsRequest $request)
    {
        return new ViewResponse('backend.blog1tags.index');
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1Tags\CreateBlog1TagsRequest $request
     *
     * @return \App\Http\Responses\ViewResponse
     */
    public function create(CreateBlog1TagsRequest $request)
    {
        return new ViewResponse('backend.blog1tags.create');
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1Tags\StoreBlog1TagsRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreBlog1TagsRequest $request)
    {
        $this->blog1tag->create($request->except('token'));

        return new RedirectResponse(route('admin.blog1Tags.index'), ['flash_success' => trans('alerts.backend.blog1tags.created')]);
    }

    /**
     * @param \App\Models\Blog1Tags\Blog1Tag                            $blog1Tag
     * @param \App\Http\Requests\Backend\Blog1Tags\EditBlog1TagsRequest $request
     *
     * @return \App\Http\Responses\Backend\Blog1Tag\EditResponse
     */
    public function edit(Blog1Tag $blog1Tag, EditBlog1TagsRequest $request)
    {
        return new EditResponse($blog1Tag);
    }

    /**
     * @param \App\Models\Blog1Tags\Blog1Tag                              $blog1Tag
     * @param \App\Http\Requests\Backend\Blog1Tags\UpdateBlog1TagsRequest $request
     *
     * @return mixed
     */
    public function update(Blog1Tag $blog1Tag, UpdateBlog1TagsRequest $request)
    {
        $this->blog1tag->update($blog1Tag, $request->except(['_method', '_token']));

        return new RedirectResponse(route('admin.blog1Tags.index'), ['flash_success' => trans('alerts.backend.blog1tags.updated')]);
    }

    /**
     * @param \App\Models\Blog1Tags\Blog1Tag                              $blog1Tag
     * @param \App\Http\Requests\Backend\Blog1Tags\DeleteBlog1TagsRequest $request
     *
     * @return mixed
     */
    public function destroy(Blog1Tag $blog1Tag, DeleteBlog1TagsRequest $request)
    {
        $this->blog1tag->delete($blog1Tag);

        return new RedirectResponse(route('admin.blog1Tags.index'), ['flash_success' => trans('alerts.backend.blog1tags.deleted')]);
    }
}
