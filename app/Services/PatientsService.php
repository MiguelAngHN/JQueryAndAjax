<?php

namespace App\Services;

use Illuminate\Http\Request;

interface PatientsService
{
    public function index();

    public function store(Request $request);
}