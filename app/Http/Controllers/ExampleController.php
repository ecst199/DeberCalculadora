<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    function get()
    {
        return "hola";
    }

    function sumar(Request $data)
    {
        $valores = $data->json()->all();
        return $valores ["a"] + $valores ["b"];
    }
    function restar(Request $data)
    {
        $valores = $data->json()->all();
        return $valores ["a"] - $valores ["b"];
    }
    function multiplicar(Request $data)
    {
        $valores = $data->json()->all();
        return $valores ["a"] * $valores ["b"];
    }
    function dividir(Request $data)
    {
        $valores = $data->json()->all();
        return $valores ["a"] / $valores ["b"];
    }
}
