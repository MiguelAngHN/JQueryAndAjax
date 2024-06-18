<?php

namespace App\Services\Implementations;

use App\Services\CategoriesService;
use App\Services\PatientsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PatientsServicesImpl implements PatientsService {

    public function index()
    {
        $patients = DB::table('Patients')->get();
        
        return response()->json($patients);
    }

    public function store(Request $request)
    {
        $patient = DB::table('Patients')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'age' => $request->input('age'),
        ]);

        return response()->json($patient);
    }

}