<div class="row">
    <div class="col-xs">
        <div class="box center-xs" style="background: black; color:white">
            INPUT
        </div>
        <div class="box center-xs">
            <label for="usr">Наименование</label>
            <input type="text" class="form-control" id="usr" disabled>
        </div>
        <script>
            $(function () {
                for (var i = 0; i < 5; i++) {
                    $('.add_input').append(
                        "<div class='box start-xs col-xs-9'>" +
                        i + ")<label for='usr'>Название:</label>" +
                        "<input type='text' name='input_n_" + i + "' id='input_n_" + i + "' class='form-control'>" +
                        "</div>" +
                        "<div class='box center-xs col-xs-3'>" +
                        "<label for='usr'>Цена</label>" +
                        "<input type='text' name='input_p_" + i + "' id='input_p_" + i + "' class='form-control'>" +
                        "</div>"
                    );
                }
            });
        </script>
        <div class="add_input">
        </div>
    </div>
    <div class="col-xs">
        <div class="box center-xs" style="background: black; color:white">
            RADIO
        </div>
        <div class="box center-xs">
            <label for="usr">Наименование</label>
            <input type="text" class="form-control" id="gl_radio">
        </div>
        <script>
            $(function () {
                for (var i = 0; i < 5; i++) {
                    $('.add_radio').append(
                        "<div class='box start-xs col-xs-9'>" +
                        i + ")<label for='usr'>Название:</label>" +
                        "<input type='text' name='radio_n_" + i + "' id='radio_n_" + i + "' class='form-control'>" +
                        "</div>" +
                        "<div class='box center-xs col-xs-3'>" +
                        "<label for='usr'>Цена</label>" +
                        "<input type='text' name='radio_p_" + i + "' id='radio_p_" + i + "' class='form-control'>" +
                        "</div>"
                    );
                }
            });
        </script>
        <div class="add_radio">
        </div>
    </div>
    <div class="col-xs">
        <div class="box center-xs" style="background: black; color:white">
            CHECKBOX
        </div>
        <div class="box center-xs">
            <label for="usr">Наименование</label>
            <input type="text" class="form-control" id="gl_checkbox">
        </div>
        <script>
            $(function () {
                for (var i = 0; i < 5; i++) {
                    $('.add_checkbox').append(
                        "<div class='box start-xs col-xs-9'>" +
                        i + ")<label for='usr'>Название:</label>" +
                        "<input type='text'name='checkbox_n_" + i + "' id='checkbox_n_" + i + "' class='form-control'>" +
                        "</div>" +
                        "<div class='box center-xs col-xs-3'>" +
                        "<label for='usr'>Цена</label>" +
                        "<input type='text' name='checkbox_p_" + i + "' id='checkbox_p_" + i + "' class='form-control'>" +
                        "</div>"
                    );
                }
            });
        </script>
        <div class="add_checkbox">
        </div>
    </div>
</div>