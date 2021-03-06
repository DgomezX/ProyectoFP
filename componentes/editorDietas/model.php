<?php

class modelEditor{
    public static function obtenDieta($id_dieta){
        $db = new database();
        $sql = 'SELECT * FROM dietas WHERE id = :id_dieta';
        $params = array(
            ':id_dieta' => $id_dieta
        );
        $db->query($sql, $params);
        $dieta = $db->cargaFila();
        return $dieta;
    }

    public static function obtenAlimentosComidas($id_dieta, $id_comida){
        $db = new database();
        $sql = 'SELECT dietas_rel_alimentos.*,alimentos.nombre,alimentos.marca FROM dietas_rel_alimentos LEFT JOIN alimentos ON alimentos.id = dietas_rel_alimentos.id_alim WHERE id_diet = :id_dieta AND id_comida = :id_comida';
        $params = array(
            ':id_dieta' => $id_dieta,
            ':id_comida' => $id_comida
        );
        $db->query($sql, $params);
        $alimentos = $db->cargaMatriz();
        return $alimentos;
    }

    public static function obtenDatosUsuario($id){
        $db = new database();
        $sql = 'SELECT * FROM datos_usuarios WHERE id_user = :id_user';
        $params = array(
            ':id_user'   => $id
        );
        $db->query($sql, $params);
        $datos = $db->cargaFila();
        return $datos;
    }

    public static function deleteAlimento($id_dieta, $id,$calorias,$prote,$grasa,$hc){
        $db = new database();
        $db->beginTransaction();
        try{
            $sql1 = 'DELETE FROM dietas_rel_alimentos WHERE id_alim = :id AND id_diet = :id_dieta';
            $params1 = array(
                ':id'   => $id,
                ':id_dieta' => $id_dieta
            );
            $db->query($sql1, $params1);
            $sql2 = 'UPDATE dietas SET calorias = '.$calorias.',proteinas = '.$prote.',grasas = '.$grasa.',hidratos = '.$hc.' WHERE id = '.$id_dieta;
            $db->query($sql2);
            $db->Commit();
        }catch (Exception $e){
            $db->Rollback();
            echo 'Ocurrio algún error: ',  $e->getMessage(), "\n";
        }

    }

    public static function changeNameDieta($id,$nombre){
        $db = new database();
        $sql = 'UPDATE dietas SET nombre = :nombre_nuevo WHERE id = :id_dieta';
        $params = array(
            ':id_dieta'   => $id,
            ':nombre_nuevo' => $nombre
        );
        $db->query($sql, $params);
        $datos = $db->affectedRows();
        return $datos;
    }

}