<?php
    $user = $_GET['usuario'];
    $password = $_GET['clave'];
    if (($user == "usuario") AND ($password == "12345")) {
        header("Location: formulario.html");
    } else {
        echo "¡Nombre de usuario o Clave de usuario incorrectos!";
        echo '<br><a href="'.$_SERVER['HTTP_REFERER'].'">Volver</a>';
}
?>