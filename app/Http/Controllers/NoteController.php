<?php

namespace App\Http\Controllers;

use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();
        // return $notes;
        return view('index', ['notes' => $notes]);
    }
}



