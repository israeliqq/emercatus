<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">

    <div class="row">
        <br>
        <div class=" col-xs-12 col-sm-offset-0 col-sm-4">
            <div class="panel panel-default"  >
                  <div class="panel-body">
                     <div id="grafica"></div>
                    <script>
                     $(function($){
                         $('#grafica').highcharts({
                             title:{text:'Producto mas comprado'},
                             xAxis:{categories:['2019','2020','2021']},
                             yAxis:{title:'Porcentaje %',plotLines:[{value:0,width:1,color:'#808080'}]},
                             tooltip:{valueSuffix:'%'},
                             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
                             series:[{type: 'column',name: 'monitor hp gamer',data: [25,23, 21]}, 
                             {name: 'comparador',data: [20,18, 19]}, 
                             {type: 'column',name: 'Macbook air',data: [15, 17,11]}, 
                             {type: 'spline',name: 'incrementa',data: [0, 4, 4]},
                             {name: 'Objetivo',data: [0,1, 1.5]}
                           ],
                             plotOptions:{line:{dataLabels:{enabled:true}}}
                         });
                     });
                    </script>

                  </div>
            </div>
        </div>


       
        <div class=" col-xs-12 col-sm-offset-0 col-sm-5">
            <div class=" panel panel-default  panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class=" fa fa-angle-down"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Generar compra</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Enviar mensaje</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Eliminar</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ver perfil</a></li>
                    </ul>
                </div>
              
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>vendedor</h3>
                    <h5><span>Shared publicly</span> - <span>Jun 27, 2014</span> </h5>
                </div>
                <div class="panel-body">
                    <p>se venden telefonos por mayoria , espero sus consultas <3</p>
                    <center>
                        <img  class="img-responsive" src="<?php echo base_url();?>tools/images/product2.jpg" alt="">
                    </center>
                    
                </div>
                <div class="panel-footer">
                    <button type="button" class="[ btn btn-default ]"><span class="fa fa-trash-o"></span></button>
                    <button type="button" class="[ btn btn-default ]"  data-toggle="modal" data-target="#exampleModal" >
                        <span class="fa fa-credit-card-alt"></span>
                    </button>
                    <div class="input-placeholder">Escribe un comentario...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img class="img-circle" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea rows="4"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Comentar</button>
                        <button type="reset" class="[ btn btn-default ]">Cancelar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
          <div class=" col-xs-12 col-sm-offset-0 col-sm-3">
              <div class="product-item layout1">
                    <div class="product-inner equal-elem">
                        <ul class="group-flash">
                            <li><span class="sale flash">-50%</span></li>
                            <li><span class="best flash">Mejor vendido</span></li>
                        </ul>
                        <div class="thumb">
                            <a href="#" class="quickview-button"><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span>Vista rápida</a>
                            <a href="detail.html" class="thumb-link"><img src="<?php echo base_url();?>tools/images/product5.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="detail.html" class="product-name">Fujifilm INSTAX Mini 8 Instant Camera (White)</a>
                            <div class="price">
                                <span class="del">$700.00</span>
                                <span class="ins">$350.00</span>
                            </div>
                        </div>
                        <div class="group-button">
                            <div class="inner">
                            <a href="#" class="add-to-cart"><span class="text">Cotizar</span><span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span></a>
                            <a href="#" class="compare-button"><i class="fa fa-commenting" aria-hidden="true"></i></a>
                            <a href="#" class="wishlist-button"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


  </div>

</div>




<div class="container">

    <div class="row">
        
        <div class=" col-xs-12 col-sm-offset-4 col-sm-5">
            <div class=" panel panel-default  panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class=" fa fa-angle-down"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Generar compra</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Enviar mensaje</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Eliminar</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ver perfil</a></li>
                    </ul>
                </div>
              
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>vendedor</h3>
                    <h5><span>Shared publicly</span> - <span>Jun 27, 2014</span> </h5>
                </div>
                <div class="panel-body">
                    <p>se venden telefonos por mayoria , espero sus consultas <3</p>
                    <center>
                        <img  class="img-responsive" src="<?php echo base_url();?>tools/images/product2.jpg" alt="">
                    </center>
                    
                </div>
                <div class="panel-footer">
                    <button type="button" class="[ btn btn-default ]"><span class="fa fa-trash-o"></span></button>
                    <button type="button" class="[ btn btn-default ]"  data-toggle="modal" data-target="#exampleModal" >
                        <span class="fa fa-credit-card-alt"></span>
                    </button>
                    <div class="input-placeholder">Escribe un comentario...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img class="img-circle" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea rows="4"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Comentar</button>
                        <button type="reset" class="[ btn btn-default ]">Cancelar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class=" col-xs-12 col-sm-offset-0 col-sm-3">
              <div class="product-item layout1">
                    <div class="product-inner equal-elem">
                        <ul class="group-flash">
                            <li><span class="sale flash">-50%</span></li>
                            <li><span class="best flash">Mejor vendido</span></li>
                        </ul>
                        <div class="thumb">
                            <a href="#" class="quickview-button"><span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span>Vista rápida</a>
                            <a href="detail.html" class="thumb-link"><img src="<?php echo base_url();?>tools/images/product8.jpg" alt=""></a>
                        </div>
                        <div class="info">
                            <a href="detail.html" class="product-name">Fujifilm INSTAX Mini 8 Instant Camera (White)</a>
                            <div class="price">
                                <span class="del">$700.00</span>
                                <span class="ins">$350.00</span>
                            </div>
                        </div>
                        <div class="group-button">
                            <div class="inner">
                            <a href="#" class="add-to-cart"><span class="text">Cotizar</span><span class="icon"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span></a>
                            <a href="#" class="compare-button"><i class="fa fa-commenting" aria-hidden="true"></i></a>
                            <a href="#" class="wishlist-button"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row">
        <div class=" col-xs-12 col-sm-offset-4 col-sm-5">
            <div class=" panel panel-default  panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class=" fa fa-angle-down"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Generar compra</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Enviar mensaje</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Eliminar</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ver perfil</a></li>
                    </ul>
                </div>
              
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>vendedor</h3>
                    <h5><span>Shared publicly</span> - <span>Jun 27, 2014</span> </h5>
                </div>
                <div class="panel-body">
                    <p>se venden telefonos por mayoria , espero sus consultas <3</p>
                    <center>
                        <img  class="img-responsive" src="<?php echo base_url();?>tools/images/product2.jpg" alt="">
                    </center>
                    
                </div>
                <div class="panel-footer">
                    <button type="button" class="[ btn btn-default ]"><span class="fa fa-trash-o"></span></button>
                    <button type="button" class="[ btn btn-default ]"  data-toggle="modal" data-target="#exampleModal" >
                        <span class="fa fa-credit-card-alt"></span>
                    </button>
                    <div class="input-placeholder">Escribe un comentario...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img class="img-circle" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea rows="4"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Comentar</button>
                        <button type="reset" class="[ btn btn-default ]">Cancelar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
   </div>
</div>



<div class="container">

    <div class="row">
      
        <div class=" col-xs-12 col-sm-offset-4 col-sm-5">
            <div class=" panel panel-default  panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class=" fa fa-angle-down"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Generar compra</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Enviar mensaje</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Eliminar</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Ver perfil</a></li>
                    </ul>
                </div>
              
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>vendedor</h3>
                    <h5><span>Shared publicly</span> - <span>Jun 27, 2014</span> </h5>
                </div>
                <div class="panel-body">
                    <p>se venden telefonos por mayoria , espero sus consultas <3</p>
                    <center>
                        <img  class="img-responsive" src="<?php echo base_url();?>tools/images/product2.jpg" alt="">
                    </center>
                    
                </div>
                <div class="panel-footer">
                    <button type="button" class="[ btn btn-default ]"><span class="fa fa-trash-o"></span></button>
                    <button type="button" class="[ btn btn-default ]"  data-toggle="modal" data-target="#exampleModal" >
                        <span class="fa fa-credit-card-alt"></span>
                    </button>
                    <div class="input-placeholder">Escribe un comentario...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img class="img-circle" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea rows="4"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Comentar</button>
                        <button type="reset" class="[ btn btn-default ]">Cancelar</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
</div>








<!-- comienzo de modalidad -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enviar Propuesta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Cantidad</label>
            <input type="number" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Precio</label>
            <input type="number" class="form-control" id="recipient-name">
          
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Enviar propuesta</button>
      </div>
    </div>
  </div>
</div>




</div>

<script>
    $(function () {
   $('.panel-google-plus > .panel-footer > .input-placeholder, .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > button[type="reset"]').on('click', function(event) {
        var $panel = $(this).closest('.panel-google-plus');
            $comment = $panel.find('.panel-google-plus-comment');
            
        $comment.find('.btn:first-child').addClass('disabled');
        $comment.find('textarea').val('');
        
        $panel.toggleClass('panel-google-plus-show-comment');
        
        if ($panel.hasClass('panel-google-plus-show-comment')) {
            $comment.find('textarea').focus();
        }
   });
   $('.panel-google-plus-comment > .panel-google-plus-textarea > textarea').on('keyup', function(event) {
        var $comment = $(this).closest('.panel-google-plus-comment');
        
        $comment.find('button[type="submit"]').addClass('disabled');
        if ($(this).val().length >= 1) {
            $comment.find('button[type="submit"]').removeClass('disabled');
        }
   });
});
</script>





