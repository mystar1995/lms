<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\Blog1sResource;
use App\Models\Blog1s\Blog1;
use App\Repositories\Backend\Blog1s\Blog1sRepository;
use Illuminate\Http\Request;
use Validator;

class Blog1sController extends APIController
{
    protected $repository;

    /**
     * __construct.
     *
     * @param $repository
     */
    public function __construct(Blog1sRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Return the blog1s.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $limit = $request->get('paginate') ? $request->get('paginate') : 25;
        $orderBy = $request->get('orderBy') ? $request->get('orderBy') : 'ASC';
        $sortBy = $request->get('sortBy') ? $request->get('sortBy') : 'created_at';

        return Blog1sResource::collection(
            $this->repository->getForDataTable()->orderBy($sortBy, $orderBy)->paginate($limit)
        );
    }

    /**
     * Return the specified resource.
     *
     * @param Blog1 blog1
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Blog1 $blog1)
    {
        return new Blog1sResource($blog1);
    }

    /**
     * Creates the Resource for Blog1.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = $this->validateBlog1($request);

        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }

        $this->repository->create($request->all());

        return new Blog1sResource(Blog1::orderBy('created_at', 'desc')->first());
    }

    /**
     * Update blog1.
     *
     * @param Blog1    $blog1
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Blog1 $blog1)
    {
        $validation = $this->validateBlog1($request, 'update');

        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }

        $this->repository->update($blog1, $request->all());

        $blog1 = Blog1::findOrfail($blog1->id);

        return new Blog1sResource($blog1);
    }

    /**
     * Delete Blog1.
     *
     * @param Blog1    $blog1
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Blog1 $blog1, Request $request)
    {
        $this->repository->delete($blog1);

        return $this->respond([
            'message' => trans('alerts.backend.blog1s.deleted'),
        ]);
    }

    /**
     * validate Blog1.
     *
     * @param $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function validateBlog1(Request $request, $action = 'insert')
    {
        $featured_image = ($action == 'insert') ? 'required' : '';

        $publish_datetime = $request->publish_datetime !== '' ? 'required|date' : 'required';

        $validation = Validator::make($request->all(), [
            'name'              => 'required|max:191',
            'featured_image'    => $featured_image,
            'publish_datetime'  => $publish_datetime,
            'content'           => 'required',
            'categories'        => 'required',
            'tags'              => 'required',
        ]);

        return $validation;
    }

    /**
     * validate message for validate blog1.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function messages()
    {
        return [
            'name.required' => 'Please insert Blog1 Title',
            'name.max'      => 'Blog1 Title may not be greater than 191 characters.',
        ];
    }
}
