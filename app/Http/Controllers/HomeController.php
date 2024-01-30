<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use App\Models\Csr;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $activities = Activitie::all();
        return view('welcome', compact('activities'));
    }
}
