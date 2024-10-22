<div class="alert alert-info">
    <h2>Mensaje enviado!!</h2>
    <ul>
        <li>Nombre: <?= $firstName ?> </li>
        <li>Apellido: <?php echo isset($lastNames) ? $lastNames :  ""?> </li>
        <li>Email: <?= $email ?> </li>
        <li>Subject: <?= $subject ?> </li>
        <li>Message: <?php echo isset($message) ? $message :  ""?> </li>
    </ul>
</div>