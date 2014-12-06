<?php
require('./template/menu.php');


   $usuario02 = new Usuario();
?>
<html>
    <head></head>
    <body>
        <div class='jumbotron'>
            <h1><?=$titulo ?></h1>
            <p><?=$contenido ?></p>
            <p><?=$nombre ?></p>
            <p><?php
                 $usuario02->setUsuario();
                 $usuario02->getUsuario();
                 $usuario02->readUsuarioG();

                ?>
            </p>
        </div>
    </body>
</html>
