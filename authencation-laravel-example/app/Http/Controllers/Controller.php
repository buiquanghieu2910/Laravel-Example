<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function resConversionJson($result, $status_code = 200)
    {
        return response()->json($result, $status_code, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }
}
