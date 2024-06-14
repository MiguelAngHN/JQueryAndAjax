<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
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
