<?php

?>
<h1>Asignar estado </h1>

<p><?php echo($itemCode); ?></p>

<div>
<form method="POST" action="<?php echo(base_url('/index.php/item/changeState').'/'.$itemCode);?> ">
    <select name="itemState">
        <option value="1">Análisis </option>
        <option value="2">Desarrollo</option>
        <option value="3">Testing</option>
        <option value="4">Implemetacion</option>
    </select>
    <input type="submit" value="Cambiar estado">
</form>
</div>