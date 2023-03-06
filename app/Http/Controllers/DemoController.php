<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function cakculator($a, $b)
    {
        return $a * $b;
    }
}
