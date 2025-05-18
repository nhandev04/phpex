<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    /**
     * Returns a greeting message
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return response("Xin chào....");
    }

    /**
     * Returns the index2 view
     *
     * @return \Illuminate\View\View
     */
    public function index2()
    {
        return view('index2');
    }

    /**
     * Returns the index3 view with random data using with/compact
     *
     * @return \Illuminate\View\View
     */
    public function index3()
    {
        $randomNumber = rand(1, 1000);


        $stringValue = $randomNumber . 'abc';

        $hashedString = md5($stringValue);

        return view('index3')
            ->with('randomNumber', $randomNumber)
            ->with('stringValue', $stringValue)
            ->with(compact('hashedString'));
    }
}
