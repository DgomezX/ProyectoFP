<?php include 'componentes/commons/menu_nav.php'; 	// menu?>
<div id="mis_dietas">
    <h3>Tus Dietas:</h3>
    <table>
        <thead>
        <th>Dieta</th>
        <th>Ver dieta</th>
        <!--<th>Borrar</th>-->
        </thead>
        <tbody>
        <?php
        print_r($borrar);
        foreach($dietas as $dieta){
            echo "<tr>";
            echo "<td>".$dieta['nombre']."</td>";
            echo "<td><a href='index.php?option=dietaAmpliada&dieta_id=".$dieta['id']."'>Ver dieta</a></td>";
            //echo "<td><a href='index.php?option=dietas&dieta_idBorra=".$dieta['id']."'>Borrar dieta</a></td>";
            echo "<tr>";
        } ?>
        </tbody>
    </table>
</div>