<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<br><br>
<div class="container">

 <div class="well span8 offset2">

        <div class="row-fluid user-row">
            <div class="span1">
                    <img class="img-circle"
                     src="<?php echo base_url();?>tools/images/user.png"
                     alt="User Pic">
            </div>

            <div class="span10">
                <strong>Vendedor</strong><br>
                <span class="text-muted">Se venden Equipos por mayoria</span>
            </div>

            <div class="span1 dropdown-user" data-for=".cyruxx">
                <i class="icon-chevron-down text-muted"></i>
            </div>

        </div>


        <div class="row-fluid user-infos cyruxx">
            <div class="span10 offset1">
                <div class="panel panel-primary">
                      <div class="panel-heading">
                         <h3 class="panel-title">Más Información</h3>
                     </div>

                    <div class="panel-body">
                        <div class="row-fluid">
                            <div class="span3">
                                <img class="img-circle"
                                     src="<?php echo base_url();?>tools/images/user.png"
                                     alt="User Pic">
                            </div>
                            <div class="span6">
                                <strong>Vendedor</strong><br>
                                <div> 
                                    <input type="text" placeholder="Precio" type="number"><br>
                                    <strong>Comprador</strong><br>
                                    <input type="text" placeholder="Cantidad" type="number">

                                </div>
                                <br>
                                <table class="table table-condensed table-responsive table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Cantidad</td>
                                        <td>Precio Unitario</td>
                                        <td>Total</td>
                                    </tr>
                                    <tr>
                                        <td>1000</td>
                                        <td>$600.000</td>
                                        <td>$60.000.000</td>
                                    </tr>
                                    
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="panel-footer">
                        <button class="btn  btn-primary" type="button"
                                data-toggle="tooltip"
                                data-original-title="Send message to user"><i class="fa fa-commenting"> Enviar mensaje</i></button>
                        
                    </div>
                </div>
            </div>
        </div>


      

</div>
<script>
    $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="icon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="icon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>