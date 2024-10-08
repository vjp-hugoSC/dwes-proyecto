<?php
$arrayErrores = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim(htmlspecialchars($_POST['nombre']));
    $apellido = trim(htmlspecialchars($_POST['apellido']));
    $email = (trim(htmlspecialchars($_POST['email'])));
    $asunto = trim(htmlspecialchars($_POST['asunto']));
    $mensaje = trim(htmlspecialchars($_POST['mensaje']));

    if (!empty($nombre) && !empty($email) && !empty($asunto)) {
        if (!empty($nombre)){
            echo "Nombre: $nombre <br>";
        }else{
            array_push($arrayErrores,"El campo First Name no puede estar vacío");
        }    

        echo "Apellido: $apellido <br>";

        if (!empty($email)){
            echo "Email: $email <br>";
        }else if ((filter_var($email, FILTER_VALIDATE_EMAIL)) === false) {
            echo "Email incorrecto <br><br>";
            array_push($arrayErrores,"Email no valido");
        } else {
            array_push($arrayErrores,"El campo email no puede estar vacío");
        }
        
        if (!empty($asunto)){
            echo "Nombre: $nombre <br>";
        }else{
            array_push($arrayErrores,"El campo Subject no puede estar vacío");
        }   

        echo "Mensaje: $mensaje <br><br>";

    } else {
        echo 'Algún campo requerido está vacio' . '<br>' . '<br>';
    }
}


require 'views/contact.view.php';

?>