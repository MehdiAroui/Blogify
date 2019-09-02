<?php

namespace Blogify\Http\Controllers;


use Illuminate\Routing\Controller;

class HomeController extends Controller{



	/**
     * Display the Telescope view.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$blogifyJsVariables = [
            'path' => config('blogify.path'),
        ];


        return view('blogify::master', [
            'blogifyJsVariables' => $blogifyJsVariables,
        ]);
    }

}