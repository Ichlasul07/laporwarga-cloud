<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->get();

        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'location' => 'required',
            'description' => 'required',
            'photo' => 'required|image'
        ]);

        $path = $request->file('photo')->store('reports', 'public');

        Report::create([
            'title' => $request->title,
            'category' => $request->category,
            'location' => $request->location,
            'description' => $request->description,
            'photo' => $path,
            'status' => 'pending'
        ]);

        return redirect('/reports');
    }
}
