/**
 * list and format data from JSON encode perra!
 */
function listarConceptos() {

    $.ajax({
        url:'../controlador/listar_conceptos.php',
        type:'POST'
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena = "";
        if(data.length > 0){
            for (var i = 0; i < data.length; i++) {
                cadena += "<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";                
            }
            $("#concepto").html(cadena);            
        } else {
            cadena +="<option>NO SE ENCONTRARON REGISTROS</option>";
            $("#concepto").html(cadena);
        }
    })

}

// copy to clipboard ruchva rules perra!!
function copy() {

    try {
        $('#concepto-res').select();
        document.execCommand('copy');
    } catch (e) {
        alert(e);
    }

}

// charge text selected perra!
function carga() {

    var concepto = $("#concepto option:selected").text();
    $("#concepto-res").val(concepto);

}

// concatenate beginning 
function concatenaInicio() {

    var nuevo = $("#concepto option:selected").text();
    var anterior = $("#concepto-res").val();
    if(anterior!=""){
        var espacio_blanco = "; ";
    } else {
        var espacio_blanco = " ";
    }
    var resultado = $.trim(nuevo) + espacio_blanco + $.trim(anterior);
    $("#concepto-res").val(resultado);

}

//concatenate ending
function concatenaFinal() {

    var nuevo = $("#concepto option:selected").text();
    var anterior = $("#concepto-res").val();
    if(anterior!=""){
        var espacio_blanco = "; ";
    } else {
        var espacio_blanco = "";
    }
    var resultado = $.trim(anterior) + espacio_blanco + $.trim(nuevo);
    $("#concepto-res").val(resultado);

}

//clean textarea
function limpiarResultado(){
    $("#concepto-res").val('');
}

function limpiarNuevoConcepto(){
    $("#concepto-new").val('');        
}

//save with ajax perrra!!!
$(document).ready(function() {

    $("#guardar").on('click', function() {
        var concepto = $("#concepto-new").val();
        if(concepto!="") {
            $.ajax({
                url: "../controlador/insertar_concepto.php",
                type: "POST",
                data: {
                    "concepto-new": concepto                       			
                },
                cache: false,
                success: function(msg){
                    var concepto_anterior = $("#concepto-res").val();
                    var concepto_nuevo = $.trim(concepto_anterior)+"; " + concepto;
                    $("#concepto-res").val(concepto_nuevo);
                    alert("AGREGADO CORRECTAMENTE");
                },
                error: function(msg){
                    alert("OCURRIO UN ERROR "+ msg.d.toString());
                }
            });
        } else {
            alert("DEBE REDACTAR EL CONCEPTO");
        }
    });

});

