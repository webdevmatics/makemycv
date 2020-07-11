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

    public function download()
    {
        $user = auth()->user();

        $pdf = \PDF::loadView('resume', compact('user'));

        // $fileName = $user->name.'resume.pdf';

        return $pdf->download('resume.pdf');
    }
}
