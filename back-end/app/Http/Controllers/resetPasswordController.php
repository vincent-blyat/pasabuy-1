<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

class resetPasswordController extends Controller
{
    //
    use ResetsPasswords;

    protected function sendResetResponse(Request $request, $response)
    {
        
        return response(['message' => trans($response)]);
    }



    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response(['error'=>trans($response)], 422);
    }
}
