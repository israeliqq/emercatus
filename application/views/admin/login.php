<div class="main-content shop-page login-page">
		<div class="container">
			<div class="breadcrumbs">
				<a href="#">Home</a> \ <span class="current"> Ingresar al Sistema</span>
			</div>
			<div class="login-register-form content-form row">
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
					<div class="login-form">
						<h4 class="main-title">Ingrese sus Datos</h4>
						<span class="label-text">Email</span>
						<input type="email" class="input-info">
						<span class="label-text">Password</span>
                        <input type="password" class="input-info">
                        <span class="label-text">Perfil</span>
                        <div class="form-group">
                            <select class="input-info" id="perfil">
                                <option>Vendedor</option>
                                <option>Comprador</option>
                                <option>Transportista</option>
                            </select>
                        </div>
						<div class="check-box">
                            <input type="checkbox" class="login-check" id="login-check"> 
                            <label class="text-label" for="login-check">Recordar</label>
							<a href="#" class="forgot"><i class="fas fa-key"></i> Recuperar Contraseña</a>
						</div>
						<div class="group-button">
							<a href="#" class="button submit">Ingresar</a>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <img src="<?php echo base_url();?>tools/images/b2b.jpg">
				</div>
			</div>
		</div>
	</div>