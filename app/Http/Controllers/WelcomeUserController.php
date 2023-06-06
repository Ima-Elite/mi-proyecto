<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{

    public function index($name,$nikname = null){
        $name=ucfirst($name);

        if($nikname ){
            return "Bienvenido: {$name}, tu nikname es: {$nikname}";
        }else{
            return "Bienvenido: {$name}";
        }

    }

}
