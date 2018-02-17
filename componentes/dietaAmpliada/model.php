<?php
class modeldietaAmpliada{

    public static function obtenAlimentDiet($id_dieta){
        $db = new database();
        $sql = 'SELECT dietas_rel_alimentos.*,alimentos.nombre FROM dietas_rel_alimentos LEFT JOIN alimentos ON alimentos.id = dietas_rel_alimentos.id_alim WHERE dietas_rel_alimentos.id_diet = :id_diet';
        $params = array(
            ':id_diet'   => $id_dieta
        );
        $db->query($sql, $params);
        $alimDiet= $db->cargaMatriz();
        return $alimDiet;
    }

}