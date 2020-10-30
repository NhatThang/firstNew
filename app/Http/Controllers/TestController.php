<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test() {
        $arr = [
            'foo' => 'bar',
            'food' => 'rice',
            'car' => 'WMO',
        ];
        return view('frontend.blog', compact('arr'));
    }
}
