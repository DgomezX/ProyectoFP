
//Funcion mostrar / ocultar login

function mostrar_ocultar(id, id2)
{

    if(document.getElementById(id).classList.contains('visible'))
    {
        document.getElementById(id).classList.remove('visible');
    }
    else {
        document.getElementById(id).classList.add('visible');
    }

    if(document.getElementById(id2).classList.contains('visible'))
    {
        document.getElementById(id2).classList.remove('visible');
    }
}

//funcion mostrar ventana modal

function mostrarModal(id)
{
    var modal = document.getElementById(id);
    modal.style.display = "block";
}
//funcion cerrar ventana modal

function cerrarModal(id)
{
    var modal = document.getElementById(id);
    modal.style.display = "none";
}

//Formulario de contacto por Ajax
