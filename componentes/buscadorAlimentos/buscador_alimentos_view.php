<!doctype html>
<html lang="es">
<head>
    <?php include 'componentes/commons/head.php'; 	// head ?>
</head>
<body id="<?php echo $location; ?>">
    <?php include 'componentes/commons/header.php'; 	// header ?>
    <?php include 'componentes/commons/menu_nav.php'; 	// menu navegacion ?>
    <h1>Buscador de alimentos</h1>
    <section id="form_buscador_alim">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="container-1">
                            <form action="<? echo 'index.php?option=buscadorAlimentos'?>" id="form-alim-search" method="POST">
                                <span class="icon"><i class="fa fa-search"></i></span>
                                <input type="search" id="search-alim" name='search-alim' placeholder="Busqueda..." />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="list-alim-found">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul id="listado-respuesta">

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div id="ventanaAddAlim" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Agregar Alimento</h2>
                <span class="close" onclick="cerrarModal('ventanaAddAlim')"><i class="far fa-times-circle"></i></span>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 col-3">
                        <div id="imagen-alimento"></div>
                    </div>
                    <div class="col-xs-12 col-9">
                        <h2 id="alim-nombre"></h2>
                        <p>Introduce la cantidad de alimento en gramos (alimentos solidos) o mililitros (alimentos liquidos)</p>
                        <form action="index.php?option=buscadorAlimentos" method="post" id="form-addAlim">
                            <input type="number" min="1" id="cantidadAlim" name="cantidadAlim" placeholder="cantidad de alimento">
                            <input type="hidden" id="idDieta" name="idDieta" value="<?php echo $_GET['dieta_id'] ?>">
                            <input type="hidden" id="idAlim" name="idAlim" value="">
                            <input type="hidden" id="calAlim" name="calAlim" value="">
                            <input type="hidden" id="proteAlim" name="proteAlim" value="">
                            <input type="hidden" id="grasAlim" name="grasAlim" value="">
                            <input type="hidden" id="hcAlim" name="hcAlim" value="">
                            <input type="hidden" id="comida" name="comida" value="<?php echo $_GET['comida'] ?>">
                            <input type="submit" id="add_alim" name="add_alim" value="Agregar Alimento">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'componentes/commons/footer.php'; 	// footer ?>
</body>
</html>