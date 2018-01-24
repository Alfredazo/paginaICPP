<?php
  /*Variable Array*/

/*Datos SERVICIOS*/
$json = '[
          {
            "numero_servicio":"0",
            "nombre_servicio":"OBRAS CIVILES",
            "descripcion": "Estamos preparados para concebir, planificar, diseñar, construir operar y mantener obras estructurales y de infraestructuras destinadas a aprovechar y  a transformar los recursos naturales en beneficio de la satisfacción eficiente, segura, justa, económica y sustentable de las necesidades materiales de la sociedad.",
            "url_imagen": "assets/images/servicios/servicio1.jpg"
          },
          {
            "numero_servicio":"1",
            "nombre_servicio":"MONTAJES INDUSTRIALES",
            "descripcion": "La experiencia acumulada en los distintos sectores de la empresa nos permite ofrecer un servicio eficaz adaptándonos a las necesidades de nuestros clientes y satisfacer las necesidades de construcción y montaje industrial de nuestros clientes a nivel nacional y entregarles la máxima confiabilidad en cada uno de los proyectos que ejecutamos.",
            "url_imagen": "assets/images/servicios/servicio2.jpg"
          },
          {
            "numero_servicio":"2",
            "nombre_servicio":"INGENIERÍA EN PROYECTOS",
            "descripcion": "Nuestras capacidades nos permiten el desarrollo de proyectos en las áreas de ingeniería hidráulica, sanitaria, estructuras, eléctricas y caminos.",
            "url_imagen": "assets/images/servicios/servicio3.jpg"
          },
          {
            "numero_servicio":"3",
            "nombre_servicio":"MOVIMIENTO DE TIERRA",
            "descripcion": "Una vez definido el trazado en planta de una obra vial, es necesario conocer la conformación del terreno circundante para definir la posición final de la rasante, y las características de las secciones transversales que resultarán al imponer la plataforma de proyecto.",
            "url_imagen": "assets/images/servicios/servicio4.jpg"
          },
          {
            "numero_servicio":"4",
            "nombre_servicio":"ARQUITECTURA",
            "descripcion": "Proyectar y construir espacios para que las empresas puedan desarrollar sus actividades adecuadamente, sana, confortable y segura.Debe interpretarse como un todo funcional y no una sumatoria de partes, se puede desglosar para su estudio pero cada parte pierde sentido sin la totalidad.",
            "url_imagen": "assets/images/servicios/servicio5.jpg"
          },
          {
            "numero_servicio":"5",
            "nombre_servicio":"INFRAESTRUCTURAS SANITARIAS",
            "descripcion": "Elaborar Proyectos de agua potable y alcantarillados particulares y su tramitación ante autoridades pertinentes.",
            "url_imagen": "assets/images/servicios/servicio6.jpg"
          }
        ]';



  $arraylistServicios = json_decode($json);
  return $arraylistServicios;
 ?>
