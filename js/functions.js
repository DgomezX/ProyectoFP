
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

var genero = '';
var peso = '';
var altura = '';
var edad = '';
var objetiv = '';
var obje = '';
var cal = '';
var prote= '';
var grasas = '';
var hc = '';
var protecal = '';
var hidratoscal = '';
var grasascal = '';
var GET = '';
var GEB = '';

//Calculo de datos para la dieta
function calcularDatos(){

    var radios = document.getElementsByName('gender');

    for (var i = 0, length = radios.length; i < length; i++)
    {
        if (radios[i].checked)
        {
            genero = radios[i].value;
            break;
        }
    }
    peso = document.getElementById('pesoInput').value;
    altura = document.getElementById('alturaInput').value;
    edad = document.getElementById('edadInput').value;
    obje = document.getElementById('objetivoInput').value;

    //Obtenemos el valor del desplegable para el objetivo del usuario
    var lista = document.getElementById("objetivo");
    objetiv = lista.options[lista.selectedIndex].value;

    if(genero == 0){

        GEB = 66 + (13.7 * parseInt(peso)) + (5 * parseInt(altura)) - (6.8 * parseInt(edad));
        GET = GEB * 1.4;
        //alert('detecto que eres hombre y tu objetivo es ' + objetiv);
        switch(parseInt(objetiv)){
            case 1:
                cal = Math.round(GET - 200);
                prote = Math.round((parseInt(peso) * 2)*100)/100;
                protecal = prote * 4;
                grasascal  = (cal *20) /100;
                grasas = grasascal /4;
                hidratoscal = cal - (protecal + grasascal);
                hc = hidratoscal / 4;
                break;

            case 2:
                cal = Math.round(GET +200);
                prote = Math.round((parseInt(peso) * 2.2)*100)/100;
                protecal = prote * 4;
                grasascal  = (cal *20) /100;
                grasas = grasascal /4;
                hidratoscal = cal - (protecal + grasascal);
                hc = hidratoscal / 4;
                break;

            case 3:
                cal = Math.round(GET);
                prote = Math.round((parseInt(peso) * 1.8)*100)/100;
                protecal = prote * 4;
                grasascal  = (cal *20) /100;
                grasas = grasascal /4;
                hidratoscal = cal - (protecal + grasascal);
                hc = hidratoscal / 4;
                break;
        }
    }
    if(genero == 1){

        GEB = 655 + (9.6 * parseInt(peso)) + (1.8 * parseInt(altura)) - (4.7 * parseInt(edad));
        GET = GEB * 1.4;
        //alert('detecto que eres mujer y tu objetivo es ' + objetiv);
        switch (parseInt(objetiv)){
            case 1:
                cal = Math.round(GET - 200);
                prote = Math.round((parseInt(peso) * 2)*100)/100;
                protecal = prote * 4;
                grasascal  = (cal *20) /100;
                grasas = grasascal /4;
                hidratoscal = cal - (protecal + grasascal);
                hc = hidratoscal / 4;
                break;
            case 2:
                cal = Math.round(GET +200);
                prote = Math.round((parseInt(peso) * 2.2)*100)/100;
                protecal = prote * 4;
                grasascal  = (cal *20) /100;
                grasas = grasascal /4;
                hidratoscal = cal - (protecal + grasascal);
                hc = hidratoscal / 4;
                break;
            case 3:
                cal = Math.round(GET);
                prote = Math.round((parseInt(peso) * 1.8)*100)/100;
                protecal = prote * 4;
                grasascal  = (cal *20) /100;
                grasas = grasascal /4;
                hidratoscal = cal - (protecal + grasascal);
                hc = hidratoscal / 4;
                break;
        }
    }


    var mostrarCalorias = document.getElementById('rCalorias');
    var mostrarProteinas = document.getElementById('rProteinas');
    var mostrarGrasas = document.getElementById('rGrasas');
    var mostrarHidratos = document.getElementById('rHidratos');
    document.getElementById('generoGuardar').value = genero;
    document.getElementById('pesoGuardar').value = peso;
    document.getElementById('alturaGuardar').value = altura;
    document.getElementById('edadGuardar').value = edad;
    document.getElementById('objeGuardar').value = obje;
    document.getElementById('caloriasGuardar').value = cal;
    mostrarCalorias.innerHTML = cal;
    document.getElementById('proteinasGuardar').value = prote;
    mostrarProteinas.innerHTML = prote;
    document.getElementById('grasasGuardar').value = grasas;
    mostrarGrasas.innerHTML = grasas;
    document.getElementById('hidratosGuardar').value = hc;
    mostrarHidratos.innerHTML = hc;
    $('#resultado-calculo').fadeIn(500);
    return false
}

//funcion que muestra el modal para agregar el alimento seleccionado a la dieta
function agregarComidaModal(id_alimento, nombre_alimento, imagen, calorias, proteinas, grasas, hidratos) {
    var modal = document.getElementById('ventanaAddAlim');
    modal.style.display = "block";
    var nombre = nombre_alimento;
    var titulo = document.getElementById('alim-nombre');
    titulo.innerHTML = nombre;
    var ruta_img = imagen;
    var imgVista = document.getElementById('imagen-alimento');
    imgVista.innerHTML = '<img src="'+ruta_img+'" alt="imagen de alimento">';
    var inputIdAlim = document.getElementById('idAlim');
    inputIdAlim.value = id_alimento;
    var inputCalAlim = document.getElementById('calAlim');
    inputCalAlim.value = calorias;
    var inputProteAlim = document.getElementById('proteAlim');
    inputProteAlim.value = proteinas;
    var inputGrasAlim = document.getElementById('grasAlim');
    inputGrasAlim.value = grasas;
    var inputHcAlim = document.getElementById('hcAlim');
    inputHcAlim.value = hidratos;
}


$(document).ready(function(){
    //Formulario de contacto por Ajax
    $('#form-contacto').submit(function(event){

        event.preventDefault();

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data){
                $('#respuesta-contact').html(data);
                $('#msj-cont').hide();
                $('#formContact').hide();
                $('#volver-contact').show();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
            }
        });
    });
    $('#re-contact').click(function () {
        $('#msj-cont').show();
        $('#formContact').show();
        $('#volver-contact').hide();
    });

    //Mostrar menu navegacion
    $('#nav-button').click(function () {
        $('#navMenu').fadeIn(500);
    })

    $('#cerrar-nav-button').click(function () {
        $('#navMenu').fadeOut(500);
    })

    //Buscador de alimentos

    $('#form-alim-search').on('submit', function(event) {
        event.preventDefault();

        var consulta = $("#search-alim").val();

        $.ajax({
            url: 'index.php?option=buscadorAlimentos',
            type: 'POST',
            typeData: 'json',
            data: {'search': consulta},
            success: function(data){
                $("#listado-respuesta").empty();
                console.log(data.length);
                console.log(data);
                if( data.length <= 2 ){
                    var item = '<li class="no-found">No se encontraron resultados</li>';
                    $("#listado-respuesta").html(item);
                }else{
                    var obj = $.parseJSON(data);
                    for(var i = 0; i < obj.length; i++){
                        var item = '<li class="alim-found">'+obj[i].nombre+'<i class="fas fa-plus choose-alim" onclick="agregarComidaModal(\''+obj[i].id+'\',\''+obj[i].nombre+'\',\''+obj[i].foto+'\',\''+obj[i].calorias+'\',\''+obj[i].proteina+'\',\''+obj[i].grasa+'\',\''+obj[i].hidratos+'\')"></i></li>';
                        $("#listado-respuesta").append(item);
                    }
                }
            },
            error: function(e){
                alert(e.message);
            }
        })
    });
});


