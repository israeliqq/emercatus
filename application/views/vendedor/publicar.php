

<div class="main-content shop-page login-page">
    <div class="container">
        <div class="breadcrumbs">
            <a href="#">Inicio</a> \ <span class="current"> Ingresar al Sistema</span>
        </div>
        <div class="login-register-form content-form row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="register-form">
                    <h4 class="main-title"><span class="fa fa-line-chart"></span> Publicar Producto</h4>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<span class="label-text">Categoria <span>*</span></span>
							<select name="Categoria1" id='cboCategoria' class="input-info" onChange="Categoria1_onChange()">
								<option selected value="0"> Elige una categoría </option>
								<?php 	$i=1;
										foreach ($categorias as $row)
										{
											if($row->id_categoria==$i){
												echo "<option value='".$row->id_categoria."'>".$row->nombre_c."</option>";
												$i++;
											}
									   }
								?>
							</select>
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<?php 	$i=1;
								foreach ($categorias as $row)
								{
									if($row->id_categoria==$i){
										echo "<select class='input-info' name='id".$row->id_categoria."' id='id".$row->id_categoria."'>";
										echo "<option selected value='0'> Elige una subcategoría </option>";
										
										foreach ($categorias as $fila)
										{	
											if($fila->id_categoria==$i){
												echo "<option value='".$fila->id_subcategoria."'>".$fila->nombre_sc."</option>";
											}
										}   
										echo "</select>";
										$i++;
									}
								}
							?>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<span class="label-text">Titulo <span>*</span></span>
						<input type="text" name="nombre" maxlength="60" class="input-info" required="" value="<?php if(isset($usuario)){echo $usuario['cbo_titulo'];}?>">
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<span class="label-text">Precio <span>*</span></span>
						<input type="text" onkeypress='return validaNumericos(event)' class="input-info" maxlength="10" name="cbo_precio" />
					</div>

					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
						<span class="label-text">Descripción <span>*</span></span>
						<textarea rows="4" maxlength="150" type="text" required="" name="cbo_descripcion" class="form-control" style="background-color: #f8f8f8"></textarea> 
					</div>
			
				</div>
			</div>
					
				

             
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="register-form">
					<h4 class="main-title"><span class="fa fa-plus"></span> Agregar imagenes</h4>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

						<div class='content'>
							<br>
           					 <form style="background-color:#f8f8f8" action="<?php echo base_url('vendedor/uploads');?>" class="dropzone"  > 
            				</form> 
            				
            				 
            			</div> 

           				

						<div class="group-button">
							
							<button type="submit" class="btn btn-info btn-block" style="background-color:#f27a23;border-color:#f27a23; height: 50px">Publicar <span class="fa fa-bullhorn" aria-hidden="true"></span></button>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>
 
 
<div style="height: 25px;"></div>
 
            
<script>
	var cboCategoria = document.getElementById("cboCategoria");
	<?php 	$i=1;
			foreach ($categorias as $row)
			{
				if($row->id_categoria==$i){
					echo "var cbo".$row->id_categoria." = document.getElementById('id".$row->id_categoria."');";
					$i++;
				}
		   }
	?>
	hideCombos();

	function Categoria1_onChange() {
		var value = parseInt( cboCategoria.options[cboCategoria.selectedIndex].value);
		hideCombos();

		switch (value) {
			
			<?php 	$i=1;
			foreach ($categorias as $row)
			{
				if($row->id_categoria==$i){
					echo "case ".$row->id_categoria." : ";
					echo "show(cbo".$row->id_categoria."); ";
					echo "break; ";
					$i++;
				}
		   }
			?>			
			default :
				break;
		}
	}

	function hideCombos() {
		<?php 	$i=1;
			foreach ($categorias as $row)
			{
				if($row->id_categoria==$i){
					echo "hide(cbo".$row->id_categoria."); ";
					$i++;
				}
		   }
		?>
	}

	function hide(elem) { elem.style.display = 'none'; }

	function show(elem) { elem.style.display = 'inline'; }
</script>


<script src="<?php echo base_url();?>tools/dropzone/dist/min/dropzone.min.js" type="text/javascript"></script>
<script type='text/javascript'>

Dropzone.autoDiscover = false;

var myDropzone = new Dropzone(".dropzone", { 
    autoProcessQueue: false,
	acceptedFiles: ".jpg,.jpeg,.JPG,.JPEG,.png,.PNG",
    dictRemoveFile:"Eliminar",
	dictDefaultMessage:"<h1 style='font-family: «Helvetica Neue», Helvetica, Arial, sans-serif;'>Agrege hasta 2 imagenes de sus productos</h1>",
	addRemoveLinks: true,
	maxFiles: 2,
    parallelUploads: 10 // Number of files process at a time (default 2)
});

$('#uploadfiles').click(function(){
    myDropzone.processQueue();
});
</script>


<script>
function validaNumericos(event) {
    if(event.charCode >= 48 && event.charCode <= 57){
      return true;
     }
     return false;        
} 
</script>
	 
