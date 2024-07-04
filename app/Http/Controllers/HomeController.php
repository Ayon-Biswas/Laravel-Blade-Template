<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page(Request $request){
        $data=[
            ['name'=>'john','city'=>'paris'],
            ['name'=>'snow','city'=>'dublin'],
            ['name'=>'tony','city'=>'new york'],
            ['name'=>'stark','city'=>'slokovia'],
        ];
        return view('Home');
    }
}
