<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class TestController extends \App\Http\Controllers\Controller {

    /**
     * Used in radio app on Splash Screen - provides radios to add/update/delete.
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request) {
        try {
            $data = json_decode(gzdecode($request->getContent()), true);
        }
        catch (\Throwable $ex) {
            return response()->json(['message' => 'Invalid data.'], 500);
        }

        return response()->json(['message' => 'OK']);
    }
}
