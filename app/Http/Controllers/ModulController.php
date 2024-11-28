<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function index()
    {
        $moduls = Modul::all();
        return view('modul.moduls',['title' => 'Modul BISINDO'], compact('moduls'));
    }

    public function show($id)
    {
        $modul = Modul::findOrFail($id);
        return view('modul.modul',['title' => 'Modul BISINDO'], compact('modul'));
    }
    public function adminIndex()
    {
        $moduls = Modul::all();
        return view('admin.modul.moduls',['title' => 'Modul BISINDO'], compact('moduls'));
    }

    public function adminShow($id)
{
    $modul = Modul::findOrFail($id);

    return view('admin.modul.modul', ['title' => 'Modul BISINDO'],compact('modul'));
}
    public function create()
    {
        return view('admin.modul.create', ['title' => 'Buat Modul']);
    }
    
    public function store(Request $request)
{
        // Validate the form input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'required|string|max:255', // Ensure the link is a valid URL
        ]);

        // Create a new Modul instance and store it in the database
        Modul::create([
            'title' => $validated['title'],
            'links' => $validated['link'], // Store the YouTube link
            
        ]);
        return redirect()->route('admin.moduls.index')->with('success', 'Modul created successfully.');

        

    }

    public function destroy(Modul $modul){
    $modul->delete();

    // Add a success message or redirect to a specific route
    return redirect()->route('admin.moduls.index')->with('success', 'Modul deleted successfully.');
    }

}
