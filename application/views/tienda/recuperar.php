
<form id="registrar" name="registrar" method="POST" action="<?= base_url('Tienda/login') ?>">
   
   <div class="container">
        <div class="breadcrumbs">
            <a href="#">Inicio</a> \ <span class="current"> Recuperar contraseña</span>
        </div>
        <div class="login-register-form content-form row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="register-form center-block">
                    <h4 class="main-title">Introduce el correo electrónico que utilizaste para crear tu cuenta y recibirás un mensaje con el link para cambiar tu contraseña</h4>
					<?php if(isset($mensajeLogin)){print_r ($mensajeLogin);}?>
                    
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <span class="label-text">Correo *</span>
                            <input type="text" name="txt_correo" class="input-info">
                        </div>
                   
						
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<input type="submit" class="btn btn-info " name="btn_login" value="Enviar" style="background-color:#f27a23;border-color:#f27a23;">
					</div>		
                </div>
            </div>
		
			
        </div>
    </div>
	<div style="height: 50px;"></div>
</form>



