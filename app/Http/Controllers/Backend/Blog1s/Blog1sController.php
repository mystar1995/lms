<?php

namespace App\Http\Controllers\Backend\Blog1s;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Blog1s\ManageBlog1sRequest;
use App\Http\Requests\Backend\Blog1s\StoreBlog1sRequest;
use App\Http\Requests\Backend\Blog1s\UpdateBlog1sRequest;
use App\Http\Responses\Backend\Blog1\CreateResponse;
use App\Http\Responses\Backend\Blog1\EditResponse;
use App\Http\Responses\Backend\Blog1\IndexResponse;
use App\Http\Responses\RedirectResponse;
use App\Models\Blog1Categories\Blog1Category;
use App\Models\Blog1s\Blog1;
use App\Models\Blog1Tags\Blog1Tag;
use App\Repositories\Backend\Blog1s\Blog1sRepository;

/**
 * Class Blog1sController.
 */
class Blog1sController extends Controller
{
    /**
     * Blog1 Status.
     */
    protected $status = [
        'Published' => 'Published',
        'Draft'     => 'Draft',
        'InActive'  => 'InActive',
        'Scheduled' => 'Scheduled',
    ];

    /**
     * @var Blog1sRepository
     */
    protected $blog1;

    /**
     * @param \App\Repositories\Backend\Blog1s\Blog1sRepository $blog1
     */
    public function __construct(Blog1sRepository $blog1)
    {
        $this->blog1 = $blog1;
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1s\ManageBlog1sRequest $request
     *
     * @return \App\Http\Responses\Backend\Blog1\IndexResponse
     */
    public function index(ManageBlog1sRequest $request)
    {
        return new IndexResponse($this->status);
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1s\ManageBlog1sRequest $request
     *
     * @return mixed
     */
    public function create(ManageBlog1sRequest $request)
    {
        $blog1Tags = Blog1Tag::getSelectData();
        $blog1Categories = Blog1Category::getSelectData();

        return new CreateResponse($this->status, $blog1Categories, $blog1Tags);
    }

    /**
     * @param \App\Http\Requests\Backend\Blog1s\StoreBlog1sRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function store(StoreBlog1sRequest $request)
    {
        $this->blog1->create($request->except('_token'));

        return new RedirectResponse(route('admin.blog1s.index'), ['flash_success' => trans('alerts.backend.blog1s.created')]);
    }

    /**
     * @param \App\Models\Blog1s\Blog1                              $blog1
     * @param \App\Http\Requests\Backend\Blog1s\ManageBlog1sRequest $request
     *
     * @return \App\Http\Responses\Backend\Blog1\EditResponse
     */
    public function edit(Blog1 $blog1, ManageBlog1sRequest $request)
    {
        $blog1Categories = Blog1Category::getSelectData();
        $blog1Tags = Blog1Tag::getSelectData();

        return new EditResponse($blog1, $this->status, $blog1Categories, $blog1Tags);
    }

    /**
     * @param \App\Models\Blog1s\Blog1                              $blog1
     * @param \App\Http\Requests\Backend\Blog1s\UpdateBlog1sRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function update(Blog1 $blog1, UpdateBlog1sRequest $request)
    {
        $input = $request->all();

        $this->blog1->update($blog1, $request->except(['_token', '_method']));

        return new RedirectResponse(route('admin.blog1s.index'), ['flash_success' => trans('alerts.backend.blog1s.updated')]);
    }

    /**
     * @param \App\Models\Blog1s\Blog1                              $blog1
     * @param \App\Http\Requests\Backend\Blog1s\ManageBlog1sRequest $request
     *
     * @return \App\Http\Responses\RedirectResponse
     */
    public function destroy(Blog1 $blog1, ManageBlog1sRequest $request)
    {
        $this->blog1->delete($blog1);

        return new RedirectResponse(route('admin.blog1s.index'), ['flash_success' => trans('alerts.backend.blog1s.deleted')]);
    }
}
