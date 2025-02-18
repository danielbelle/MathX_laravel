<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function generateExercises(Request $request)
    {
        echo "Generate Exercises";
    }

    public function printExercises()
    {
        echo "Print Exercises";
    }

    public function exportExercises()
    {
        echo "Export Exercises";
    }
}
