<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $curso = Curso::all();
        return response() -> json($curso);
    }

    public function store(Request $request)
    {
        $curso = new Curso();
        $curso -> nombre = $request -> nombre;
        $curso -> inicio_curso = $request -> inicio_curso;
        $curso -> final_curso = $request -> final_curso;

        $curso -> save();
        return response() -> json($curso);
    }

    public function update(Request $request, $id)
    {
        $curso = Curso::findOrFail($id);
        $curso -> nombre = $request -> nombre;
        $curso -> inicio_curso = $request -> inicio_curso;
        $curso -> final_curso = $request -> final_curso;

        $curso -> save();
        return response() -> json($curso);
    }

    public function destroy($id)
    {
        $curso = Curso::destroy($id);
        return response() -> json($curso);
    }
}
