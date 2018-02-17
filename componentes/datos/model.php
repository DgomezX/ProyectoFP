<?php
class modelDatos{
    public static function verifReg($nombre){
        $db = new database();
        $sql = 'SELECT * FROM users WHERE nick = :nick';
        $params = array(
            ':nick'   => $nombre
        );
        $db->query($sql, $params);
        $usuario = $db->cargaFila();
        return $usuario;
    }

    public static function agregarDatos($id_user, $edad, $estatura,$peso,$calorias,$proteinas,$hidratos,$grasas){
        $db = new database();
        $sql = 'INSERT INTO datos_usuarios VALUES(NULL,:id_user,:edad,:estatura,:peso,:calorias,:proteinas,:hidratos,:grasas)';
        $params = array(
            ':id_user'   => $id_user,
            ':edad'     => $edad,
            ':estatura'    => $estatura,
            ':peso'    => $peso,
            ':calorias' => $calorias,
            ':proteinas' => $proteinas,
            ':hidratos' => $hidratos,
            ':grasas' => $grasas

        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }

    /*public static function actualizarDatos($id_user, $edad, $estatura,$peso,$calorias,$proteinas,$hidratos,$grasas){
        $db = new database();
        $sql = 'UPDATE datos_usuarios SET edad =:edad,estatura=:estatura,peso=:peso,calorias=:calorias,proteinas=:proteinas,hidratos=:hidratos,grasas=:grasas WHERE id_user=:id_user';
        $params=array(
            ':id_user'   => $id_user,
            ':edad'     => $edad,
            ':estatura'    => $estatura,
            ':peso'    => $peso,
            ':calorias' => $calorias,
            ':proteinas' => $proteinas,
            ':hidratos' => $hidratos,
            ':grasas' => $grasas
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }*/
}
