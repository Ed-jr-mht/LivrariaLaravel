<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAutor;
use Illuminate\Http\Request;
use App\Models\Autor;

class AutorController extends Controller
{
    public function index() {
        $autors = Autor::all();
        return view('autors.index', compact('autors'));
    }

    public function create() {
        return view('autors.create');
    }

    public function store(StoreUpdateAutor $request) {
        Autor::create($request->all());
        return redirect()->route('autors.index');
    }

    public function show($id) {
        $autor = Autor::find($id);
        if(!$autor) {
            return redirect()
                    ->route('autors.index')
                    ->with('message', 'Autor não foi encontrado');
        }
        return view('autors.show', compact('autor'));
    }

    public function destroy($id){
        $autor= Autor::find($id);
        if($autor){
            return redirect()
                        ->route('autors.index')
                        ->with('message', 'Autor não foi encontrado');
        }

        $autor->delete();
        return redirect()
                        ->route('autors.index')
                        ->with('message','Autor não foi Encontrado');

    }

    public function edit($id) {
        $autor = Autor::find($id);
        if(!$autor) {
            return redirect()
                    ->route('autors.index')
                    ->with('message', 'Autor não foi encontrado');
        }
        return view('autors.edit', compact('autor'));
    }

    public function update(StoreUpdateAutor $request, $id) {
        $autor = Autor::find($id);
        if(!$autor) {
            return redirect()
                    ->route('autors.index')
                    ->with('message', 'Autor não foi encontrado');
        }
        $autor->update($request->all());
        return redirect()
                ->route('autors.index')
                ->with('message', 'Autor '.old($autor->titulo).'foi editado');
    }

}
