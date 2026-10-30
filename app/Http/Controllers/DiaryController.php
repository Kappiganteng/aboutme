<?php

namespace App\Http\Controllers;

use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index()
    {
        $diaries = Diary::orderBy('entry_date', 'desc')
            ->orderBy('id', 'desc')
            ->get();

        return view('diary', compact('diaries'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'entry_date' => 'required|date',
            'mood' => 'nullable|string|max:50',
            'content' => 'required|string',
        ]);

        Diary::create($validated);

        return redirect()->route('diary.index')
            ->with('success', 'Catatan diary berhasil disimpan!');
    }
}