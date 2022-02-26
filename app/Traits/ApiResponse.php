<?php

namespace App\Traits;

use Carbon\Carbon;
/**
 * ApiReponse trait will be use for all responses to the client.  These are standarized formats.
 */

trait ApiResponse
{

    /**
     * Return a success JSON response
     *
     * @param array|string $data
     * @param string $message
     * @param integer $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function success($data, string $message = null, int $code = 200)
    {
        return response()->json([
            'status' => 'Success',
            'message' => $message,
            'data' => $data
        ], $code);
    }


    /**
     * Return an error JSON response
     *
     * @param string|null $message
     * @param integer $code
     * @param [type] $data
     * @return void
     */
    protected function error(string $message = null, int $code, $data = null)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => $data
        ], $code);
    }
}
