<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

Trait ApiResponses {

    public function ok($message,$data): JsonResponse
    {
        return $this->success($message,$data,200);
    }
    public function success($message, $data, $code = 200): JsonResponse
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'status' => $code,
        ], $code);
    }

    public function error($message,$statusCode): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'status' => $statusCode,
        ], $statusCode);
    }
}
