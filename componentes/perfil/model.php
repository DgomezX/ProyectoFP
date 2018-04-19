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

    public static function obtenProgreso($id){
        $db = new database();
        $sql = 'SELECT * FROM evolucion_usuario WHERE id_user = :id_user ORDER BY fecha DESC LIMIT 5'; //mirar para sacar los 5 ultimos ordenados por fecha ascendente
        $params = array(
            ':id_user'   => $id
        );
        $db->query($sql, $params);
        $evolucion = $db->cargaMatriz();
        return $evolucion;
    }

    public static function registrarPeso($peso, $fecha, $user_id){
        $db = new database();
        $db->beginTransaction();
        try {
            $sql1 = 'INSERT INTO evolucion_usuario VALUES (NULL, :id_user, :peso_user, :fecha)';
            $params1 = array(
                ':id_user'   => $user_id,
                ':peso_user'     => $peso,
                ':fecha'    => $fecha
            );
            $db->query($sql1, $params1);
            $sql2 = 'UPDATE datos_usuarios SET peso = :peso_user WHERE id = :id_user';
            $params2 = array(
                ':id_user'   => $user_id,
                ':peso_user'     => $peso
            );
            $db->query($sql2, $params2);
            $db->Commit();
            echo 'Tu peso se a actualizado correctamente';
        } catch (Exception $e) {
            $db->Rollback();
            echo 'Ocurrio algún error: ',  $e->getMessage(), "\n";
        }
    }

}
