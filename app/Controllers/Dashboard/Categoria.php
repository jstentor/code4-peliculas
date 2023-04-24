<?php

namespace App\Controllers\Dashboard;

use App\Models\CategoriaModel;
use App\Controllers\BaseController;


class Categoria extends BaseController
{
    public function index() 
    {
        $model = new CategoriaModel();

        $categorias = $model->findAll();

        return view('categoria/index',['data' => $categorias]);
    }

    public function new() {

        return view('categoria/new', ['categoria' => [
            'titulo' => '']
        ]);

    }

    public function show($id)
    {
        $categoriaModel = new CategoriaModel();

        return view('categoria/show',[
            'categoria' => $categoriaModel->find($id)
        ]);        
    }

    public function create() 
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
        ]);
        return redirect()->to('/dashboard/categoria')->with('mensaje', 'Registro creado correctamente');

    }

    public function edit($id) 
    {
        $categoriaModel = new CategoriaModel();

        return view('categoria/edit',[
            'categoria' => $categoriaModel->find($id)
        ]);        

    }

    public function update($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
        ]);
        return redirect()->to('/dashboard/categoria')->with('mensaje', 'Registro guardado correctamente');

    }

    public function delete($id) 
    {
        $categoriaModel = new CategoriaModel();

        $categoriaModel->delete($id);
        return redirect()->to('/dashboard/categoria')->with('mensaje', 'Registro borrado correctamente');
    }
}