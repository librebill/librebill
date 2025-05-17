<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function apiResponse($message = '', $data, $status = 200)
    {
        return response()->json([
            'message' => $message,
            'data' => $data,
        ], $status);
    }
}
