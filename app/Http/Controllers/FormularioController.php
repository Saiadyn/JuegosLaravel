<?php

namespace App\Http\Controllers;
use App\Mail\FormularioMailable;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index(){
        return view("/index");
    }
    public function store(Request $request){

        $request->validate([
            "nombre" => "required",
            "email" => "required"
        ]);

        $correo = new FormularioMailable($request->all());
        Mail::to('juegos@gmail.com')->send($correo);
        return "Mensaje enviado";
    }
}
