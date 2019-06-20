<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<!------ Include the above in your HEAD tag ---------->
<body >
    <br>
<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-offset-0 col-sm-3">

                <div class="mail-box ">

                   <aside class="sm-side">
                      <div class="user-head" style="background-color:#e75f11">
                          <a class="inbox-avatar" href="javascript:;">
                          <img  width="64" hieght="60" src="<?php echo base_url();?>tools/images/user.png">
                          </a>
                          <div class="user-name">
                              <h5><a href="#">Brahyant</a></h5>
                              <span><a href="#" style="color: white">Usuario@example.com</a></span>
                          </div>
                          <a class="mail-dropdown pull-right" href="javascript:;" style="background-color:#e75f11">
                              <i class="fa fa-chevron-down" style="color: white"></i>
                          </a>
                      </div>
                      <div class="inbox-body">
                          <a href="#myModal" data-toggle="modal"  title="Compose" class="btn btn-compose" style="background-color:#e75f11">
                              Estadisticas
                          </a>
                          <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                          <center><h4 class="modal-title">Producto mas comprado</h4></center>
                                      </div>
                                      <div class="modal-body">
                                        <div class="panel panel-default"  >
                                          <div class="panel-body">
                                             <div id="grafica" class="col-xs-12"></div>
                                            <script>
                                             $(function($){
                                                 $('#grafica').highcharts({
                                                     title:{text:''},
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
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
                      </div>
                      <ul class="inbox-nav inbox-divider">
                          <li class="active">
                              <a href="#"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>

                          </li>
                          <li>
                              <a href="#"><i class="fa fa-envelope-o"></i>Propuestas</a>
                          </li>
                          <li>
                              <a href="#"><i class="fa fa-bookmark-o"></i>Guardado</a>
                          </li>
                          <li>
                              <a href="#"><i class=" fa fa-external-link"></i> Compartidos <span class="label label-info pull-right">30</span></a>
                          </li>
                          <li>
                              <a href="#"><i class=" fa fa-trash-o"></i>Productos Borrados</a>
                          </li>
                      </ul>
                      <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
                          <li> <h4>Herramientas</h4> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-danger"></i> Work </a> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-success"></i> Design </a> </li>
                          <li> <a href="#"> <i class=" fa fa-sign-blank text-info "></i> Family </a>
                          </li><li> <a href="#"> <i class=" fa fa-sign-blank text-warning "></i> Friends </a>
                          </li><li> <a href="#"> <i class=" fa fa-sign-blank text-primary "></i> Office </a>
                          </li>
                      </ul>
                     

                  </aside>

               
              </div>

              <br>


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
                 <img  class="img-responsive" src="<?php echo base_url();?>tools/images/product12.jpg" alt="">
                 </center>
                                                    
                </div>
                                               

                 <div class="panel-footer">
                <button type="button" class="[ btn btn-default ]"><span class="fa fa-trash-o"></span></button>
                <button type="button" class="[ btn btn-default ]"  data-toggle="modal" data-target="#exampleModal" >
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
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
         </div><!-- termino de casilla-->

             <div class=" col-xs-12 col-sm-offset-0 col-sm-4">
               <div class="blockquote-box blockquote-info clearfix">
                <div class="square pull-left">
                    <span class="fa fa-info"></span>
                </div>
                <h4>
                    Information</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante.
                </p>
            </div>
            <div class="blockquote-box blockquote-warning clearfix">
                <div class="square pull-left">
                    <span class="fa fa-exclamation-triangle"></span>
                </div>
                <h4>
                    Warning</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante.
                </p>
            </div>
            <div class="blockquote-box blockquote-danger clearfix">
                <div class="square pull-left">
                    <span class="fa fa-exclamation-circle"></span>
                </div>
                <h4>
                    Danger</h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                    ante.
                </p>
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
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
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
               
                                

                <div class=" col-xs-12 col-sm-offset-0 col-sm-3">
                                              
                </div>
                
                                        

                                       
                 <div class=" col-xs-12 col-sm-offset-0 col-sm-3">
                                              
                 </div>

             </div>
         </div><!-- termino de casilla-->


    </div><!-- termino del row-->
 </div><!-- termino del container-->

                                        







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






    
</body>
