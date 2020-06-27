<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = auth()->user();

        // return view('resume_simple', compact('user'));
        return view('resume-ref', compact('user'));
        // return view('resume2', compact('user'));
    }

    public function download()
    {
        $user = auth()->user();

        $pdf = \PDF::loadView('resume-ref', compact('user'));
        return $pdf->download('resume.pdf');
    }
}
