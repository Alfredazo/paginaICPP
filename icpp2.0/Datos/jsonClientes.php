<?php

/*Datos Clientes Actuales*/
$json = '[
          {
            "numero_cliente":"0",
            "nombre_cliente": "Municipio Salamanca",
            "url_imagen": "assets/images/clientes/municipioSalamanca.png"
          },
          {
            "numero_cliente":"1",
            "nombre_cliente": "Municipio Salamanca",
            "url_imagen": "assets/images/clientes/municipioSalamanca.png"
          },
          {
            "numero_cliente":"2",
            "nombre_cliente": "Municipio Salamanca",
            "url_imagen": "assets/images/clientes/municipioSalamanca.png"
          }
        ]';

  $arraylistClientes = json_decode($json);
  return $arraylistClientes;
 ?>
