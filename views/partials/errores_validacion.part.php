<div class="alert alert-danger">
    <h2>Error de validación!!</h2>
    <ul>
        <?php foreach ($errors as $error) :?>
            <li><?= $error ?></li>
        <?php endforeach;?>
    </ul>
</div>