<!doctype html>
<html>
    <head>
        
        <title>Upload all files on button click - Dropzone and PHP</title>
        <link href="<?php echo base_url("tools/dropzone/dist/min/dropzone.min.css");?>" rel="stylesheet" type="text/css">
        
    </head>
    <body >
        <div class="container" >
            <div class='content'>
            <form action="<?php echo base_url("Vendedor/upload");?>" class="dropzone" >
                
            </form>  
            </div> 

            <input type="button" id='uploadfiles' value='Upload Files' >
        </div>

        <!-- Script -->
        <script src="<?php echo base_url("tools/js/jquery-3.3.1.min.js");?>" type="text/javascript"></script>
        <script src="<?php echo base_url("tools/dropzone/dist/min/dropzone.min.js");?>" type="text/javascript"></script>
        <script type='text/javascript'>
      
        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone(".dropzone", { 
            autoProcessQueue: false,
			acceptedFiles: ".jpg,.jpeg,.JPG,.JPEG,.png,.PNG",
            dictRemoveFile:"Eliminar",
			dictDefaultMessage:"<h1 style='font-family: «Helvetica Neue», Helvetica, Arial, sans-serif;'>Agrege hasta 2 imagenes de sus productos</h1>",
			addRemoveLinks: true,
			maxFiles: 2,
            parallelUploads: 10 // Number of files process at a time (default 2)
        });
       
        $('#uploadfiles').click(function(){
            myDropzone.processQueue();
        });
        </script>
    </body>
</html>
