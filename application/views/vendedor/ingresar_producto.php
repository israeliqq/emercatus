
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="breadcome-list single-page-breadcome">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3>Ingresar Producto</h3>
                    <hr>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="<?php echo base_url();?>vendedor/upload" method="post" accept-charset="utf-8" class="dropzone">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input name="titulo" type="text" class="form-control" placeholder="Titulo">
                                </div>
                                <div class="form-group res-mg-t-15">
                                    <textarea name="descripcion" placeholder="Descripción"></textarea>
                                </div>
                                <div class="form-group">
                                    <select name="categoria" class="form-control">
                                        <option value="none" selected="" disabled="">Categoría</option>
                                        <option value="1">Categoría 1</option>
                                        <option value="2">Categoría 2</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input name="precio" type="number" class="form-control" placeholder="Precio Unitario">
                                </div>
                                <div class="form-group">
                                    <input name="stock"  type="number" class="form-control" placeholder="Stock">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                
                                <input name="proveedor" type="text" hidden value="<?php echo $_GET['id']?>">
                                
                                
                                <div class="form-group">
                                    <input type="submit" name="btnSubirProducto" class="btn btn-primary btn-block waves-effect waves-light" value="Subir Producto">
                                </div>
                            </div>
                        </div>
                        <h3>Subir Imagenes</h3>
                        <hr>
                        <div class="form-group alert-up-pd">
                            <div class="dz-message needsclick download-custom">
                                <i class="fa fa-download edudropnone" aria-hidden="true"></i>
                                <h2 class="edudropnone">Arrastra la imagen hasta aquí o haz click para subir.</h2>
                                <p class="edudropnone"><span class="note needsclick">Solo la primera imagen subida <strong>será la de portada.</strong> las demas se agregarán al album.</span>
                                </p>
                                <input name="imageico" class="hd-pro-img" type="text" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

