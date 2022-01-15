<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct(){
        return $this->middleware('guru');
    }

    public function index()
    {
        return view('guru.index');
    }

    public function getRPP()
    {
        return view('guru.RPP.add');
    }
}
