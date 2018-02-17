<?php

if(!isset($_SESSION['usuario']))
{
    echo "No hay ninguna sesion iniciada";
//esto ocurre cuando la sesion caduca.

}
else
{
    session_destroy();
    header("Location: index.php?option=login");
}