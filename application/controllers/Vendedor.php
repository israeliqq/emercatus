<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendedor extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('main');
		date_default_timezone_set("Chile/Continental");
	}


	public function index()
	{
		$this->layout->view('resumen');
	}
	
	public function prueba()
	{
		$this->layout->setLayout('blanco');
		$this->layout->view('prueba');
	}



	public function upload()
	{
		$target_dir = base_url('upload');;

		// Upload file
		$target_file = $target_dir . basename($_FILES["file"]["name"]);

		$msg = "";
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
		  $msg = "Successfully uploaded";
		  
		echo "<script>console.log( 'SE SUBIERON CORRECTAMENTE' );</script>";
		  
		 //Hay que crear 2 metodos, uno  para subir los datos del producto y otro en hilo para subir las imagenes
		}else{ 
		  $msg = "Error al cargar las imagenes";
		  echo "<script>console.log( 'NO SE SUBIERON LAS IMAGENES' );</script>";
		 
		}
		echo $msg;
		exit;

	}






   









	public function publicar()
	{
		if (isset($_POST['btnSubirProducto'])){

			$producto = array(	
				'nombre' 			=> $_POST['titulo'],
				'descripcion' 		=> $_POST['descripcion'],
				'precio' 			=> $_POST['precio'],
				'stock' 			=> $_POST['stock'],
				'subcategoria_id' 	=> $_POST['categoria'],
				'proveedor_id'		=> $_POST['proveedor']
			);	
			$bandera = $this->producto_model->InsertProducto($producto);
			echo '<h1>'.$bandera.'impreso despues del insert</h1>';
			$this->layout->view(',misproductos');
		}else{
			$categorias = $this->producto_model->getCategoria();
			$this->layout->view('publicar', compact('categorias'));
		}
	}

	public function orden_compra($prov)
	{
		$this->layout->setLayout('dashboard');

		$data['prov']		= $prov;
		$datos['producto']	= $this->producto_model->getOC($prov);

		$this->layout->view('listar_productos',compact('datos'));

		$this->layout->view('mostrar_oc',compact('datos'));
		//$this->load->view('tienda/index');
	}

	public function actualizar_datos()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('actualizar_datos');
		//$this->load->view('tienda/index');
	}

	public function actualizar_producto()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('actualizar_producto');
		

	}

	public function misproductos()
	{
		//$data['prov']		= $prov;
		//$datos['producto']	= $this->producto_model->getProductoProveedor($prov);

		//$this->layout->view('misproductos',compact('datos'));
		$this->layout->view('misproductos');;
	}

	public function resumen()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('resumen');
		//$this->load->view('tienda/index');
	}




}
