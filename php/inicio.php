<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];


$header = 'From' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" .phpversion() . "\r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . Snombre . ",\r\n";
$mensaje .= "Asunto: " . $asunto . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . ",\r\n";
$mensaje .= "Su Telefono es: " . $telefono .",\r\n";
$mensaje .= "Su pagina Mensaje es: " . $mensaje .",\r\n";
$mensaje .= "Enviado el : " .date('d/m/Y', time());

$para = "ventas@canalava.org.mx";
$asunto =" Mensaje desde la pagina de Inicio";

if(mail($para, $asunto, utf8_decode($mensaje), $header))
    echo"<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
    echo"<script type='text/javascript'>window.location.href='index.html';</script>";
?>
