<?php

$titulo='Bienvenido a Home';

$contenido='Contenido de Home ';

$variables= array('titulo'=>$titulo, 'contenido'=>$contenido,);

/*nombre del archivo a llamar y manda las variables*/
view('home',$variables);


