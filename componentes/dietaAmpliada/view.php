<?php include 'componentes/commons/menu_nav.php'; 	// menu?>
<div id="dieta_ampl">
    <h1>Dieta</h1>
    <div id="desayuno">
        <h3>Desayuno</h3>
        <table>
            <thead>
                <th>Comida</th>
                <th>Cantidad</th>
            </thead>
            <tbody>
            <?php
            //print_r($dieta_id);
            foreach ($alimentos as $alimento){
                $id_comida =$alimento['id_comida'];
                if($id_comida==1){
                    echo "<tr>";
                    echo "<td>".$alimento['nombre']."</td>";
                    echo "<td>".$alimento['cantidad']."</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
    <div id="almuerzo">
        <h3>Almuerzo</h3>
        <table>
            <thead>
            <th>Comida</th>
            <th>Cantidad</th>
            </thead>
            <tbody>
            <?php
            //print_r($dieta_id);
            foreach ($alimentos as $alimento){
                $id_comida =$alimento['id_comida'];
                if($id_comida==2){
                    echo "<tr>";
                    echo "<td>".$alimento['nombre']."</td>";
                    echo "<td>".$alimento['cantidad']."</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
    <div id="merienda">
        <h3>Merienda</h3>
        <table>
            <thead>
            <th>Comida</th>
            <th>Cantidad</th>
            </thead>
            <tbody>
            <?php
            //print_r($dieta_id);
            foreach ($alimentos as $alimento){
                $id_comida =$alimento['id_comida'];
                if($id_comida==3){
                    echo "<tr>";
                    echo "<td>".$alimento['nombre']."</td>";
                    echo "<td>".$alimento['cantidad']."</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
    <div id="cena">
        <h3>Cena</h3>
        <table>
            <thead>
            <th>Comida</th>
            <th>Cantidad</th>
            </thead>
            <tbody>
            <?php
            //print_r($dieta_id);
            foreach ($alimentos as $alimento){
                $id_comida =$alimento['id_comida'];
                if($id_comida==4){
                    echo "<tr>";
                    echo "<td>".$alimento['nombre']."</td>";
                    echo "<td>".$alimento['cantidad']."</td>";
                    echo "</tr>";
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>