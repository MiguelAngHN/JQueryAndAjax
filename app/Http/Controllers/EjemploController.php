<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EjemploController extends Controller
{

    public function index() {

        // $datos = DB::table('Categories')->create($request->all());
        $categories = DB::table('Categories')->get();

        return response()->json($categories);

    }

    public function store(object $request) {
        $categorie = DB::table('Categories')->insert([
            'name' => $request->input('name'),
            'descripcion' => $request->input('descripcion'),
        ]);

        return response()->json($categorie);
    }

}
