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
        $ninjas = Ninja::orderBy('created_at', 'desc')->get();

        return view('ninjas.index', ['ninjas' => $ninjas, 'token' => true]);
    }

    public function show($id)
    {
        // route /ninjas/id
        // fetch a single record and pass into show view
    }

    public function create()
    {
        // route /ninjas/create
        // render a create view (with web form) to users
    }

    public function store()
    {
        // route /ninjas/ (POST)
        // handle POST request to store a new ninja record in table
    }
}
