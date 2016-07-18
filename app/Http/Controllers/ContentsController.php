<?php

namespace App\Http\Controllers;

use App\Http\Requests;


class ContentsController extends Controller
{

    public function index()
    {
        return view('contents.index');
    }


    public function create()
    {
        return view('contents.create');
    }
}
