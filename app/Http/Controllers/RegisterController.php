<?php

namespace HANA\Http\Controllers;


class RegisterController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
       return "hola desde controller";
    }
     public function nombre($nombre)
    {
       return "hola mi nombre es".$nombre;
    }
}