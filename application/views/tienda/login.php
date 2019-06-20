
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>


	<link rel="stylesheet" href="<?php echo base_url();?>tools/css/strength.css">
	<script src="<?php echo base_url();?>tools/js/password_strength.js"></script>
	<script src="<?php echo base_url();?>tools/js/jquery-strength.js"></script>


<form id="registrar" name="registrar" method="POST" action="<?= base_url('Tienda/login') ?>">
   
   <div class="container">
        <div class="breadcrumbs">
            <a href="#">Inicio</a> \ <span class="current"> Ingresar al Sistema</span>
        </div>

        <div class="login-register-form content-form row">

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="register-form">
                    <h4 class="main-title">Ingresar al Sistema</h4>
					<?php if(isset($mensajeLogin)){print_r ($mensajeLogin);}?>
                    
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="label-text">Correo *</span>
                            <input type="text" name="txt_correo" class="input-info">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="label-text">Password *</span>
                            <input type="password" name="txt_pass" class="input-info">
                            	
							<div class="text-right">
								<a href="<?php echo base_url("tienda/recuperar");?>" style="color:#f27a23;">¿Has olvidado tu contraseña?</a>
							</div>
						</div>
                   
						
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><input type="submit" class="btn btn-info" name="btn_login" value="Ingresar" style="background-color:#f27a23;border-color:#f27a23;"></div>	

                </div>
            </div>







            
            
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="register-form">
						<h4 class="main-title">Crear Cuenta</h4>
						
						<?php if(isset($mensaje)){echo $mensaje;}?>

							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<span class="label-text">Nombre <span>*</span></span>
								<input type="text" name="nombre" class="input-info" value="<?php if(isset($usuario)){echo $usuario['nombre'];}?>">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<span class="label-text">Apellido <span>*</span></span>
								<input type="text" name="apellido" class="input-info" value="<?php if(isset($usuario)){echo $usuario['apellidos'];}?>">	
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<span class="label-text">País <span>*</span></span>
								<select name="pais" id="cbo_pais"  class="input-info">
									<optgroup label="Sudamerica">
										<option>Chile</option>
										<option>Brasil</option>
										<option>Argentina</option>
										<option>Perú</option>
										<option>Paraguay</option>
										<option>Uruguay</option>
										<option>Colombia</option>
										<option>Bolivia</option>
										<option>Ecuador</option>
										<option>Venenzuela</option>  
									</optgroup>
								</select>
							</div>
							
							<div id="x" onkeyup="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: none;" >
								<span class="label-text">Rut <span>*</span></span>
								<input type="text" name="email" id="rut" class="input-info"value="<?php if(isset($usuario)){echo $usuario['correo'];}?>">	
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<span class="label-text">Email <span>*</span></span>
								<input type="text" name="email" class="input-info"value="<?php if(isset($usuario)){echo $usuario['correo'];}?>">	
							</div>
							<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<span class="label-text">Password <span>*</span><span>
								<input type="password" name="pass1" class="check-seguridad form-control" value="" style="background-color:#f8f8f8" >
								<br>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<span class="label-text">Confirmar Password <span>*</span><span>
								<input type="password" name="pass2" class="form-control" style="background-color:#f8f8f8">	
								<br>
							</div>
							
						<br>
						<div class="col-xs-12 col-sm-offset-9 col-md-12 col-lg-12"><input type="submit" class="btn btn-info" name="btn_registrase" value="Registrarse" style="background-color:#f27a23;border-color:#f27a23;"></div>		
					</div>
			
            </div>
			
        </div>
    </div>
	<div style="height: 50px;"></div>
</form>



<script>
	
		jQuery(function($) {
			
			$(".check-seguridad").strength({
				templates: {
    			toggle: '<span class="input-group-addon"><span class="fa fa-eye {toggleClass}"></span></span>'
                
                },
                scoreLables: {
                        empty: 'Vacío',
                        invalid: 'Invalido',
                        weak: 'Débil',
                        good: 'Bueno',
                        strong: 'Fuerte'
                    }, 
                scoreClasses: {
                        empty: '',
                        invalid: 'label-danger',
                        weak: 'label-warning',
                        good: 'label-info',
                        strong: 'label-success'
                    },

			});
		});

</script>


