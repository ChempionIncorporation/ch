
    $("#f").css("display","none");
    $('#i').css("display","none");
    $('#o').css("display","none");
    $('#np').css("display","none");
    $('#c').css("display","none");
    $('#a').css("display","none");
    $('#m').css("display","none");
    $('#org').css("display","none");

    $('#sset').click(function(){
        $('#sset').css("display", "none");
        $('#ssave').css("display", "block");
        $('#uundo').css("display", "block");

        $('#f').css("display","block");
        $('#i').css("display","block");
        $('#o').css("display","block");
        $('#np').css("display","block");
        $('#c').css("display","block");
        $('#a').css("display","block");
        $('#m').css("display","block");
        $('#org').css("display","block");
    });

    $('#uundo').click(function(){
        $('#set_f').css("display","none");
        $('#set_i').css("display","none");
        $('#set_o').css("display","none");
        $('#set_np').css("display","none");
        $('#set_c').css("display","none");
        $('#set_a').css("display","none");
        $('#set_m').css("display","none");
        $('#set_org').css("display","none");

        $("#f").css("display","none");
        $('#i').css("display","none");
        $('#o').css("display","none");
        $('#np').css("display","none");
        $('#c').css("display","none");
        $('#a').css("display","none");
        $('#m').css("display","none");
        $('#org').css("display","none");

        $('#sset').css("display", "block");
        $('#ssave').css("display", "none");
        $('#uundo').css("display", "none");
    });


    $('#ssave').click(function(){
        var op = "";
        if($("#f").val() != ""){
            op = "&f="+$("#f").val() + op;
        }

        if($("#i").val() != ""){
            op = "&i="+$("#i").val() + op;
        }
        if($("#o").val() != ""){
            op = "&o="+$("#o").val() + op;
        }

        if($("#np").val() != ""){
            op = "&np="+$("#np").val() + op;
        }
        if($("#c").val() != ""){
            op = "&c="+$("#c").val() + op;
        }
        if($("#a").val() != ""){
            op = "&a="+$("#a").val() + op;
        }
        if($("#m").val() != ""){
            op = "&m="+$("#m").val() + op;
        }
        if($("#org").val() != ""){
            op = "&org="+$("#org").val() + op;
        }
        window.location.assign("?set=1"+op);
    });

    $('#f').keyup(function(e) {
        if ($("#f").val() !== ""){
            if(document.getElementById("f").value.length > 1 ) {
                    $("#set_f").html("Заменится на: <b>" + $("#f").val() + "</b>");
                    $('#ssave').css("display", "block");
            }else{
                $("#set_f").html("<b style='color:red'>Больше 2х символов</b>");
                $('#ssave').css("display","none");
            }
        }else{
            $("#set_f").html("");
        }
    });
    $('#i').keyup(function(e) {
        if ($("#i").val() !== ""){
            if(document.getElementById("i").value.length > 1 ) {
                $("#set_i").html("Заменится на: <b>" + $("#i").val() + "</b>");
                $('#ssave').css("display","block");
            }else{
                $("#set_i").html("<b style='color:red'>Больше 2х символов</b>");
                $('#ssave').css("display","none");
            }
        }else{
            $("#set_i").html("");
        }
    });
    $('#o').keyup(function(e) {
        if ($("#o").val() !== ""){
                if(document.getElementById("o").value.length > 1 ) {
                    $("#set_o").html("Заменится на: <b>" + $("#o").val() + "</b>");
                    $('#ssave').css("display","block");
                }else{
                    $("#set_o").html("<b style='color:red'>Больше 2х символов</b>");
                    $('#ssave').css("display","none");
                }
        }else{
            $("#set_o").html("");
        }
    });



    $('#np').keyup(function(e) {
        if ($("#np").val() !== ""){
            if(document.getElementById("np").value.length > 1 ) {
                $("#set_np").html("Заменится на: <b>" + $("#np").val() + "</b>");
                $('#ssave').css("display","block");
            }else{
                $("#set_np").html("<b style='color:red'>Больше 2х символов</b>");
                $('#ssave').css("display","none");
            }
        }else{
            $("#set_np").html("");
        }
    });
    $('#c').keyup(function(e) {
        if ($("#c").val() !== ""){
            if(document.getElementById("c").value.length > 1 ) {
                $("#set_c").html("Заменится на: <b>" + $("#c").val() + "</b>");
                $('#ssave').css("display","block");
            }else{
                $("#set_c").html("<b style='color:red'>Больше 2х символов</b>");
                $('#ssave').css("display","none");
            }
        }else{
            $("#set_c").html("");
        }
    });
    $('#a').keyup(function(e) {
        if ($("#a").val() !== ""){
            if(document.getElementById("a").value.length > 1 ) {
                $("#set_a").html("Заменится на: <b>" + $("#a").val() + "</b>");
                $('#ssave').css("display","block");
            }else{
                $("#set_a").html("<b style='color:red'>Больше 2х символов</b>");
                $('#ssave').css("display","none");
            }
        }else{
            $("#set_a").html("");
        }
    });
    $('#m').keyup(function(e) {
        if ($("#m").val() !== ""){
            if(document.getElementById("m").value.length > 1 ) {
                $("#set_m").html("Заменится на: <b>" + $("#m").val() + "</b>");
                $('#ssave').css("display","block");
            }else{
                $("#set_m").html("<b style='color:red'>Больше 2х символов</b>");
                $('#ssave').css("display","none");
            }
        }else{
            $("#set_m").html("");
        }
    });
    $('#org').keyup(function(e) {
        if ($("#org").val() !== ""){
            if(document.getElementById("org").value.length > 1 ) {
                $("#set_org").html("Заменится на: <b>" + $("#org").val() + "</b>");
                $('#ssave').css("display","block");
            }else{
                $("#set_org").html("<b style='color:red'>Больше 2х символов</b>");
                $('#ssave').css("display","none");
            }
        }else{
            $("#set_org").html("");
        }
    });