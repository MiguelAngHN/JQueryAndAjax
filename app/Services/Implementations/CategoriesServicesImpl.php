<?php

namespace App\Services\Implementations;
use App\Services\CategoriesService;
use Illuminate\Support\Facades\DB;

class CategoriesServiceImpl implements CategoriesService
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
