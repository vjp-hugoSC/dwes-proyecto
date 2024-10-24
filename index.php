<?php
    require 'utils/utils.php';
    require 'entities/imagenGaleria.class.php';

    $arrayImagenes = [];

    for ($i=1; $i < 12; $i++) { 
        $imagenGaleria = new imagenGaleria("$i.jpg","descripcion imagen".$i,rand(1,2000),rand(1,2000),rand(1,2000));
        
        $arrayImagenes[] = $imagenGaleria;
    }
    

    require 'views/index.view.php';
?>