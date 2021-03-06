<?php

namespace App\Http\Controllers;

use App\Note;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::paginate(10);

        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'note' => ['required', 'max:200']
        ]);

        $note = Note::create(['note' => $request->note]);

        return redirect('notes');
    }

    public function show($note)
    {
        $note = Note::findOrFail($note);

        return view('notes/details')->with('note', $note);
    }
}
