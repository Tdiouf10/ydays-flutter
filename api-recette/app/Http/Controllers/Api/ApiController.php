<?php

namespace App\Http\Controllers\Api;

use Symfony\Component\HttpFoundation\Response as ResponseAlis;


class ApiController
{

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
