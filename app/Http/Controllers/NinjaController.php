<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja;

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
        return view('ninjas.create', ['token' => true]);
    }

    public function store()
    {
        // route /ninjas/ (POST)
        // handle POST request to store a new ninja record in table
    }
}
