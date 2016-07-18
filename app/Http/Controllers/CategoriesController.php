<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriesController extends Controller
{
    public function index()
    {
        return view('categories.index');
    }


    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        dd($data);
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }
}
