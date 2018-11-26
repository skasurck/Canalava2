<?php
$nombre = $_POST['nombre'];
$apellido = $_POSR['apellido'];
$rfc = $_POSR['razon'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$pagina = $_POST['pagina'];


$header = 'From' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" .phpversion() . "\r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Apellido : " . $apellido . ",\r\n";
$mensaje .= "RFC : " . $rfc . ",\r\n";
$mensaje .= "Asunto: " . $asunto . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . ",\r\n";
$mensaje .= "Su Telefono es: " . $telefono .",\r\n";
$mensaje .= "Su pagina web es: " . $pagina .",\r\n";
$mensaje .= "Enviado el : " .date('d/m/Y', time());

$para = "ventas@canalava.org.mx";
$asunto =" Mensaje desde la pagina de Afiliaciones";

if(mail($para, $asunto, utf8_decode($mensaje), $header))
    echo"<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
    echo"<script type='text/javascript'>window.location.href='index.html';</script>";
?>


