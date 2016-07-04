<div class="form-group">
    <label for="sel1">Каталог:</label>
    <select class="form-control" id="cat">
        <?
        foreach (getCatalog('name') as $val):
            print "<option value='" . $val . "'>" . $val . "</option>";
        endforeach;
        ?>
    </select>
</div>