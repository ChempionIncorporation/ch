<div class='row'>
    <div class="col-xs">
        <div class="box"><?php
            $count_inp = 0;
            $in = explode("+", $re['inp']);
            foreach ($in as $val):
                $arr = explode("|", $val);
                print "
                <div class='row'>
                    <div class='col-xs' style='font-size:13pt;'>
                        <div class='box'>
                            " . $arr[0] . "
                        </div>
                        <div class='box' style='font-size:10pt;padding-left:10px;'>
                            Цена: " . $arr[1] . " грн.
                        </div>
                    </div>
                    <div class='col-xs end-xs'>
                        <input type='number' id='input_" . $count_inp . "' name='price' size='5' maxlength='3' value='0'><br>
                    </div>
                </div>";
                $count_inp++;
            endforeach;
            ?>
        </div>
    </div>
</div>
