<?php

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
        /*Descomentar al subirlo al servidor, en local no me funciona por que no tengo configurado ningun servidor de correo*/
        /*mail($to,$asunto,$contenido,$headers);*/
        echo '¡Mensaje enviado!, Gracias por ponerse en contacto con nosotros, le responderemos con la mayor brevedad posible';
    }
    else
    {
        echo 'Error en el envio';
    }



