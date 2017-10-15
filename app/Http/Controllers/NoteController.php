<?php

namespace App\Http\Controllers;

use App\Note;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all();

        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }
}
