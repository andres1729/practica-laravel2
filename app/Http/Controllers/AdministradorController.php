<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //
    public function __construct(){
      $this->middleware('EsAdmin');
    }

    public function index(){
      return "Felicidades tienes rol de Lider. Podras llevar el peso de la responsabilidad?";
    }
}
