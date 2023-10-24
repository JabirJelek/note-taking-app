<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note; // Import the Note model

class NoteController extends Controller
{
    public function index()
    {
        // Retrieve all notes from the database
        $notes = Note::all();

        return view('notes.index', ['notes' => $notes]);
    }

    public function create()
    {
        return view('notes.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Create a new note
        Note::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('notes.index');
    }

    public function show(Note $note)
    {
        return view('notes.show', ['note' => $note]);
    }

    public function edit(Note $note)
    {
        return view('notes.edit', ['note' => $note]);
    }

    public function update(Request $request, Note $note)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Update the note
        $note->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect()->route('notes.index');
    }

    public function destroy(Note $note)
    {
        // Delete the note
        $note->delete();

        return redirect()->route('notes.index');
    }
}
