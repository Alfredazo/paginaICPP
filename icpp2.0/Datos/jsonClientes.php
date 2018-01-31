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
            "nombre_cliente": "Municipio Valparaíso",
            "url_imagen": "assets/images/clientes/municipalidadValparaiso.png"
          },
          {
            "numero_cliente":"2",
            "nombre_cliente": "Municipio Illapel",
            "url_imagen": "assets/images/clientes/illapel.jpg"
          },
          {
            "numero_cliente":"3",
            "nombre_cliente": "Municipio Machalí",
            "url_imagen": "assets/images/clientes/machali.jpg"
          },
          {
            "numero_cliente":"4",
            "nombre_cliente": "Municipio Villa Alemana",
            "url_imagen": "assets/images/clientes/villaAlemana.png"
          },
          {
            "numero_cliente":"5",
            "nombre_cliente": "Municipio San José Maipo",
            "url_imagen": "assets/images/clientes/maipo.png"
          },
          {
            "numero_cliente":"6",
            "nombre_cliente": "Municipio Llay Llay",
            "url_imagen": "assets/images/clientes/llayllay.svg.png"
          },
          {
            "numero_cliente":"7",
            "nombre_cliente": "Municipio Viña del Mar",
            "url_imagen": "assets/images/clientes/viña.png"
          },
          {
            "numero_cliente":"8",
            "nombre_cliente": "Municipio Los Vilos",
            "url_imagen": "assets/images/clientes/vilos.png"
          },
          {
            "numero_cliente":"9",
            "nombre_cliente": "Municipio Putaendo",
            "url_imagen": "assets/images/clientes/putaendo.svg.png"
          },
          {
            "numero_cliente":"10",
            "nombre_cliente": "Municipio Coquimbo",
            "url_imagen": "assets/images/clientes/coquimbo.jpg"
          },
          {
            "numero_cliente":"11",
            "nombre_cliente": "Municipio Zapallar",
            "url_imagen": "assets/images/clientes/zapallar.jpg"
          },
          {
            "numero_cliente":"12",
            "nombre_cliente": "Municipio Quilpue",
            "url_imagen": "assets/images/clientes/quilpue.svg.png"
          },
          {
            "numero_cliente":"13",
            "nombre_cliente": "Municipio Los Andes",
            "url_imagen": "assets/images/clientes/losAndes.png"
          },
          {
            "numero_cliente":"14",
            "nombre_cliente": "Ministerio De Obras Publicas",
            "url_imagen": "assets/images/clientes/ministerioObras.jpg"
          },
          {
            "numero_cliente":"15",
            "nombre_cliente": "Municipio Quintero",
            "url_imagen": "assets/images/clientes/quintero.png"
          },
          {
            "numero_cliente":"16",
            "nombre_cliente": "Municipio Quillota",
            "url_imagen": "assets/images/clientes/quillota.jpg"
          }
        ]';

  $arraylistClientes = json_decode($json);
  return $arraylistClientes;
 ?>
