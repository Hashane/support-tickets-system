<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

Trait ApiResponses {

    public function ok($message): JsonResponse
    {
        return $this->successResponse($message,200);
    }
    public function successResponse($message, $code = 200): JsonResponse
    {
        return response()->json([
            'data' => $message,
            'status' => $code,
        ], $code);
    }
}
