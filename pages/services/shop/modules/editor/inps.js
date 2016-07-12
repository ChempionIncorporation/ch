$(function () {
    $('#btn_aad').click(function () {
        var mt_input = "", mt_radio = "", mt_check = "";
        if($('#pri').val() < 0 || $('#pri').val().indexOf('e')+1)
            $('#pri').val('');
        if($('#hei').val() < 0 || $('#hei').val().indexOf('e')+1)
            $('#hei').val('');
        if($('#wid').val() < 0 || $('#wid').val().indexOf('e')+1)
            $('#wid').val('');

        if($('#images').val() == '')
            alert("Download picture!");

        if($('.name_img').val().indexOf('jpg')+1 || $('.name_img').val().indexOf('jpeg')+1 || $('.name_img').val().indexOf('bmp')+1 || $('.name_img').val().indexOf('png')+1)
        {
            var s = null;
        }else alert("Picture don't download");

        if($('#usr').val() != "" &&
            $('#img').val() != "" &&
            $('#img').val() != "" &&
            $('#nal').val() != "" &&
            $('#pri').val() != "" &&
            $('#hei').val() != "" &&
            $('#wid').val() != "" &&
            $('#des').val() != "" &&
            $('#cha').val() != "" &&
            $('#req').val() != "" ) {
            var mt_input = "", mt_radio = "", mt_check = "";
            for (var i = 0; i < 5; i++) {
                var inp_n = $("#input_n_" + i), inp_p = $("#input_p_" + i);
                var rad_n = $("#radio_n_" + i), rad_p = $("#radio_p_" + i), gl_radio = $('#gl_radio').val();
                var che_n = $("#checkbox_n_" + i), che_p = $("#checkbox_p_" + i), gl_checkbox = $('#gl_checkbox').val();

                if (inp_n.val() !== "")
                    if (mt_input !== "")
                        mt_input = inp_n.val() + "|" + inp_p.val() + "+" + mt_input;
                    else
                        mt_input = inp_n.val() + "|" + inp_p.val();

                if (rad_n.val() !== "" && gl_radio !== "")
                    if (mt_radio !== "")
                        mt_radio = rad_n.val() + "|" + rad_p.val() + "+" + mt_radio;
                    else
                        mt_radio = rad_n.val() + "|" + rad_p.val();

                if (che_n.val() !== "" && gl_checkbox !== "")
                    if (mt_check !== "")
                        mt_check = che_n.val() + "|" + che_p.val() + "+" + mt_check;
                    else
                        mt_check = che_n.val() + "|" + che_p.val();
            }

            var input_f = "", radio_f = "", check_f = "";
            if (mt_input !== "")
                input_f = mt_input;
            if (mt_radio !== "")
                radio_f = gl_radio + "~" + mt_radio;
            if (mt_check !== "")
                check_f = gl_checkbox + "~" + mt_check;

            $.ajax({
                url: 'add.php',
                type: 'post',
                data: {
                    "name": $('#usr').val(),
                    "img": $('#img').val(),
                    "cat": $('#cat').val(),
                    "nal": $('#nal').val(),
                    "pri": $('#pri').val(),
                    "hei": $('#hei').val(),
                    "wid": $('#wid').val(),
                    "des": $('#des').val(),
                    "cha": $('#cha').val(),
                    "req": $('#req').val(),
                    "inp": input_f,
                    "rad": radio_f,
                    "che": check_f
                },
                response: 'text',
                success: function (data) {
                    alert($(data).find('.Result_text'));
                },
                error: function () {
                    alert('error');
                }
            });
        }
    });
});