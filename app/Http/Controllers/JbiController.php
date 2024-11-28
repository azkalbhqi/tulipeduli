<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jbi;

class JbiController extends Controller
{
    public function index()
    {
        $jbis = Jbi::all();
        return view('jbi.jbis$jbis',['title' => 'Halaman jbi'], compact('jbis'));
    }

    public function show($id)
    {
        $jbi = Jbi::findOrFail($id);
        return view('jbi.jbi',['title' => 'Halaman jbi'], compact('jbi'));
    }
    public function adminIndex()
    {
        $jbis = Jbi::all();
        return view('admin.jbi.jbis',['title' => 'Halaman jbi'], compact('jbis'));
    }

    public function adminShow($id)
{
    $jbi = Jbi::findOrFail($id);

    return view('admin.jbi.jbi', ['title' => 'Halaman jbi'],compact('jbi'));
}
    public function create()
    {
        return view('admin.jbi.create', ['title' => 'Buat jbi']);
    }
    
    public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255', // Ensure the link is a valid URL
            'no_telp' => 'required|string|max:255', // Ensure the link is a valid URL
        ]);

        // Create a new jbi instance and store it in the database
        jbi::create([
            'nama' => $validated['nama'],
            'alamat' => $validated['alamat'], // Store the YouTube link
            'no_telp' => $validated['no_telp'], // Store the YouTube link
        ]);

    }

    public function destroy(jbi $jbi)
{
    $jbi->delete();

    // Add a success message or redirect to a specific route
    return redirect()->route('admin.jbi.jbis')->with('success', 'jbi deleted successfully.');
}
}
