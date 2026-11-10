<?php

namespace App\Http\Controllers;

use App\Models\Note;

class NoteController extends Controller



{
    $notes = Note::all();
    public function index()
    {
        return view('index',['notes'-> $notes]);
    }
}



