






var p1 = true;
var p2 = true;
var p3 = true;
var p4 = true;
var p5 = true;
var p6 = true;
var p7 = true;
var p8 = true;
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
    });

    $('#f').keyup(function(e) {

        var mas = "abc\"defghigklmnopqrstuvwxyz/.|'!@#$%^&*()_+-=?:;~`1234567890 ";
        var c = 0;
        var b = 1;
        for (var j = 0; j < mas.length; j++) {
            if (mas[j] == $("#f").val()[$("#f").val().length - 1]) {
                c = 0;
                $("#set_f").html("<b style='color:red'>Фамилия должена состоять из букв кириллицы</b>");
            }
            else c = 1;
        }
        for (var i = 0; i < $("#f").val().length; i++) {
            for (var j = 0; j < mas.length; j++) {
                if (mas[j] == $("#f").val()[i]) {
                    b = 0;
                }
            }
        }

        if ($("#f").val().length == 0 && (p2 == true && p3 == true && p4 == true && p5 == true && p6 == true && p7 == true && p8 == true)) {
            p1 = true;
            $('#ssave').css("display", "block");
            $("#set_f").html("");
        }
        else if (p2 == false || p3 == false || p4 == false || p5 == false || p6 == false || p7 == false || p8 == false) {
            $('#ssave').css("display", "none");
        }
        else if ($("#f").val() !== "") {
            if (document.getElementById("f").value.length > 1 && c == 1 && b == 1) {
                p1 = true;
                $("#set_f").html("Заменится на: <b>" + $("#f").val() + "</b>");
                $('#ssave').css("display", "block");
            } else if ($("#f").val().length == 1) {
                $("#set_f").html("<b style='color:red'>Фимилия не может быть меньше двух символов</b>");
                $('#ssave').css("display", "none");
                p1 = false;
            }
        }
        else {
            $("#set_f").html("");
        }
    });
    $('#i').keyup(function(e) {
        var mas = "abc\"defghigklmnopqrstuvwxyz/.|'!@#$%^&*()_+-=?:;~`1234567890 ";
        var c = 0;
        var b = 1;
        for (var j = 0; j < mas.length; j++) {
            if (mas[j] == $("#i").val()[$("#i").val().length - 1]) {
                c = 0;
                $("#set_i").html("<b style='color:red'>Имя должено состоять из букв кириллицы</b>");
            }
            else c = 1;
        }
        for (var i = 0; i < $("#i").val().length; i++) {
            for (var j = 0; j < mas.length; j++) {
                if (mas[j] == $("#i").val()[i]) {
                    b = 0;
                }
            }
        }
        if ($("#i").val().length == 0 && (p1 == true && p3 == true && p4 == true && p5 == true && p6 == true && p7 == true && p8 == true)) {
            p2 = true;
            $('#ssave').css("display", "block");
            $("#set_i").html("");
        }
        else if (p1 == false || p3 == false || p4 == false || p5 == false || p6 == false || p7 == false || p8 == false) {
            $('#ssave').css("display", "none");
        }
        else if ($("#i").val() !== "") {
            if ($("#i").val().length < 2) {
                $("#set_i").html("<b style='color:red'>Имя не может быть меньше двух символов</b>");
                $('#ssave').css("display", "none");
                p2 = false;
            }
            else if (document.getElementById("i").value.length > 1 && c == 1 && b == 1) {
                $("#set_i").html("Заменится на: <b>" + $("#i").val() + "</b>");
                $('#ssave').css("display","block");
                p2 = true;
            }
        }else{
            $("#set_i").html("");
        }
    });
    $('#o').keyup(function(e) {
        var mas = "abc\"defghigklmnopqrstuvwxyz/.|'!@#$%^&*()_+-=?:;~`1234567890 ";
        var c = 0;
        var b = 1;
        for (var j = 0; j < mas.length; j++) {
            if (mas[j] == $("#o").val()[$("#o").val().length - 1]) {
                c = 0;
                $("#set_o").html("<b style='color:red'>Отчество должено состоять из букв кириллицы</b>");
            }
            else c = 1;
        }
        for (var i = 0; i < $("#o").val().length; i++) {
            for (var j = 0; j < mas.length; j++) {
                if (mas[j] == $("#o").val()[i]) {
                    b = 0;
                }
            }
        }
        if ($("#o").val().length == 0 && (p1 == true && p2 == true && p4 == true && p5 == true && p6 == true && p7 == true && p8 == true)) {
            p3 = true;
            $('#ssave').css("display", "block");
            $("#set_o").html("");
        }
        else if (p1 == false || p2 == false || p4 == false || p5 == false || p6 == false || p7 == false || p8 == false) {
            $('#ssave').css("display", "none");
        }
        else if ($("#o").val() !== "") {
            if ($("#o").val().length < 3) {
                $("#set_o").html("<b style='color:red'>Отчество не может быть меньше трёх символов</b>");
                $('#ssave').css("display", "none");
                p3 = false;
            }
            else if (document.getElementById("o").value.length > 1 && c == 1 && b == 1) {
                $("#set_o").html("Заменится на: <b>" + $("#o").val() + "</b>");
                $('#ssave').css("display", "block");
                p3 = true;
            }
        }else{
            $("#set_o").html("");
        }
    });
    $('#np').keyup(function(e) {
        var mas = "abcdefghigklmnopqrstuvwxyz/.\\|'\"!@#$%^&*()_+-=?:;~`";
        var c = 0;
        var b = 1;

        for (var j = 0; j < mas.length; j++) {
            if (mas[j] == $("#np").val()[$("#np").val().length - 1]) {
                c = 0;
                $("#set_np").html("<b style='color:red'>Номер телефона должен состоять из цифр</b>");
            }
            else c = 1;
        }
        for (var i = 0; i < $("#np").val().length; i++) {
            for (var j = 0; j < mas.length; j++) {
                if (mas[j] == $("#np").val()[i]) {
                    b = 0;
                }
            }
        }
        if ($("#np").val().length == 0 && (p1 == true && p2 == true && p3 == true && p5 == true && p6 == true && p7 == true && p8 == true)) {
            p4 = true;
            $('#ssave').css("display", "block");
            $("#set_np").html("");
        }
        else if (p2 == false || p3 == false || p1 == false || p5 == false || p6 == false || p7 == false || p8 == false) {
            $('#ssave').css("display", "none");
        }
        else if ($("#np").val() !== "") {
            if ($("#np").val().length != 10) {
                $('#ssave').css("display", "none");
                p4 = false;
            }
            else if (document.getElementById("np").value.length > 1 && c == 1 && b == 1) {
                $("#set_np").html("Заменится на: <b>" + $("#np").val() + "</b>");
                $('#ssave').css("display","block");
                p4 = true;
            }
        }else{
            $("#set_np").html("");
        }
    });
    $('#c').keyup(function(e) {

        var mas = "abc\"defghigklmnopqrstuvwxyz/.|'!@#$%^&*()_+-=?:;~`1234567890 ";
        var c = 0;
        var b = 1;
        for (var j = 0; j < mas.length; j++) {
            if (mas[j] == $("#c").val()[$("#c").val().length - 1]) {
                c = 0;
                $("#set_c").html("<b style='color:red'>Город должен состоять из букв кириллицы</b>");
            }
            else c = 1;
        }
        for (var i = 0; i < $("#c").val().length; i++) {
            for (var j = 0; j < mas.length; j++) {
                if (mas[j] == $("#c").val()[i]) {
                    b = 0;
                }
            }
        }

        if ($("#c").val().length == 0 && (p1 == true && p2 == true && p3 == true && p4 == true && p6 == true && p7 == true && p8 == true)) {
            p5 = true;
            $('#ssave').css("display", "block");
            $("#set_c").html("");
        }
        else if (p2 == false || p3 == false || p1 == false || p4 == false || p6 == false || p7 == false || p8 == false) {
            $('#ssave').css("display", "none");
        }
        else if ($("#c").val() !== "") {
            if ($("#c").val().length < 3) {
                $("#set_c").html("<b style='color:red'>Город должен состоять от 3 символов</b>");
                $('#ssave').css("display", "none");
                p5 = false;
            }
            else if (document.getElementById("c").value.length > 1 && c == 1 && b == 1) {
                $("#set_c").html("Заменится на: <b>" + $("#c").val() + "</b>");
                $('#ssave').css("display","block");
                p5 = true;
            }
        }else{
            $("#set_c").html("");
        }
    });
    $('#a').keyup(function(e) {

        var mas = "abc\"defghigklmnopqrstuvwxyz/|'!@#$%^&*()_+-=?:;~`";
        var c = 0;
        var b = 1;
        for (var j = 0; j < mas.length; j++) {
            if (mas[j] == $("#a").val()[$("#a").val().length - 1]) {
                c = 0;
                $("#set_a").html("<b style='color:red'>Адрес должен состоять из букв кириллицы и спец символов</b>");
            }
            else c = 1;
        }
        for (var i = 0; i < $("#a").val().length; i++) {
            for (var j = 0; j < mas.length; j++) {
                if (mas[j] == $("#a").val()[i]) {
                    b = 0;
                }
            }
        }

        if ($("#a").val().length == 0 && (p1 == true && p2 == true && p3 == true && p4 == true && p5 == true && p7 == true && p8 == true)) {
            p6 = true;
            $('#ssave').css("display", "block");
            $("#set_a").html("");
        }
        else if (p2 == false || p3 == false || p1 == false || p4 == false || p5 == false || p7 == false || p8 == false) {
            $('#ssave').css("display", "none");
        }
        else if ($("#a").val() !== "") {
            if ($("#a").val().length < 5) {
                $("#set_a").html("<b style='color:red'>Город должен состоять от 5 символов</b>");
                $('#ssave').css("display", "none");
                p6 = false;
            }
            else if (document.getElementById("a").value.length > 1 && c == 1 && b == 1) {
                $("#set_a").html("Заменится на: <b>" + $("#a").val() + "</b>");
                $('#ssave').css("display","block");
                p6 = true;
            }
        }else{
            $("#set_a").html("");
        }
    });
    $('#m').keyup(function(e) {


        if ($("#m").val().length == 0 && (p1 == true && p2 == true && p3 == true && p4 == true && p5 == true && p6 == true && p8 == true)) {
            p7 = true;
            $('#ssave').css("display", "block");
            $("#set_m").html("");
        }
        else if (p2 == false || p3 == false || p1 == false || p4 == false || p5 == false || p6 == false || p8 == false) {
            $('#ssave').css("display", "none");
        }
        else if ($("#m").val() !== "") {
            var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
            if (pattern.test($("#m").val())) {
                $('#ssave').css("display", "block");
                $("#set_m").html("<b style='color:red'>Верно</b>");
                $("#set_m").html("");
                p7 = true;
            }
            else if (!pattern.test($("#m").val())) {
                $("#set_m").html("<b style='color:red'>Не верно</b>");
                $('#ssave').css("display", "none");
                p7 = false;
            }
            else if (document.getElementById("m").value.length > 1) {
                $("#set_m").html("Заменится на: <b>" + $("#m").val() + "</b>");
                $('#ssave').css("display","block");
                p7 = true;
            }
            else {
                $("#set_m").html("<b style='color:red'>Больше 2х символов</b>");
                $('#ssave').css("display","none");
                p7 = false;
            }
        }else{
            $("#set_m").html("");
        }
    });
    $('#org').keyup(function(e) {

        if ($("#org").val().length == 0 && (p1 == true && p2 == true && p3 == true && p4 == true && p5 == true && p6 == true && p7 == true)) {
            p8 = true;
            $('#ssave').css("display", "block");
            $("#set_org").html("");
        }
        else if (p2 == false || p3 == false || p1 == false || p4 == false || p5 == false || p6 == false || p7 == false) {
            $('#ssave').css("display", "none");
        }
        else if ($("#org").val() !== "") {

            if ($("#org").val().length < 2) {
                $("#set_org").html("<b style='color:red'>Название организации должно быть больше 2 символов</b>");
                $('#ssave').css("display", "none");
                p8 = false;
            }
            else if (document.getElementById("org").value.length > 1) {
                $("#set_org").html("Заменится на: <b>" + $("#org").val() + "</b>");
                $('#ssave').css("display","block");
                p8 = true;
            }
        }else{
            $("#set_org").html("");
        }
    });


$('#ssave').click(function(){
    setTimeout(function () {
        $.ajax({
            url: "pages/services/profile/send_edit.php",
            context: document.body,
            method: "POST",
            async: false,
            cache: false,
            dataType: 'html',
            data: {
                razdel: "Edit_Profile",
                f: $('#f').val(),
                i: $('#i').val(),
                o: $('#o').val(),
                n: $('#np').val(),
                c: $('#c').val(),
                a: $('#a').val(),
                m: $('#m').val(),
                org:$('#org').val()
            }
        }).done(function(data) {
            window.location.assign("/id"+$(data).filter('.o').html());
        }).fail(function(){
            alert('fail');
        });
    }, 800);
});