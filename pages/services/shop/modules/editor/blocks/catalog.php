<div class="form-group">
    <label for="sel1">Каталог:</label>
    <select class="form-control" id="sel1">
        <?
        foreach (getCatalog('name') as $val):
            print "<option>" . $val . "</option>";
        endforeach;
        ?>
    </select>
</div>