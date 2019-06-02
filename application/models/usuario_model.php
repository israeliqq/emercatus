<?php  
class usuario_model extends CI_Model
{
	public function __construct() { parent::__construct(); }

	public function getCorreoUnico($correo)
	{
		$this->db->from('usuario')->where('correo', $correo); 
		return $this->db->count_all_results();  
	}

    public function InsertUsuario($usuario)
	{
		return $this->db->insert('usuario', $usuario);
	}


	public function getUsuario($usuario)
	{
		$sql = $this->db->query("SELECT * FROM usuario where correo = '".$usuario['correo']."' and pass = '".$usuario['pass']."' LIMIT 1;");
		return $sql->row();
	}






	public function UpdateProducto($ritmo, $fecha, $hora, $estado, $id)
	{
		$sql = "UPDATE batalla SET data = '".$ritmo."', fecha = '".$fecha."', hora = '".$hora."', estado = '".$estado."' WHERE id = '".$id."';";
		$this->db->query($sql);
	}

	public function DeleteProducto( $id)
	{
		$sql = "DELETE FROM batalla WHERE id = '".$id."';";
		$this->db->query($sql);
	}




	public function getRitmoAlerta($fecha,$hora)
	{
		$query = $this->db->query("SELECT * FROM batalla WHERE fecha = '".$fecha."' AND hora = '".$hora."'");
		return $query->row();
	}


	public function getFrecuencias()
	{
		$sql = "SELECT * FROM frecuencias;";
		$query = $this->db->query($sql);
		return $query->row();
	}


 	public function getEnlaces()
	{
		$sql = "SELECT * FROM enlaces;";
		return $this->db->query($sql)->result();
	}


	public function UpdateFrecuencias($frecuencias=array())
	{
		$this->db->where('id', '1');
		$this->db->update('frecuencias', $frecuencias); 
	}

	public function UpdateEnlaces($enlaces=array(), $id)
	{
		$this->db->where('id', $id);
		$this->db->update('enlaces', $enlaces); 
	}
}
?>