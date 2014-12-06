<?php

$titulo='Bienvenido Usuario';

$contenido=' Contenido Usuario ';

$saludo='Eder';

$variables= array('titulo'=>$titulo, 'contenido'=>$contenido, 'saludo'=>$saludo);

/*nombre del archivo a llamar y manda las variables*/
view('usuario',$variables);