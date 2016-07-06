<div class='row'>
    <div class="col-xs">
        <div class="box">
            <?php
            $count_che = 0;
            $ch = explode("~", $re['che']);
            print "<div class='row'  style='padding-top:10px;padding-bottom:10px'>
                <div class='col-xs' style='font-size:14pt;padding-left:10px'>" . $ch[0] . "</div>
           </div>";
            $che = explode("+", $ch[1]);
            foreach ($che as $val):
                $check = explode("|", $val);
                print "
            <div class='row'>
                <div class='col-xs' style='font-size:12pt;padding-left:20px'><label>
                    <input type='checkbox' id='check_" . $count_che . "' >
                        " . $check[0] . "
                </div>
                <div class='col-xs end-xs'>(+" . $check[1] . " грн.)
                    </label>
                </div>
            </div>";
                $count_che++;
            endforeach;
            ?>
        </div>
    </div>
</div>