<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (){

        //aquí se tendria que llamara a un modelo de la bbdd

        // url:     http://127.0.0.1:8000/usuarios?empty

        if(request()->has('empty')){
            $users=[];

        }else{
            $users=[
                'Joel',
                'Ellie',
                'Tess',
                'Tommy',
                'Bill',
                '<script>alert("Clicker")</script>',
                '<p>Ima</p>'
            ];
        }



        $title= 'Listado de Usuarios';

        // pasamos como argumento de la vista en forma de array
        return view('users',[
                'users'=> $users,
                'title'=> $title
        ]);

         // o con el metodo whit
       //  return view('users')
        //    ->with('users', $users)
       //     ->with('title','listado de usuarios');
    }

    public function show ($id){


        $title= 'Usuario: '. $id;


        $text= 'Mostrando detalle del usuario: ' .$id;


            return view('show',[
                'texto'=> $text,
                'title'=> $title
        ]);
    }

    public function create (){
      //   return 'Usuarios';
          return 'Crear nuevo usuario';
    }


}

