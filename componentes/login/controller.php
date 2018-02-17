<?php
include 'componentes/login/model.php';
$location = 'login';
$errorReg = '';
$errorLog = '';
if (isset($_POST['crear'])){
    $user = $_POST['nombre1'];
    $pass = $_POST['pass1'];
    $verifPass = $_POST['passrep'];
    $verifRegist = modelLogin::verifReg($user);
    if($pass == $verifPass && $verifRegist == 0){
        $newRegistro = modelLogin::registro($user,$pass);
        $errorReg =  "Usuario registrado correctamente";
        $_SESSION['nick'] = $user;
        header("Location: index.php?option=datos");
    }else{
        if($pass != $verifPass){
            $errorReg = "Las contraseñas no coinciden";
        }elseif($verifRegist > 0){
            $errorReg = "El usuario ya existe";
        }
    }
}
if (isset($_POST['entrar'])){
    $user = $_POST['nombre'];
    $pass = $_POST['pass'];
    $verifLogin = modelLogin::verifLog($user,$pass);
    if($verifLogin == 1){
        header("Location: index.php?option=perfil");
    }else{
        $errorLog = "Has introducido mal tu usuario o tu contraseña";
    }

}
include 'componentes/login/login_view.php';