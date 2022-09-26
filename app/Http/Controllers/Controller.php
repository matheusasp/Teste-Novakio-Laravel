<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Carbon\Carbon;

class Controller extends BaseController
{

    public function getNowDate() {
        $nowDate = Carbon::now();

        return response()->json([
            'date' => $nowDate->toDateTimeString()
        ]);
    }

    public function getText(string $text) {
        return response()->json([
            'text' => $text
        ]);
    }

}
