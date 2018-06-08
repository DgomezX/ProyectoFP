<?php

class modelBuscadorAlim{
    public static function obtenAlimentos($nombre){
        $db = new database();
        $sql = 'SELECT * FROM alimentos WHERE nombre LIKE "%'.$nombre.'%"';
        $db->query($sql);
        $alimentos = $db->cargaMatriz();
        return $alimentos;
    }
}