<form action="<?php echo base_url();?>pages/actualizarCompra">
<div class="cart_container">
		<div class="container">
			<div class="row">
				<div class="col">
				<div class="row cart_extra">
				<!-- Cart Coupon -->
				<div class="col-lg-6">
					<div class="cart_coupon">
						<div class="text-left"><h2>SI TIENES CUPON DE DESCUENTO INGRESALO AQUI:</h2></div>
						<form action="#" class="cart_coupon_form d-flex flex-row align-items-start justify-content-start" id="cart_coupon_form">
							<input type="text" class="cart_coupon_input" placeholder="Codigo del Cupon" required="required">
							<button class="button_clear cart_button_2">hacer efectivo el cupon</button>
							<br>
						</form>
						<div class="text-ceil">Recuerda ingresar el cupon en letras mayusculas</div>
					</div>
				</div>
				<!-- Cart Total -->
				
				<div class="col-lg-5 offset-lg-1">
					<div class="cart_total">
					<label class="cart_title">Tu(s) Combo(s)</label>
					<?php $i = 1; foreach($this->cart->contents() as $item):?>
					<input type="hidden" name="<?php echo $i;?>[rowid]" value="<?php echo $item['rowid']?>">
						<ul>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Nombre del Combo</div>
								<div class="cart_total_price ml-auto"><?php echo $item['name']?></div>
							</li>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Subtotal</div>
								<div class="cart_total_price ml-auto">$ <?php echo $this->cart->format_number($item['price']);?></div>
							</li> 
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Valor del Domicilio</div>
								<div class="cart_total_price ml-auto">$ 00</div>
							</li>
							
							<?php 
							$i++;
							endforeach;
							?>
							</div>
							
							<label class="cart_title">Tu Valor Total</label>
							
					<div class="cart_total">
							<ul>
							<li class="d-flex flex-row align-items-center justify-content-start">
								<div class="cart_total_title">Total a Pagar de tu(s) combo(s):</div>
								<div class="cart_total_price ml-auto"><?php echo $this->cart->total();?></div>
							</li>
						</ul>
						</div>
							</div>
							</div>
						
						<button class="cart_total_button"><a href="<?php echo base_url();?>pages/compra">Agregar Mas Combos</button>
						<br>
						<button class="cart_total_button"><a href="#">Pedir Domicilio</button>
						<br>
						<button class="cart_total_button"><?php echo anchor('pages/cancelarCompras', 'Cancelar Combos');?></button>
					
			</div>
			</div>
		</div>
	</div>
</div>
</form>