<?php

namespace App\Http\Controllers\Api;


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

}
