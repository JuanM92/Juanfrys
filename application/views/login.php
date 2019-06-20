<br><br>
<h1 class="text-center">LOGIN</h1>
<p class="text-center">Por favor llene todos los espacios</p>

<?php echo validation_errors(); ?>
<?php echo form_open('pages/Check');?>
<p class="text-center">USUARIO: </p>
    <center><input type="text" name="user"/></center><br>
<p class="text-center">CONTRASEÑA :</p>
    <center><input type="password" name="password"/></center><br>
    <center><input type="submit" name="submit" value="login"/></center>
<?php echo form_close();?>
<br><br>
