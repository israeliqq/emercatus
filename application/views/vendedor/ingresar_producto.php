



<div class="main-content shop-page login-page">
    <div class="container">

        <div class="breadcrumbs">
            <a href="#">Inicio</a> \ <span class="current"> Ingresar al Sistema</span>
        </div>
        <div class="login-register-form content-form row">
             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="register-form">
                        <h4 class="main-title"><span class="fa fa-line-chart"></span> Publicar Producto</h4>
                        
                        <?php if(isset($mensaje)){echo $mensaje;}?>

                        <div class="row">

                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <span class="label-text">Categoria <span>*</span></span>
                                <select  type="text" name="pais" class="input-info" value="">

                                
                                   <optgroup label="prendas">
                                    <option value="<?php if(isset($usuario)){echo $usuario['pais'];}?>">jeans</option>
                                    <option value="">ropa de hombre</option>
                                    <option value="">ropa de mujer</option>
                                    <option value="">calzados</option>
                                   </optgroup>
                                    <optgroup label="automotriz">
                                    <option value="">llantas</option>
                                    <option value="">exterior</option>
                                    <option value="">volantes</option>
                                   </optgroup>

                                </select>
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                <span class="label-text">Nombre <span>*</span></span>
                                <input type="text" name="nombre" class="input-info" value="<?php if(isset($usuario)){echo $usuario['nombre'];}?>">
                            </div>

                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <span class="label-text">Precio <span>*</span></span>
                            <input placeholder="$" type="text" name="email" class="input-info"value="<?php if(isset($usuario)){echo $usuario['correo'];}?>">  
                            </div>

                             <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                                <span class="label-text">Descripción <span>*</span></span>
                                <textarea rows="4" type="text" name="apellido" class="form-control"></textarea> 

                             </div>



                        

                          
                        </div>
                    

                       

                    </div>
                </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                 <div class="register-form">
                     <h4 class="main-title"><span class="fa fa-plus"></span> Agregar imagenes</h4>
                    <?php if(isset($mensajeLogin)){echo $mensajeLogin;}?></div>
        
                   <form class="dropzone needsclik dz-clikable" id="subirimagen" action="receptor.php" style="background-color: white;border-color:#E77707;" >
                   

                        <div class="dz-message needsclik">
                        Suelte los archivos aquí o haga clic para subir. 
                        </div> 

                       

                    </form>
                     <div class="group-button">
                            <button type="submit" class="btn btn-info">Publicar <span class="fa fa-bullhorn" aria-hidden="true"></span></button>
                        </div> 
                    <br>
       </div>
   </div>
</div>
</div>