<?php
if ($_POST['image_form_submit'] == 1) {
    $images_arr = array();
    foreach ($_FILES['images']['name'] as $key => $val) {
        $image_name = $_FILES['images']['name'][$key];
        $tmp_name = $_FILES['images']['tmp_name'][$key];
        $size = $_FILES['images']['size'][$key];
        $type = $_FILES['images']['type'][$key];
        $error = $_FILES['images']['error'][$key];


        $extra_info = getimagesize($_FILES['images']['tmp_name'][$key]);
        $images_arr[] = "data:" . $extra_info["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['images']['tmp_name'][$key]));

        $arr = explode(".", $_FILES['images']['name'][$key]);
        $new_name = md5(md5($arr[0]) . md5(rand(0, 99999))) . "." . $arr[1];

        $patch = 'uploads/' . $new_name;
        if (move_uploaded_file($_FILES['images']['tmp_name'][$key], $patch))
            $up_i = "ok!";
        else
            $up_i = "<script>alert('Картинка не добавлена')</script>";
    }

    //Generate images view
    if (!empty($images_arr)) {
        $count = 0;
        foreach ($images_arr as $image_src) {
            $count++; ?>
            <input type="text" name="name_img" style="margin:10px; margin-right:20px;" class="form-control name_img"
                   id="img" value="<? print $new_name; ?>" disabled>
            <ul class="reorder_ul reorder-photos-list center-xs">
                <li id="image_li_<?php echo $count; ?>" class="ui-sortable-handle">
                    <a href="javascript:void(0);" style="float:none;" class="image_link"><img width='150px'
                                                                                              name="myimg>"
                                                                                              height='300px'
                                                                                              src="<?php echo $image_src; ?>"
                                                                                              alt=""></a>
                </li>
            </ul>
            <?php
        }
    }
}
?>