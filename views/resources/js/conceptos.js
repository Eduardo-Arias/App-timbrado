function registrarConcepto() {

    $('#form_conceptos').click(function(event) {
        event.preventDefault();
        console.log($(this).serialize());
    });
    // Obtengo los datos del formulario
    var strData = $("#form_conceptos").serialize();
    // Se crea un primer arreglo para separa el dato llave/valor de cada input
    var arrData = strData.split("&")

    var objData = new Object;
    arrData.forEach(element => {
        let keyval = element.split("=");
        objData[keyval[0]] = keyval[1]
    });
    // Se crea la cadena json que se va a mandar
    arrData = jQuery.makeArray(objData);
    var jsonData = JSON.stringify(arrData);

    //* Se prepara la peticion
    var request = $.ajax({
        type: "post",
        url: "binding/conceptos_sat.binding.php",
        data: { "data": jsonData, "accion": "registarConcepto" },
        dataType: 'json'
    });
    // Se procesa las prosibles respuestas
    request.done(function(params) {
        var respose = params;
        console.log("desde done");
        console.log("respuesa: " + typeof(respose));
        console.log("valor: " + respose);
    });

    request.fail(function(respose) {
        console.log("desde fail");
        console.log(respose);
    });
    //*/
}