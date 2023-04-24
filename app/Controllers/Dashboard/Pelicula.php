<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\PeliculaModel;

class Pelicula extends BaseController
{
    public function index() 
    {
        $model = new PeliculaModel();

        $peliculas = $model->findAll();

        return view('pelicula/index',['data' => $peliculas]);
    }

    public function new() {

        return view('pelicula/new', ['pelicula' => [
            'titulo' => '', 
            'descripcion' => '']
        ]);

    }

    public function show($id)
    {
        $peliculaModel = new PeliculaModel();

        return view('pelicula/show',[
            'pelicula' => $peliculaModel->find($id)
        ]);        
    }

    public function create() 
    {
        $peliculaModel = new PeliculaModel();

        if( $this->validate('peliculas') ) {

            $peliculaModel->insert([
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion'),
            ]);
            session()->setFlashdata('mensaje', 'Pelicula creada correctamente');
            return redirect()->to('/dashboard/pelicula');
        } else {
            session()->setFlashdata([
                'validator' => $this->validator
            ]);
            return redirect()->back()->withInput();

        }

    }

    public function edit($id) 
    {
        $peliculaModel = new PeliculaModel();

        return view('pelicula/edit',[
            'pelicula' => $peliculaModel->find($id)
        ]);        

    }

    public function update($id)
    {
        $peliculaModel = new PeliculaModel();
        
        if( $this->validate('peliculas') ) {

            $peliculaModel->update($id,[
                'titulo' => $this->request->getPost('titulo'),
                'descripcion' => $this->request->getPost('descripcion'),
            ]);
            session()->setFlashdata('mensaje', 'Pelicula modificada correctamente');
            return redirect()->to('/dashboard/pelicula');
        } else {
            session()->setFlashdata([
                'validator' => $this->validator
            ]);
            return redirect()->back()->withInput();
        }

    }

    public function delete($id) 
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->delete($id);

        session()->setFlashdata('mensaje', 'Pelicula borrada correctamente');

        return redirect()->to('/dashboard/pelicula');
    }
}