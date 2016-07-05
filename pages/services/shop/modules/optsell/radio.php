<div class='row'>
    <div class="col-xs">
        <div class="box">
            <?php
            $count_rad = 0;
            $ra = explode("~", $re['rad']);
            print "<div class='row'  style='padding-top:10px;'>
                <div class='col-xs' style='font-size:13pt;padding:5px'>" . $ra[0] . "</div>
           </div>";
            $rad = explode("+", $ra[1]);
            foreach ($rad as $val):
                $radio = explode("|", $val);
                print "<div class='row'>
                                <div class='col-xs-3' style='font-size:13pt;'>
                            <label>
                                    <div class='box'>
                                        <input type='radio' id='radio_" . $count_rad . "' name='" . $ra[0] . "'> " . $radio[0] . "
                                    </div>
                                </div>
                                <div class='col-xs'>
                                    <div class='box'>
                                        ( +" . $radio[1] . " грн.)
                                    </div>
                            </label>
                                </div>
                        </div>";
                $count_rad++;
            endforeach;
            ?>
        </div>
    </div>
</div>
