<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require '../vendor/autoload.php';
  if(isset($_POST['nombre']))
  {
    $fecha = date("d/m/Y");
    $mail = new PHPMailer(true);
    $mail ->CharSet = "UTF-8";                         // Passing `true` enables exceptions
    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = '';                 // SMTP username
        $mail->Password = '';                           // SMTP password
        //$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 25;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('soporte.pagina.web.icpp@gmail.com', 'Icpp.cl[ID:'.time().' Enviado:'.$fecha.']'); // este manda
        $mail->addAddress('alfredo.andrade@icpp.cl', 'CONSTRUCTURA PUERTO PRINCIPAL');     // este recibe
      //  $mail->addAddress('ellen@example.com');               // Name is optional
      //  $mail->addReplyTo('info@example.com', 'Information');
      //  $mail->addCC('cc@example.com');
      //  $mail->addBCC('bcc@example.com');

        //Content

        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = ('IP REMITENTE '.getRealIP());
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];


        $mail->Body    = "NOMBRE CONTACTO:      ".$nombre.
                         "<br>CORREO ELECTRONICO:   ".$correo.
                         "<br>NRO° TELEFONICO:      ".$telefono.
                         "<br>MENSAJE: <br>".$mensaje.
                         "<br><br><br><br>".getRealIP();

        $mail->send();
        $mensaje = 'Enviado Correctamente';
        header('Location: /icpp2.0/#contacto');
    } catch (Exception $e) {
        $mensaje = 'No se pudo Enviar';
        echo $mensaje;

    }
  }else{
    $mensaje = 'No se pudo Enviar';
    echo $mensaje;
    header('Location: /icpp2.0/#contacto');
  }

function getRealIP()
{
  if (!empty($_SERVER['HTTP_CLIENT_IP']))
            return $_SERVER['HTTP_CLIENT_IP'];
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
            return $_SERVER['HTTP_X_FORWARDED_FOR'];

        return $_SERVER['REMOTE_ADDR'];
}
?>
