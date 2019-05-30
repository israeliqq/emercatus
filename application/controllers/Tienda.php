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


	public function login()
	{
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
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fas fa-times'></i></a>
					  <strong>Error!</strong> Existen campos en blanco
					</div>";
			//Validacion de Correo  Existente
			}elseif($row > 0){
				$mensaje = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fas fa-times'></i></a>
					  <strong>Error!</strong> El correo ingresado ya está registrado
					</div>";
				echo "<script>console.log( 'SE ENCONTRO CORREO' );</script>";
			//Validacion de Igualdad de Contraseñas
			}elseif($_POST['pass1'] != $_POST['pass2']){
				$mensaje = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fas fa-times'></i></a>
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
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fas fa-times'></i></a>
					  <strong>Error!</strong> Registro Completado con Exito
					</div>";
					redirect('/Tienda/index/');
				}else{
					$mensaje = "
					<div class='alert alert-danger alert-dismissible'>
					  <a href='#' class='close' data-dismiss='alert' aria-label='close'><i class='fas fa-times'></i></a>
					  <strong>Error!</strong> Error al registrarse
					</div>";
				}
				
			}

			
			//session_destroy(); 
			//Iniciar Sesion
			//Validar si el correo fue validado
			

			$this->layout->view('login',compact('mensaje','usuario'));
		}else{
			$this->layout->view('login');
		}
	}


}
