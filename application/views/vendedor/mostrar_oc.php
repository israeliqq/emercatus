
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="breadcome-list single-page-breadcome">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3>Ordenes de Compra</h3>
                    <hr>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-graph">
                        <div class="product-payment-inner-st datatable-dashv1-list custom-datatable-overright">
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
                                        <th data-field="id">Nº Orden</th>
                                        <th data-field="name" data-editable="true">Destinatario</th>
                                        <th data-field="email" data-editable="true">Email</th>
                                        <th data-field="phone" data-editable="true">Dirección</th>
                                        <th data-field="complete">Teléfono</th>
                                        <th data-field="task" data-editable="true">Estado</th>
                                        <th data-field="date" data-editable="true">Fecha</th>
                                        <th data-field="price" data-editable="true">Precio Total</th>
                                        <th data-field="action">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($datos['oc'] as $row){ ?>
                                    <tr>
                                        <td></td>
                                        <td><?php echo $row->id;            ?></td>
                                        <td><?php echo $row->destinatario;  ?></td>
                                        <td><?php echo $row->direccion;     ?></td>
                                        <td><?php echo $row->direccion;     ?></td>
                                        <td><?php echo $row->ciudad;        ?></td>
                                        <td><?php echo $row->region;        ?></td>
                                        <td><?php echo $row->telefono;      ?></td>
                                        <td><?php echo $row->usuario_id;    ?></td>
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
