<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
      //$request->session()->put(['hilbert'=>'Lider']);

    //  $request->session()->flash('Entrada1', 'Exito! );
     // $request->session()->flush();

     $request->session()->regenerate(); //sirve para seguridad pues el token cambia por cada session

      return $request->session()->all();
    }
}
