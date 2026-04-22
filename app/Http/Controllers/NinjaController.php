<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;
use App\Models\Dojo;

class NinjaController extends Controller
{
    public function index()
    {
        // route /
        // fetch all record and pass into index view
        $ninjas = Ninja::orderBy('created_at', 'desc')->paginate(5);

        return view('ninjas.index', ['ninjas' => $ninjas, 'token' => true]);
    }

    public function show($id)
    {
        // route /ninjas/id\
        $ninja = Ninja::findOr($id);
        return view('ninjas.show', ['ninja' => $ninja]);
    }

    public function create()
    {
        // route /ninjas/create
        $dojos = Dojo::all();

        return view('ninjas.create', ['token' => true, 'dojos' => $dojos]);
    }

    public function store(Request $request)
    {
        // route /ninjas/ (POST)
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'skill' => 'required|integer|min:0|max:100',
            'bio' => 'required|string|min:20|max:1000',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        Ninja::create($validate);

        return redirect()->route('ninjas.index');
    }
}
