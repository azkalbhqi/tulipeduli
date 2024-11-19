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
}
