<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;

class ApiAuthException extends Exception implements Responsable
{
    public function toResponse($request)
    {
        // 401
        return new JsonResponse(['message' => 'Unauthorized', 'status' => 401], 401);
    }
}
