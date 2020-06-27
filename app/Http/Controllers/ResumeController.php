<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('resume', compact('user'));
    }
}
