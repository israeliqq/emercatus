<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <br>
        <div class=" col-xs-12 col-sm-offset-0 col-sm-5 ">
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
                    <button type="button" class="[ btn btn-default ]">
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