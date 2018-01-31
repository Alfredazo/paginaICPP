<?php
  /*Variable Array*/
  $imagenes_aVillaseca = count(glob('../aVillaseca/{*.jpg,*.gif,*.png,*.JPG}',GLOB_BRACE));

/*Datos PROYECTOS Actuales*/
$json = '[
          {
            "numero_imagen":"0",
            "nombre_obra":"AV INFANTE",
            "descripcion": "REPARACIÓN BLA BLA BLA BLA DESCRIPCIÓN ESTE PUEDE SER UN TEXTO GIGANTE LIMAHUIDA",
            "url_imagen": "assets/images/proyectos/avInfante/gallery00.jpg",
            "listado_imagenes":  [
                                    "../assets/images/proyectos/gallery00.jpg",
                                    "../assets/images/proyectos/gallery00.jpg",
                                    "../assets/images/proyectos/gallery00.jpg"
                                 ],
            "nombre_corto_obra":"Reparación Av. Infante"
          },
          {
            "numero_imagen":"1",
            "nombre_obra":"RESTAURACIÓN ASCENSOR VILLASECA DE VALPARAÍSO",
            "descripcion": "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi laoreet lobortis vulputate. Sed vel metus ut quam mollis fringilla. Vestibulum dolor felis, malesuada eget diam ut, euismod ultrices magna. Donec in nulla pharetra, pretium libero a, condimentum dui. Duis pulvinar ante et ipsum convallis, sit amet porta ante luctus. Morbi hendrerit elit orci. Maecenas ullamcorper justo in sodales aliquet. Nam id nulla vel magna mollis semper eu et diam. Aenean dignissim aliquam imperdiet. In hac habitasse platea dictumst. Vivamus eget risus et velit semper aliquam. Nulla facilisi. Praesent quis eros et tortor scelerisque posuere.Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus vehicula sodales felis sed hendrerit. Curabitur pretium, sapien tempus consectetur viverra, sapien magna tempus tellus, eu euismod neque lectus sodales risus. Curabitur pulvinar augue vel diam finibus, sit amet rutrum ante fermentum. Nullam eget urna aliquam, mollis justo non, sagittis sem. Ut a velit facilisis, blandit neque a, faucibus mi. Nunc sodales mauris nibh, non mollis sapien mollis et.",
            "url_imagen": "assets/images/proyectos/aVillaseca/1.jpg",
            "listado_imagenes": ["../assets/images/proyectos/aVillaseca/1.jpg" ,
                                "../assets/images/proyectos/aVillaseca/2.jpg" ,
                                "../assets/images/proyectos/aVillaseca/3.jpg" ,
                                "../assets/images/proyectos/aVillaseca/4.jpg" ,
                                "../assets/images/proyectos/aVillaseca/5.jpg" ,
                                "../assets/images/proyectos/aVillaseca/6.jpg" ,
                                "../assets/images/proyectos/aVillaseca/7.jpg" ,
                                "../assets/images/proyectos/aVillaseca/8.jpg" ,
                                "../assets/images/proyectos/aVillaseca/9.jpg" ,
                                "../assets/images/proyectos/aVillaseca/10.jpg" ,
                                "../assets/images/proyectos/aVillaseca/11.jpg" ,
                                "../assets/images/proyectos/aVillaseca/12.jpg" ,
                                "../assets/images/proyectos/aVillaseca/13.jpg" ,
                                "../assets/images/proyectos/aVillaseca/14.jpg" ,
                                "../assets/images/proyectos/aVillaseca/15.jpg" ,
                                "../assets/images/proyectos/aVillaseca/16.jpg" ,
                                "../assets/images/proyectos/aVillaseca/17.jpg" ,
                                "../assets/images/proyectos/aVillaseca/18.jpg" ,
                                "../assets/images/proyectos/aVillaseca/19.jpg" ,
                                "../assets/images/proyectos/aVillaseca/20.jpg" ,
                                "../assets/images/proyectos/aVillaseca/21.jpg" ,
                                "../assets/images/proyectos/aVillaseca/22.jpg" ,
                                "../assets/images/proyectos/aVillaseca/23.jpg" ,
                              "../assets/images/proyectos/aVillaseca/24.jpg"],
              "nombre_corto_obra":"Reparación Ascensor Villaseca"
          },
          {
            "numero_imagen":"2",
            "nombre_obra":"COYA",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery01.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"3",
            "nombre_obra":"J. CARRASCO",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"4",
            "nombre_obra":"LAS AGUADA",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"5",
            "nombre_obra":"LAS CAÑAS",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"6",
            "nombre_obra":"LIMAHUIDA",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"7",
            "nombre_obra":"LOS LIRIOS",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"8",
            "nombre_obra":"MERCADO PUERTO",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"9",
            "nombre_obra":"MIRADOR",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"10",
            "nombre_obra":"PANGUESILLO",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"11",
            "nombre_obra":"PANGUESILLO",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"12",
            "nombre_obra":"PETORCA",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"13",
            "nombre_obra":"SAN JOSE",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"14",
            "nombre_obra":"SANTO DOMINGO",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"15",
            "nombre_obra":"SOTERRAMIENTO",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"16",
            "nombre_obra":"TAHUINCO",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          },
          {
            "numero_imagen":"17",
            "nombre_obra":"TEATRO VIÑA",
            "descripcion": "Obra Teatro",
            "url_imagen": "assets/images/proyectos/gallery03.jpg",
            "listado_imagenes":  [
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg",
                                    "../assets/images/servicio2.jpg"
                                 ],
            "listado_titulo_imagen":[
                                     "MANTENIMIENTO GRUA",
                                     "CONSTRUCCIÓN EDIFICIO",
                                     "EDIFICACIÓN GRUA"
                                    ]
          }
        ]';



  $arraylist = json_decode($json);
  return $arraylist;
 ?>
