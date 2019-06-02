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

	public function upload()
	{
		if ( ! empty($_FILES)) 
		{
			$config["upload_path"]   = $this->upload_path;
			$config["allowed_types"] = "gif|jpg|png";
			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload("file")) {
				echo "failed to upload file(s)";
			}
		}
	}

	public function remove()
	{
		$file = $this->input->post("file");
		if ($file && file_exists($this->upload_path . "/" . $file)) {
			unlink($this->upload_path . "/" . $file);
		}
	}

	public function list_files()
	{
		$this->load->helper("file");
		$files = get_filenames($this->upload_path);
		// we need name and size for dropzone mockfile
		foreach ($files as &$file) {
			$file = array(
				'name' => $file,
				'size' => filesize($this->upload_path . "/" . $file)
			);
		}

		header("Content-type: text/json");
		header("Content-type: application/json");
		echo json_encode($files);
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
			$this->layout->view('publicar');
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


	public function facturacion()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('facturacion');
	}

	public function reputacion()
	{
		$this->layout->setLayout('dashboard');
		$this->layout->view('reputacion');
	}



}
