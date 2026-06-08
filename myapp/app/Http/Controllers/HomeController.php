<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function fibonacci() {
        $a = 0;
        $b = 1;
        $i = 0;
        $arr = [];
        while($i < 10) {
            $arr[] = $a;
            $temp = $a;
            $a = $b;
            $b = $temp + $b;
            $i++;
        }
        return view('fibonacci', ['arr' => $arr]);
    }

    public function factorial($num) {
        $n = $num;
        $fact = 1;
        while($n > 1) {
            $fact *= $n;
            $n--;
        }
        return view('factorial', [ 'fact' => $fact, 'number' => $num ]);
    }
}
