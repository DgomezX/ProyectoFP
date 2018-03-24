
//Funcion mostrar / ocultar login

function mostrar_ocultar(id, id2) {

    if(document.getElementById(id).classList.contains('visible')){
        document.getElementById(id).classList.remove('visible');
    }else{
        document.getElementById(id).classList.add('visible');
    }

    if(document.getElementById(id2).classList.contains('visible')){
        document.getElementById(id2).classList.remove('visible');
    }
}

//Cargar vista por ajax del formulario requerido

