<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tienda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->layout->setLayout('main');
		date_default_timezone_set("Chile/Continental");
	}

	public function index()
	{
		$this->layout->view('index');
	}


	public function cerrar()
	{
		session_destroy(); 
		redirect('/Tienda/index/');
	}
	
	public function recuperar()
	{ 
		$this->layout->view('recuperar');
	}
	
	public function terminos()
	{ 
		$this->layout->view('terminosycondiciones');
	}
	
		public function politicas()
	{ 
		$this->layout->view('politicasdeprivacidad');
	}


   public function recuperarcorreo()

   {

   	$correo = $_POST['txt_correo'];
   	$cont = $this->usuario_model->getCorreoUnico($correo);
	
		if (con>=1) {

		    #correo enviado
		}

		else

		{

			alert('el correo no  ha sido enviado');

		}



   }


	public function login()
	{

         if (!empty($_POST))
         {
         	$name = $_POST['txt_correo'];
         	$password2 = $_POST['txt_pass'];
         	$captcha = $_POST['g-recaptcha-response'];


         	$secret = '6LfI96kUAAAAAC02D44-LzrfYVp9YEXOZ3e1wwbB';


         	if (! $captcha) 
         	{
         		echo "por favor verifica el captcha";
         	}

         	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");


         	var_dump($response);

         	$arr= json_decode($response,true);

         	if ($arr['success'])
         	{
         		echo "exitooo";
         	}else
         	{
         		echo "error de captcha";
         	}
	
         }






		/* BOTON REGISTRARSE */
		if (isset($_POST['btn_registrase'])){
			$row = $this->usuario_model->getCorreoUnico($_POST['email']);
			$mensaje = "";
			
			
			
			$usuario = array(
				'id' 			=> '',
				'perfil'		=> '',
				'nombre' 		=> $_POST['nombre'],
				'apellidos' 	=> $_POST['apellido'],
				'correo' 		=> $_POST['email'],
				'pass'			=> $_POST['pass1'],
				'pais' 			=> $_POST['pais']);
			
			//Validacion de Vacios
			if($_POST['nombre']=="" or $_POST['apellido']=="" or $_POST['email']=="" or  $_POST['pass1']==""){
				$mensaje = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-times'></i></a>
					  <strong>Error!</strong> Existen campos en blanco
					</div>";
			//Validacion de Correo  Existente
			}elseif($row > 0){
				$mensaje = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-times'></i></a>
					  <strong>Error!</strong> El correo ingresado ya está registrado
					</div>";
				echo "<script>console.log( 'SE ENCONTRO CORREO' );</script>";
			//Validacion de Igualdad de Contraseñas
			}elseif($_POST['pass1'] != $_POST['pass2']){
				$mensaje = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-times'></i></a>
					  <strong>Error!</strong> Las contraseñas ingresadas no coinciden
					</div>";
			}else{
				//Registro del usuario 
				$bandera = $this->usuario_model->InsertUsuario($usuario);
				
				if($bandera){
					session_start(); 
					//autologin
					$mensaje = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-times'></i></a>
					  <strong>Error!</strong> Registro Completado con Exito
					</div>";
					redirect('/Tienda/index/');
				}else{
					$mensaje = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-times'></i></a>
					  <strong>Error!</strong> Error al registrarse
					</div>";
				}
				
			}

			
			//session_destroy(); 
			//Iniciar Sesion
			//Validar si el correo fue validado
			

			$this->layout->view('login',compact('mensaje','usuario'));
		

		/* BOTON LOGIN */
		}elseif(isset($_POST['btn_login'])){
			
			$mensajeLogin = "";
			
			$usuario = array(
				'correo' 		=> $_POST['txt_correo'],
				'pass'			=> $_POST['txt_pass']);

			//Validacion de Vacios
			if(!($_POST['txt_correo']=="" or $_POST['txt_pass']=="")){
				
				$row = $this->usuario_model->getUsuario($usuario);		
				if(empty($row)){
					//Mensaje al no encontrar coicidencias en la BD
					$mensajeLogin = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-times'></i></a>
					  <strong>Error!</strong> Usuario Incorrectos
					</div>";
					echo "<script>console.log( 'NO SE ENCONTRO CORREOS' );</script>";

				}else{
					//Datos Correctos para la validación e inicio de sesion
					session_start(); 
					$_SESSION["usuario"] = $row->nombre;
					redirect('/Tienda/index/');
				}
			}else{
				//Mensaje para Registros Vacios
				$mensajeLogin = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fa fa-times'></i></a>
					  <strong>Error!</strong> Existen campos en blanco
					</div>";
					
					//pasar datos por session
			}

			$this->layout->view('login',compact('mensajeLogin'));
			
			
		}else{
			$this->layout->view('login');
		}
	
	}
	
	
	
	
	
	
		


}
