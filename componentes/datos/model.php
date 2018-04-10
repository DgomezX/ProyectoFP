<?php
class modelDatos{
    //Funcion para obtener la variable de sesion si el usuario se acaba de registrar
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

    //funcion para agregar los datos de los usuarios nuevos
    public static function agregarDatos($id_user, $genero, $edad, $estatura,$peso,$objetivo,$calorias,$proteinas,$hidratos,$grasas,$fecha){
        $db = new database();
        $db->beginTransaction();
        try{
            $sql1 = 'INSERT INTO datos_usuarios VALUES(NULL,:id_user, :genero, :edad,:estatura,:peso,:objetivo,:calorias,:proteinas,:hidratos,:grasas)';
            $params1 = array(
                ':id_user'   => $id_user,
                ':genero'   =>$genero,
                ':edad'     => $edad,
                ':estatura'    => $estatura,
                ':peso'    => $peso,
                ':objetivo'    => $objetivo,
                ':calorias' => $calorias,
                ':proteinas' => $proteinas,
                ':hidratos' => $hidratos,
                ':grasas' => $grasas

            );
            $db->query($sql1, $params1);
            $sql2 = 'INSERT INTO evolucion_usuario VALUES (NULL, :id_user, :peso_user, :fecha)';
            $params2 = array(
                ':id_user'   => $id_user,
                ':peso_user'     => $peso,
                ':fecha'    => $fecha
            );
            $db->query($sql2, $params2);
            $db->Commit();
        }catch (Exception $e){
            $db->Rollback();
            echo 'Ocurrio algún error: ',  $e->getMessage(), "\n";
        }

    }

    //funcion para obtener los datos de los usuarios ya tegistrados
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


    //funcion para modificar los datos de los usuarios ya registrados
    public static function actualizarDatos($id_user, $genero, $edad, $estatura,$peso,$objetivo,$calorias,$proteinas,$hidratos,$grasas, $fecha){
        $db = new database();
        $db->beginTransaction();
        try{
            $sql1 = 'UPDATE datos_usuarios SET genero =:genero,edad =:edad,estatura=:estatura,peso=:peso,objetivo=:objetivo,calorias=:calorias,proteinas=:proteinas,hidratos=:hidratos,grasas=:grasas WHERE id_user=:id_user';
            $params1=array(
                ':id_user'   => $id_user,
                ':genero'   =>$genero,
                ':edad'     => $edad,
                ':estatura'    => $estatura,
                ':peso'    => $peso,
                ':objetivo'    => $objetivo,
                ':calorias' => $calorias,
                ':proteinas' => $proteinas,
                ':hidratos' => $hidratos,
                ':grasas' => $grasas
            );
            $db->query($sql1, $params1);
            $sql2 = 'INSERT INTO evolucion_usuario VALUES (NULL, :id_user, :peso_user, :fecha)';
            $params2 = array(
                ':id_user'   => $id_user,
                ':peso_user'     => $peso,
                ':fecha'    => $fecha
            );
            $db->query($sql2, $params2);
            $db->Commit();
        }catch (Exception $e){
            $db->Rollback();
            echo 'Ocurrio algún error: ',  $e->getMessage(), "\n";
        }
    }
}
