<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function report() {

        // $users = User::all();

        $data = [
            (object) ['columna1' => 'Dato 1', 'columna2' => 'Dato 2', 'columna3' => 'Dato 3', 'columna4' => 'Dato 4', 'columna5' => 'Dato 5'],
        ];

        $pdf = Pdf::loadView('users.report', compact('data'));
        return $pdf->stream('users_report.pdf');
        // return $pdf->download('invoice.pdf');
    }
}
