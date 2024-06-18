<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Services\PatientsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{

    protected $patientsService;

    public function __construct(PatientsService $patientsService) {

        $this->patientsService = $patientsService;
    }

    public function index() {

        return $this->patientsService->index();
    }

    public function store(Request $request) {

        return $this->patientsService->store($request);
    }

}
