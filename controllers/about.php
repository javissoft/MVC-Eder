<?php

$titulo='Bienvenido a Contact';

$contenido='......Contenido Contacto...... ';

$variables= array('titulo'=>$titulo, 'contenido'=>$contenido,);

/*nombre del archivo a llamar y manda las variables*/
view('about',$variables);