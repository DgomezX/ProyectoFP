<?php
class modelPerfil{
    public static function obtenDatos($id){
        $db = new database();
        $sql = 'SELECT * FROM datos_usuarios WHERE id_user = :id_user';
        $params = array(
            ':id_user'   => $id
        );
        $db->query($sql, $params);
        $datos = $db->cargaFila();
        return $datos;
    }

    public static function addDieta($nombre, $id_usr){
        $db = new database();
        $sql = 'INSERT INTO dietas VALUES(NULL,:nombre, :id_usr)';
        $params = array(
            ':nombre'   => $nombre,
            ':id_usr'     => $id_usr
        );
        $db->query($sql, $params);
        return $db->affectedRows();
    }

    public static function obtenProgreso($id){
        $db = new database();
        $sql = 'SELECT * FROM evolucion_usuario WHERE id_user = :id_user ORDER BY fecha DESC LIMIT 5'; //mirarpara sacar los 5 ultimos ordenados por fecha ascendente
        $params = array(
            ':id_user'   => $id
        );
        $db->query($sql, $params);
        $evolucion = $db->cargaMatriz();
        return $evolucion;
    }

}
