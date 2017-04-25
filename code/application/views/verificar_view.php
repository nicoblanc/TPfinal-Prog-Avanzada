<div class="container">
    <div class="row">
        <div class="col-md-4">
               <?php echo form_open(base_url().'index.php/verificar/nueva_sesion'); ?>
                <img src="<?php echo base_url('images/logo.png'); ?>" style="border-radius: 7px; width: 100%;">
                <div></div><br>
                        <div class="form-group">
                            <label for="inputNom" class="sr-only">Usuario</label>
                            <input name="nom" type="text" id="nom" class="form-control" placeholder="Usuario" required="" autofocus="">
                        </div>
                        <div class="form-group">
                            <label for="password" class="sr-only">Contraseña</label>
                            <input name="password" type="password" id="password" class="form-control" placeholder="Contraseña" required="">
                        </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                <?php echo form_close(); ?>
        </div>
    </div>
</div> <!-- /container -->





