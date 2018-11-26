<?php
$nombre = $_POST['nombre'];
$mail = $_POST['email'];

$header = 'From' . $mail . "\r\n";
$header .= "X-Mailer: PHP/" .phpversion() . "\r\n";
$header .= "Mine-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . "\n";
$mensaje .= "Asunto: infomes sobre el curso que esta en la página de inicio \n";
$mensaje .= "Su e-mail es: " . $mail . "\n";
$mensaje .= "Enviado el : " .date('d/m/Y', time());

$para = "ventas@canalava.org.mx";
$asunto =" Mensaje sobre cursos de la pagina de Inicio";

if(mail($para, $asunto, utf8_decode($mensaje), $header))
    echo"<script type='text/javascript'>alert('Tu mensaje ha sido enviado exitosamente');</script>";
    echo"<script type='text/javascript'>window.location.href='../index.html';</script>";
?>
