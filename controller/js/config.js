    var contador = 2;

    function cambiarTitulo(){
        for (var i = 1; i <= 15; i++) {
            if ($("#unidad").val()=="N") {
                $("#titulo"+i).val("F"+i);
            } else if($("#unidad").val()=="M/S"){
                $("#titulo"+i).val("V"+i);
            } else if($("#unidad").val()=="M/S2"){
                $("#titulo"+i).val("a"+i);
            } else if($("#unidad").val()=="M"){
                $("#titulo"+i).val("D"+i);
            } else if($("#unidad").val()=="" || $("#unidad").val()=="VECTOR"){
                $("#titulo"+i).val("VECTOR"+i);
            }
        }
    }

    function anadir() {
        contador++;
        if (contador == 15) {
            $("#anadir").css("display", "none");
        } else if(contador < 15){
            $("#anadir").css("display", "block");
        }
        $("#elimina").css("display", "block");
        $("#add" + contador).css("display", "block");
        $("#vec" + contador).attr("name", "vectorm");
    }

    function elimina() {
        if (contador == 2) {
            $("#elimina").css("display", "none");
        } else if(contador > 2){
            $("#elimina").css("display", "block");
        }
        $("#anadir").css("display", "block");
        $("#add" + contador).css("display", "none");
        contador--;
        $("#vec" + contador).attr("name", "vector");
    }

    function enviar() {
        var contadorS = contador;
        $("#contador").load("view/resultado.php", {
            contador1: contadorS
        });
        $.post("view/resultado.php", {
            magnitud1: $("#magnitud1").val(),
            angulo1: $("#angulo1").val(),
            titulo1: $("#titulo1").val(),
            magnitud2: $("#magnitud2").val(),
            angulo2: $("#angulo2").val(),
            titulo2: $("#titulo2").val(),
            magnitud3: $("#magnitud3").val(),
            angulo3: $("#angulo3").val(),
            titulo3: $("#titulo3").val(),
            magnitud4: $("#magnitud4").val(),
            angulo4: $("#angulo4").val(),
            titulo4: $("#titulo4").val(),
            magnitud5: $("#magnitud5").val(),
            angulo5: $("#angulo5").val(),
            titulo5: $("#titulo5").val(),
            magnitud6: $("#magnitud6").val(),
            angulo6: $("#angulo6").val(),
            titulo6: $("#titulo6").val(),
            magnitud7: $("#magnitud7").val(),
            angulo7: $("#angulo7").val(),
            titulo7: $("#titulo7").val(),
            magnitud8: $("#magnitud8").val(),
            angulo8: $("#angulo8").val(),
            titulo8: $("#titulo8").val(),
            magnitud9: $("#magnitud9").val(),
            angulo9: $("#angulo9").val(),
            titulo9: $("#titulo9").val(),
            magnitud10: $("#magnitud10").val(),
            angulo10: $("#angulo10").val(),
            titulo10: $("#titulo10").val(),
            magnitud11: $("#magnitud11").val(),
            angulo11: $("#angulo11").val(),
            titulo11: $("#titulo11").val(),
            magnitud12: $("#magnitud12").val(),
            angulo12: $("#angulo12").val(),
            titulo12: $("#titulo12").val(),
            magnitud13: $("#magnitud13").val(),
            angulo13: $("#angulo13").val(),
            titulo13: $("#titulo13").val(),
            magnitud14: $("#magnitud14").val(),
            angulo14: $("#angulo14").val(),
            titulo14: $("#titulo14").val(),
            magnitud15: $("#magnitud15").val(),
            angulo15: $("#angulo15").val(),
            titulo15: $("#titulo15").val(),
            unidad: $("#unidad").val(),
            escala: $("#intext").val(),
            contador: $("#contador").val(),
        });
    }