<script type="text/javascript">
    function validateField(input) {
        if (input.value <= 0)
            input.value = '';
    }
</script>
<div class="row">
    <div class="col-xs">
        <div class="box">
            <div class="form-group">
                <label for="email">Цена конструкции:</label>
                <input type="number" name="price_k" class="form-control" id="pri" oninput="validateField(this)" required>
            </div>
        </div>
    </div>
</div>