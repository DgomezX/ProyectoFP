<?php
class modelLogin{
    public static function registro($nombre, $pass){
        $db = new database();
        $sql = 'INSERT INTO users VALUES(NULL,:nick, :pass,:photo,:id_nivel)';
        $params = array(
            ':nick'   => $nombre,
            ':pass'     => $pass,
            ':photo'     => 'default.png',
            ':id_nivel'    => 3
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }

    public static function verifReg($nombre){
        $db = new database();
        $sql = 'SELECT * FROM users WHERE nick = :nick';
        $params = array(
            ':nick'   => $nombre
        );
        $db->query($sql, $params);
        $filas= $db->affectedRows();
        return $filas;
    }

    public static function verifLog($nombre, $password){
        $db = new database();
        $sql = 'SELECT * FROM users WHERE nick = :nick AND password = :password';
        $params = array(
            ':nick'   => $nombre,
            ':password' => $password
        );
        $db->query($sql, $params);
        $filas= $db->affectedRows();
        $usuario = $db->cargaFila();

        if($usuario){
            $_SESSION["usuario"] = $usuario;
        }else{
            $_SESSION["usuario"] = NULL;
        }
        return $filas;
    }

}