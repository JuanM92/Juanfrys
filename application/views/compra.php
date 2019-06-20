<div class="cart_container">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cart_title">Tu Pedido</div>
				</div>
			</div>
			<form  action="<?php echo base_url();?>pages/agregarCompra" method="post">
			<label for="recipient-name" class="col-form-label">Seleccione su Combo:</label>
						
						<div class="form-group">
    
    <select name="opciones[combo 1]" class="form-control">
      <option >Click aqui para seleccionar Combo 1</option>
	  <option>Combo 1</option>
	  <input type="hidden" name="idProducto" Value="1">
	  <input type="hidden" name="Nombre_Producto" Value="Combo Hamburgesa">
	  <input type="hidden" Type="text" name="quantity_input" maxlength="1" value="1">
	  <input type="hidden" name="Price" Value="12000">
	  </select><BR>
	  <select name="opciones[combo 2]" class="form-control">
      <option>Click aqui para seleccionar Combo 2</option>
	  <option>Combo 2</option>
	  <input type="hidden" name="idProducto" Value="2">
	  <input type="hidden" name="Nombre_Producto" Value="Combo Mega Sandwich">
	  <input type="hidden" Type="text" name="quantity_input" maxlength="1" value="1">
	  <input type="hidden" name="Price" Value="14500">
	  </select><BR>
	  <select name="opciones[combo 3]" class="form-control">
      <option>Click aqui para seleccionar Combo 3</option>
	  <option>Combo 3</option>
	  <input type="hidden" name="idProducto" Value="3">
	  <input type="hidden" name="Nombre_Producto" Value="Combo Perro Caliente">
	  <input type="hidden" Type="text" name="quantity_input" maxlength="1" value="1">
	  <input type="hidden" name="Price" Value="16000">
	  </select><BR>
	  <select name="opciones[combo 4]" class="form-control">
      <option>Click aqui para seleccionar Combo 4</option>
	  <option>Combo 3</option>
	  <input type="hidden" name="idProducto" Value="3">
	  <input type="hidden" name="Nombre_Producto" Value="Combo Salchipapa">
	  <input type="hidden" Type="text" name="quantity_input" maxlength="1" value="1">
	  <input type="hidden" name="Price" Value="9000">
	  </select><BR>
	  
	
  </div>
						<input type="submit" class="btn btn-primary" value="Pedir Combo">
						
						

		
</form>

		</div>
	</div>
</form>