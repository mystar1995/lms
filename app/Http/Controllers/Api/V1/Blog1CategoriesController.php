<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\Blog1CategoriesResource;
use App\Models\Blog1Categories\Blog1Category;
use App\Repositories\Backend\Blog1Categories\Blog1CategoriesRepository;
use Illuminate\Http\Request;
use Validator;

class Blog1CategoriesController extends APIController
{
    protected $repository;

    /**
     * __construct.
     *
     * @param $repository
     */
    public function __construct(Blog1CategoriesRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Return the blog1-categories.
     *
     * @param Request $request
     *
     *@return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $limit = $request->get('paginate') ? $request->get('paginate') : 25;
        $orderBy = $request->get('orderBy') ? $request->get('orderBy') : 'ASC';
        $sortBy = $request->get('sortBy') ? $request->get('sortBy') : 'created_at';

        return Blog1CategoriesResource::collection(
            $this->repository->getForDataTable()->orderBy($sortBy, $orderBy)->paginate($limit)
        );
    }

    /**
     * Return the specified resource.
     *
     * @param Blog1Category $blog1_category
     *
     *@return \Illuminate\Http\JsonResponse
     */
    public function show(Blog1Category $blog1_category)
    {
        return new Blog1CategoriesResource($blog1_category);
    }

    /**
     * Creates the Resource for Blog1Category.
     *
     * @param Request $request
     *
     *@return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = $this->validateBlog1Category($request);
        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }

        $this->repository->create($request->all());

        return new Blog1CategoriesResource(Blog1Category::orderBy('created_at', 'desc')->first());
    }

    /**
     * @param Blog1Category $blog1_category
     * @param Request      $request
     *
     * @return mixed
     */
    public function update(Request $request, Blog1Category $blog1_category)
    {
        $validation = $this->validateBlog1Category($request);

        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }

        $this->repository->update($blog1_category, $request->all());

        $blog1_category = Blog1Category::findOrfail($blog1_category->id);

        return new Blog1CategoriesResource($blog1_category);
    }

    /**
     * @param Blog1Category $blog1_category
     * @param Request      $request
     *
     * @return mixed
     */
    public function destroy(Blog1Category $blog1_category, Request $request)
    {
        $this->repository->delete($blog1_category);

        return $this->respond([
            'message' => trans('alerts.backend.blog1categories.deleted'),
        ]);
    }

    /**
     * validateUser Blog1Category Requests.
     *
     * @param Request $request
     *
     * @return Validator object
     */
    public function validateBlog1Category(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:191',
        ]);

        return $validation;
    }
}
