<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Resources\Blog1TagsResource;
use App\Models\Blog1Tags\Blog1Tag;
use App\Repositories\Backend\Blog1Tags\Blog1TagsRepository;
use Illuminate\Http\Request;
use Validator;

class Blog1TagsController extends APIController
{
    protected $repository;

    /**
     * __construct.
     *
     * @param $repository
     */
    public function __construct(Blog1TagsRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Return the Blog1Tags.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $limit = $request->get('paginate') ? $request->get('paginate') : 25;
        $orderBy = $request->get('orderBy') ? $request->get('orderBy') : 'ASC';
        $sortBy = $request->get('sortBy') ? $request->get('sortBy') : 'created_at';

        return Blog1TagsResource::collection(
            $this->repository->getForDataTable()->orderBy($sortBy, $orderBy)->paginate($limit)
        );
    }

    /**
     * Return the specified resource.
     *
     * @param Blog1Tag $blog1_tag
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Blog1Tag $blog1_tag)
    {
        return new Blog1TagsResource($blog1_tag);
    }

    /**
     * Creates the Resource for Blog1Tag.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $validation = $this->validatingRequest($request);
        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }

        $this->repository->create($request->all());

        return new Blog1TagsResource(Blog1Tag::orderBy('created_at', 'desc')->first());
    }

    /**
     * Update Blog1Tag.
     *
     * @param Blog1Tag $blog1_tag
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Blog1Tag $blog1_tag)
    {
        $validation = $this->validatingRequest($request, $blog1_tag->id);

        if ($validation->fails()) {
            return $this->throwValidation($validation->messages()->first());
        }

        $this->repository->update($blog1_tag, $request->all());

        $blog1_tag = Blog1Tag::findOrfail($blog1_tag->id);

        return new Blog1TagsResource($blog1_tag);
    }

    /**
     * Delete Blog1Tag.
     *
     * @param Blog1Tag              $blog1_tag
     * @param DeleteBlog1TagRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Blog1Tag $blog1_tag, Request $request)
    {
        $this->repository->delete($blog1_tag);

        return ['message'=>'success'];
    }

    /**
     * validate Blog1Tag.
     *
     * @param $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function validatingRequest(Request $request, $id = 0)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:191|unique:blog1_tags,name,'.$id,
        ]);

        return $validation;
    }
}
