<br><br>
<section class="">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="section__heading text-center">
                    <i style="font-family: 'Open Sans', sans-serif";>Deleitate con nuestras comidas</i>
                </h2>
                <p class="section__subheading text-center">
                    aqui encontraras lo que deseas y como lo deseas...
                </p>
            </div>
        </div>
    </div>
</section>
<div class="col-12">
	<div class="sorting">
		<ul class="item_sorting">
			<li>
				<a class="sorting_text" href="<?php echo base_url();?>pages/compra"><span class="sorting_text">Realiza tu Compra aqui</span></a>
			</li>
		</ul>
	</div>
</div>
				
<div class="container">
    <div class="align-content-center">
        <?php if (!empty($productos)):?>
            <?php foreach ($productos as $producto):?>
                <table class="table table-striped table-bordered text-justify text-center">

                    <tr>
                        <td><h4>Combo</h4></td>
                        <td><h4>Imagen</h4></td>
                        <td><h4>Nombre</h4></td>
                        <td><h4>Descripcion</h4></td>
                        <td><h4>Precio</h4></td>
                    </tr>
                    <br>
                    <tr>
                        <td><h4><?php echo $producto->idProducto;?></h4></td>
                        <td><img src="<?php echo base_url();?>images/productos/<?php echo $producto->foto;?>" with="110" height="110"/></td>
                        <td><h4><?php echo $producto->Nombre_Producto;?></h4></td>
                        <td><h4><?php echo $producto->Descripcion;?></h4></td>
                        <td><h4><?php echo $producto->Precio;?></h4></td>
                    </tr>
                    <br><br><br>
                </table>
            <?php endforeach;?>
        <?php endif;?>
    </div>
</div>
<div class="col-12">
	<div class="sorting">
		<ul class="item_sorting">
			<li>
				<a class="sorting_text" href="<?php echo base_url();?>pages/compra"><span class="sorting_text">Realiza tu Compra aqui</span></a>
			</li>
		</ul>
	</div>
</div>
<br><br><br>