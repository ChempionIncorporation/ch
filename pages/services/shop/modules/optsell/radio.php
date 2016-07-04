<div class='row'>
    <div class="col-xs">
        <div class="box">
            <?php
            $ra = explode("~", $re['rad']);
            print "<div class='row'  style='padding-top:10px;'>
                        <div class='col-xs' style='margin:10px;'>
                            <div class='box'>
                                " . $ra[0] . "
                            </div>
                        </div>
                    </div>";
            $rad = explode("+", $ra[1]);
            foreach ($rad as $val):
                $radio = explode("|", $val);
                print "<div class='row'>
                                <div class='col-xs-3' style='font-size:13pt;'>
                            <label>
                                    <div class='box'>
                                        <input type='radio' name='" . $ra[0] . "'> " . $radio[0] . "
                                    </div>
                                </div>
                                <div class='col-xs'>
                                    <div class='box'>
                                        ( +" . $radio[1] . " грн.)
                                    </div>
                            </label>
                                </div>
                        </div>";
            endforeach;
            ?>
        </div>
    </div>
</div>
