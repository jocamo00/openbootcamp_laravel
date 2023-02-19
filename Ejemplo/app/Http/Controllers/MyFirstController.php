<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MyFirstController extends Controller
{
    public function contactPage() {

        return view('contact');
    }

    public function processContact(){
        echo 'Formulario completado';
        die();
    }

    public function processContactPut(){
        echo 'Formulario completado con put';
        die();
    }
}
