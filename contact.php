<?php
$arrayErrores = array();
$nombre = '';
$apellido = '';
$email = '';
$asunto = '';
$mensaje = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim(htmlspecialchars($_POST['nombre']));
    $apellido = trim(htmlspecialchars($_POST['apellido']));
    $email = (trim(htmlspecialchars($_POST['email'])));
    $asunto = trim(htmlspecialchars($_POST['asunto']));
    $mensaje = trim(htmlspecialchars($_POST['mensaje']));

    if (empty($nombre) && empty($email) && empty($asunto)) {
        if (empty($nombre)) {
            array_push($arrayErrores, "El campo First Name no puede estar vacío");
        }

        if (empty($email)) {
            array_push($arrayErrores, "El campo email no puede estar vacío");
        } else if ((filter_var($email, FILTER_VALIDATE_EMAIL)) === false) {
            echo "Email incorrecto <br><br>";
            array_push($arrayErrores, "Email no valido");
        }

        if (empty($asunto)) {
            array_push($arrayErrores, "El campo Subject no puede estar vacío");
        }
    } else {
        echo 'Algún campo requerido está vacio' . '<br>' . '<br>';
    }
}

function mostrarMensaje($arrayErrores,$nombre, $apellido, $email, $asunto, $mensaje)
{

    if (!empty($arrayErrores)) {
        echo "<div class='alert alert-danger'><ul>";
        foreach ($arrayErrores as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul></div>";
    } elseif ($_SERVER['REQUEST_METHOD']== 'POST') {
        echo "<div class='alert alert-info'>";
        echo "First Name: ".htmlspecialchars($nombre). "<br>";
        echo "Last Name: ".htmlspecialchars($apellido). "<br>";
        echo "Email: ".htmlspecialchars($email). "<br>";
        echo "Subject: ".htmlspecialchars($asunto). "<br>";
        echo "Message: ".htmlspecialchars($mensaje). "<br>";
        echo "</div>";
    }
}

require 'utils/utils.php';
require 'views/contact.view.php';
