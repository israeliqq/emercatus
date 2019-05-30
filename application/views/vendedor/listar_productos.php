<div class="breadcome-area">
    <div class="container-fluid">
        <div class="breadcome-list single-page-breadcome">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3>Listar tus Productos</h3>
                    <hr>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="devit-card-custom">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div id="toolbar">
                                <select class="form-control dt-tb">
                                    <option value="">Export Basic</option>
                                    <option value="all">Export All</option>
                                    <option value="selected">Export Selected</option>
                                </select>
                            </div>
                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                <thead>
                                    <tr>
                                        <th data-field="state" data-checkbox="true"></th>
                                        <th data-field="id">ID</th>
                                        <th data-field="name" data-editable="true">Titulo</th>
                                        <th data-field="email" data-editable="true">Descripción</th>
                                        <th data-field="phone" data-editable="true">Precio</th>
                                        <th data-field="complete">Stock</th>
                                        <th data-field="task" data-editable="true">Categoría</th>
                                        <th data-field="date" data-editable="true">Proveedor</th>
                                        <th data-field="price" data-editable="true">Evaluación</th>
                                        <th data-field="action">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($datos['producto'] as $row){ ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $row->id;            ?></td>
                                        <td><?php echo $row->nombre;        ?></td>
                                        <td><?php echo $row->descripcion;   ?></td>
                                        <td><?php echo $row->precio;          ?></td>
                                        <td><?php echo $row->stock;            ?></td>
                                        <td><?php echo $row->subcategoria_id;        ?></td>
                                        <td><?php echo $row->proveedor_id;   ?></td>
                                        <td>Estrellas</td>
                                        <td>acciones</td>
                                    </tr>
                                <? } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


