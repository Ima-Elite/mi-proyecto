<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersModuleTest extends TestCase
{
    /**
     * @Test
     */

    //Comprueba la url con /usuarios y si el texto que devuelve es: /usuarios
    public function test_it_loads_the_user()
    {
        $this->get('/usuarios')

                // respuesta del servidor. 200 ok, 404 no encontrada
               ->assertStatus(200)

                // la respuesta devuelta por una prueba.
               ->assertSee('Listado de Usuarios');
    }

    //Comprueba la url con /usuarios/5 y si el texto que devuelve es: Mostrando detalle del usuario: 5
    public function test_it_loods_the_user_details_page()
    {
        $this->get('/usuarios/5')

               ->assertStatus(200)

               ->assertSee("Mostrando detalle del usuario: 5");
    }

      //Comprueba la url con /usuarios/5 y si el texto que devuelve es: Mostrando detalle del usuario: 5
      public function test_it_loods_the_new_user()
      {
          $this->withoutExceptionHandling();

          $this->get('usuarios/nuevo')

                 ->assertStatus(200)

                 ->assertSee("Crear nuevo usuario");
      }

      //Comprueba la url con /saludo/ima/kini y si el texto que devuelve es: Mostrando detalle del usuario: 5
      public function test_it_name_and_nickname()
      {
          $this->withoutExceptionHandling();

          $this->get('/saludo/ima/kini')

                 ->assertStatus(200)

                 ->assertSee("Bienvenido: Ima, tu nikname es: kini");
      }

        //Comprueba la url con /usuarios?empty de esa manera en la vista aparece: No hay usuarios registrados
        public function test_it_user_list_empty()
        {
            $this->withoutExceptionHandling();

            $this->get('/usuarios?empty')

                   ->assertStatus(200)

                   ->assertSee("No hay usuarios registrados");
        }


        //Comprueba la url con /usuarios?empty de esa manera en la vista tiene que aparecer los registros


         public function test_it_user_list_not_empty()
         {
             $this->withoutExceptionHandling();

             $this->get('/usuarios')

                    ->assertStatus(200)

                       // no se debe ver est mensaje
                    ->assertDontSee('No hay usuarios registrados');
         }





}

