<?php

namespace App\Http\Controllers;

// use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        return view('index');
    }
}