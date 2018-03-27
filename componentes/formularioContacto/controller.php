<?php
if(isset($_POST['contactar'])){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $to = 'dreamdietcontact@gmail.com';
    $asunto = 'Contacto desde la web Dreamdiet';
    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From: dreamdiet@web.es' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $contenido = 'Nombre: '.$nombre.'<br/> Correo: '.$email.'<br/> Mensaje: '.$mensaje;
    if($contenido != ''){
        mail($to,$asunto,$contenido,$headers);
        header('Location: http://dreamdiet.com.local/');
    }
    else
    {
        echo 'Error en el envio';
    }
}
