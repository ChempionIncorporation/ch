<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/pages/services/shop/modules/editor/modules/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/pages/services/shop/modules/editor/modules/jquery.form.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.uploading').hide();

            $('#images').on('change', function () {
                $('#multiple_upload_form').ajaxForm({
                    target: '#images_preview',
                    beforeSubmit: function (e) {
                        $('.uploading').show();
                    },
                    success: function (e) {
                        $('.uploading').hide();
                    },
                    error: function (e) {
                    }
                }).submit();
            });
        });
    </script>
</head>

<body>
<div style="margin-top:50px;">
    <div class="upload_div">
        <form name="multiple_upload_form" id="multiple_upload_form" enctype="multipart/form-data"
              action="/pages/services/shop/modules/editor/modules/upload.php">
            <input type="hidden" name="image_form_submit" value="1"/>
            <label class="ll">Загрузить картинку</label>
            <input type="file" name="images[]" id="images" multiple>
            <div class="uploading">
                <label>&nbsp;</label>
                <img src="/pages/services/shop/modules/editor/modules/uploading.gif"/>
            </div>
        </form>
    </div>
    <style>
        .gallery img {
            width: 250px;
        }

        .gallery li {
            list-style-type: none;
            counter-increment: list;
        }
    </style>
</div>
</body>
</html>
