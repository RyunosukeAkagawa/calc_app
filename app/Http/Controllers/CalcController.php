<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1, $calc, $num2)
    {
        return view('message.result', [
            'num1' => $num1,
            'calc' => $calc,
            'num2' => $num2
        ]);
    }
}
