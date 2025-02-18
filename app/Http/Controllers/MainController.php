<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo "Home Page";
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
