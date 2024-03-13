<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\JsonResponse;
use Illuminate\Support\Collection;
use Symfony\Component\HttpFoundation\Response as ResponseAlis;


class ApiController
{

    protected $model;
    protected array $fillableFields;
    public function __construct()
    {
        $this->fillableFields = $this->model->getFillable();
    }

    /**
     * @description Fill the model with the fields
     * @param $model
     * @param Collection $fields
     * @return mixed
     */
    protected function fillModel($model, Collection $fields)
    {
        foreach ($this->fillableFields as $oneKey) {
            if ($fields->has($oneKey)) $model->{$oneKey} = $fields->get($oneKey);
        }

        return $model;
    }


    /**
     * @description Return a 404 error
     * @param string $message
     * @return JsonResponse
     */
    public function notFoundException(string $message = 'Not Found')
    {
        return response()->json([
            'message' => $message,
            'status_code' => ResponseAlis::HTTP_NOT_FOUND
        ], 404);
    }

    public function unauthorizedException(string $message = 'Not Found')
    {
        return response()->json([
            'message' => $message,
            'status_code' => ResponseAlis::HTTP_UNAUTHORIZED
        ], 404);
    }

    /**
     * @description Return a 200 success
     * @param string $message
     * @return JsonResponse
     */
    public function successResponse(string $message = 'Success'): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'status_code' => ResponseAlis::HTTP_OK
        ], 200);
    }

    /**
     * @description Return a 500 error
     * @param string $message
     * @return JsonResponse
     */
    public function internalServerError(string $message = 'Internal Server Error'): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'status_code' => ResponseAlis::HTTP_INTERNAL_SERVER_ERROR
        ], 500);
    }

}
