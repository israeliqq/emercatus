
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
								<a href="#" style="color:#f27a23;">¿Has olvidado tu contraseña?</a>
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
								  <select name="cbo_pais" id="cbo_pais"  class="input-info">
                                <optgroup label="Sudamerica">
                                    <option value="">Chile</option>
                                    <option value="">Brasil</option>
                                    <option value="">Argentina</option>
                                    <option value="">Perú</option>
                                    <option value="">Paraguay</option>
                                    <option value="">Uruguay</option>
                                    <option value="">Colombia</option>
                                    <option value="">Bolivia</option>
                                    <option value="">Ecuador</option>
                                    <option value="">Venenzuela</option>  
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
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<span class="label-text">Password <span>*</span><span>
								<input type="password" name="pass1" class="input-info">
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
								<span class="label-text">Confirmar Password <span>*</span><span>
								<input type="password" name="pass2" class="input-info">	
							</div>
							
						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><input type="submit" class="btn btn-info" name="btn_registrase" value="Registrarse" style="background-color:#f27a23;border-color:#f27a23;"></div>		
					</div>
			
            </div>
			
        </div>
    </div>
	<div style="height: 50px;"></div>
</form>



