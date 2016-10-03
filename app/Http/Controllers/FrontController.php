<?php

namespace Coffee\Http\Controllers;

use Illuminate\Http\Request;

use Coffee\Http\Requests;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }
}
