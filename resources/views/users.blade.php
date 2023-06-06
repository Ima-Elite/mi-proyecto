<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title> <?php  echo e($title) ?></title>

<!-- para utilizar variable que vienen del controlador -->

</head>
<body>


<h2><?php echo e($title) ?></h2>

<hr>


<ul>

     <!-- @ esta directiva  es gracias a las plantillas blade -->


     @if (! empty($users))


             @foreach ($users as $user )

           <!--    <li> <?php // echo e($user) ?> </li>-->

                   <li> {{$user}}</li>

           <!-- con la funcion e( ) el código html-js se muetra como texto plano -->

             @endforeach
     @else
            <p>No hay usuarios registrados</p>

     @endif

</ul>

</body>
</html>
