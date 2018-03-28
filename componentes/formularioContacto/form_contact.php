<div id="ventanaContacto" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Contacto</h2>
            <span class="close" onclick="cerrarModal('ventanaContacto')"><i class="far fa-times-circle"></i></span>
        </div>
        <div class="modal-body">
            <p id="msj-cont">Si tienes alguna duda o alguna sugerencia, rellena el formulario de contacto y estaremos encantados de atenderte.</p>
            <form action="index.php?option=formularioContacto" method="POST" class="form-contacto" id="form-contacto">
                <div id="formContact" class="cajaform">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre Completo" required> <br>
                    <input type="email" name="email" id="email" placeholder="Correo Electrónico" required> <br>
                    <textarea rows="10" cols="41" maxlength="500"  name="mensaje" id="mensaje" placeholder="Este campo esta limitado a 500 caracteres" name="mensaje" id="mensaje" required></textarea>
                    <div class="row">
                        <input type="submit" name="contactar" required id="contactar" value="ENVIAR" class="enviar col-5">
                        <input type="reset" value="LIMPIAR" class="limpiar col-5">
                    </div>
                </div>
                <div id="volver-contact">
                    <div id="respuesta-contact"></div>
                    <input type="reset" value="Volver a contactar" id="re-contact" class="button">
                </div>
            </form>
        </div>
    </div>
</div>