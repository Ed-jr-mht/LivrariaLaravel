<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editora;

class EditoraController extends Controller
{
    public function index() {
        $editoras = Editora::all();
        return view('editoras.index', compact('editoras'));
    }

    public function create(){
        return view('editoras.create');

    }

    public function store(StoreUpdateEditora $request){
        Editora::create($request->all());
        return redirect()->route('editoras.index');
    }

    public function show($id) {
        $editora = Editora::find($id);
        if(!$editora) {
            return redirect()
                    ->route('editoras.index')
                    ->with('message', 'Editora não foi encontrado');
        }
        return view('editoras.show', compact('editora'));
    }

    public function destroy($id){
        $editora= Editora::find($id);
        if($editora){
            return redirect()
                        ->route('editoras.index')
                        ->with('message', 'Editora não foi encontrada');
        }

        $editora->delete();
        return redirect()
                        ->route('editoras.index')
                        ->with('message','Editora não foi Encontrada');

    }
    public function edit($id) {
        $editora = Editora::find($id);
        if(!$editora) {
            return redirect()
                    ->route('editoras.index')
                    ->with('message', 'Editora não foi encontrada');
        }
        return view('editoras.edit', compact('editora'));
    }

    public function update(StoreUpdateEditora $request, $id) {
        $editora = Editora::find($id);
        if(!$editora) {
            return redirect()
                    ->route('editoras.index')
                    ->with('message', 'Editora não foi encontrada');
        }
        $editora->update($request->all());
        return redirect()
                ->route('editoras.index')
                ->with('message', 'Editora  '.old($editora->nome).'foi editado');
    }

}
