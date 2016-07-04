<div class='row'>
    <div class="col-xs">
        <div class="box">
            <?php
            $ch = explode("~", $re['che']);
            print "<div class='row'  style='padding-top:10px;'>
                <div class='col-xs' style='font-size:13pt;'>" . $ch[0] . "</div>
           </div>";
            $che = explode("+", $ch[1]);
            foreach ($che as $val):
                $check = explode("|", $val);
                print "
            <div class='row'>
                <div class='col-xs' style='font-size:13pt;'>
                    <label><input type='checkbox' name='" . $check[0] . "' >
                        " . $check[0] . "
                </div>
                <div class='col-xs end-xs'>(+" . $check[1] . " грн.)
                    </label>
                </div>
            </div>";
            endforeach;
            ?>
        </div>
    </div>
</div>