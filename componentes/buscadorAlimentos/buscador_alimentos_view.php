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
                                <input type="search" id="search-alim" name='search-alim' placeholder="Search..." />
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
    <?php include 'componentes/commons/footer.php'; 	// footer ?>
</body>
</html>