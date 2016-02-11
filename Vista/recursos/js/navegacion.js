
$(document).ready(function () { // Script del menú con pestañas 
    $('#contentTabs div.isTab').css('position', 'relative').not(':first').hide();
    $('#contentTabs ul li:first a.tab').addClass('selectectTab');
    $('#contentTabs a.tab').click(function () {
        $('#contentTabs a.tab').removeClass('selectectTab');
        $(this).addClass('selectectTab');
        $('#contentTabs div.isTab').hide().filter(this.hash).show();
        return false;
    });
});


function accionPestaña(id, elem) {

    var content = document.getElementById(id).innerHTML;

    if (content === "") {// si no se ha cargado el dashboard
        $("#" + id).load("Vista/contenido/" + id + ".php", function (response, status, xhr) {
            if (status !== "error") {
                $("#ApiTableu").remove();
                $(".informationSection").hide('slow');
                $("input:checkbox").prop('checked', false);
                $("#" + id).show('slow');
                elem.checked = "cheked";
            }
        });
    } else {

        $(".informationSection").hide('slow');// oculta todo

        if (elem.checked) { //si no estaba seleccionado, y lo seleccionaron, se valida por si estan presionando uno que ya estaba seleccionado para que solo oculte
            $("input:checkbox").prop('checked', false);
            $("#" + id).show('slow');
            elem.checked = "cheked";
        }
    }
}



function showWindow(idDiv) {
    $.fancybox({
        href: '#' + idDiv,
        afterClose: function () {
        }
    });
}


function accionReglas(elem) {
    if ($(elem).find("ul").css("display") === "none") {
        $(elem).find("ul").show("slow");
        $(elem).find("img").attr("url","Vista/recursos/imagenes/add.png");
    } else {
        $(elem).find("ul").hide("slow");
        $(elem).find("img").attr("url","Vista/recursos/imagenes/list.png");
    }

}


