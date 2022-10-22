<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $data = ["amany","layung","asma"];
        return view('dosen',['nama' => $data]);
    }
}
