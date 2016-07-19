<?php

namespace App\Http\Controllers\Admin;

use App\Categorie;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateRequestCategories;


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

    /**
     * Faz upload de Img de categorias e salva os dados
     *
     * @param CreateRequestCategories $request
     * @param Categorie $categorie
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateRequestCategories $request, Categorie $categorie)
    {
        if ($photo = $request->file('coverphoto')) {
            $data = $request->all();
            $data['coverphoto'] = $photo->getClientOriginalName();;
            $request->file('coverphoto')->move(base_path() . '/public/img/categories', $photo->getClientOriginalName());
            $categorie->create($data);

            flash('Dados gravos com sucesso!', 'success');
            return redirect('categories/create');
        } else {
            flash('Erro ao Enviar!', 'danger');
            return redirect('categories/create');
        }
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

    public function delete()
    {

    }
}
