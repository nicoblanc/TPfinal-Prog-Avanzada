<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--mostramos los errores del formulario, si los hay-->
<?php echo validation_errors(); ?>
<?php echo form_open(base_url().'index.php/verificar/nueva_sesion') ?></pre>
<table>
<tbody>
<tr>
<td>Nombre de usuario:</td>
<td><input type="text" name="nom" /></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pass" /></td>
</tr>
<tr>
<td></td>
<td><input title="Iniciar sesión" type="submit" value="Iniciar sesión" /></td>
</tr>
</tbody>
</table>

<!--?php echo form_close() ?-->