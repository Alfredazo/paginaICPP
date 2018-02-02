<?php
  /*Pagina creada con el unico motivo de no escribir tanto en el Json al Actualizar Datos*/
  $nombreCarpetaObra= 'jCarrasco';

  $total_imagenes = count(glob('../'.$nombreCarpetaObra.'/{*.jpg,*.gif,*.png,*.JPG}',GLOB_BRACE));
  echo 'Nombre Carpeta: '.$nombreCarpetaObra;
  echo '<br>';
  echo 'total_imagenes_carpetas = '.$total_imagenes;
  echo '<br>';
  echo 'Array JSON:<br><hr>';
  echo '[';
  for ($i=1; $i < $total_imagenes; $i++) {
    echo '"../assets/images/proyectos/'.$nombreCarpetaObra.'/'.$i.'.jpg" ,';
    echo '<br>';
  }
    echo '"../assets/images/proyectos/'.$nombreCarpetaObra.'/'.$i.'.jpg"';
  echo ']';


 ?>
