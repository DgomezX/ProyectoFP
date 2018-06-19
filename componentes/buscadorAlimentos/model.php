<?php

class modelBuscadorAlim{
    public static function obtenAlimentos($nombre){
        $db = new database();
        $sql = 'SELECT * FROM alimentos WHERE nombre LIKE "%'.$nombre.'%"';
        $db->query($sql);
        $alimentos = $db->cargaMatriz();
        return $alimentos;
    }

    public static function addAlimentoDieta($id_dieta,$id_alimento,$id_com,$gramos,$cal,$prote,$gras,$hc){
        $db = new database();
        $db->beginTransaction();
        try {
            $sql1 = 'INSERT INTO dietas_rel_alimentos VALUES(NULL,:id_diet, :id_alim, :id_comida,:cantidad,:calorias,:proteinas,:grasa,:hidratos)';
            $params1 = array(
                ':id_diet' => $id_dieta,
                ':id_alim' => $id_alimento,
                ':id_comida' => $id_com,
                ':cantidad' => $gramos,
                ':calorias' => $cal,
                ':proteinas' => $prote,
                ':grasa' => $gras,
                ':hidratos' => $hc

            );
            $db->query($sql1, $params1);
            $db->Commit();
        }catch (Exception $e){
            $db->Rollback();
            echo 'Ocurrio algún error: ',  $e->getMessage(), "\n";
        }
    }
}