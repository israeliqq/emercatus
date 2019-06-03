<?php  
class producto_model extends CI_Model
{
	public function __construct() { parent::__construct(); }

	public function getProductoTienda()
	{
		$sql = "SELECT DISTINCT producto.proveedor_id, producto.id, producto.nombre, producto.descripcion, producto.precio, producto.stock, imagen_producto.ruta FROM `producto` INNER JOIN imagen_producto ON producto.id = imagen_producto.producto_id";
		return $this->db->query($sql)->result();
	}


	public function getCategoria()
	{
		$sql = "SELECT * FROM `subcategoria` inner JOIN categoria on subcategoria.fk_categoria = categoria.id_categoria";
		return $this->db->query($sql)->result();
	}


	public function getProductoProveedor($prov)
	{
		$sql = "SELECT * FROM producto WHERE proveedor_id = '".$prov."'";
		return $this->db->query($sql)->result();
		
	}

	public function getOrdenCompra($prov)
	{
		$sql = "SELECT * FROM orden_compra WHERE proveedor_id = '".$prov."'";
		return $this->db->query($sql)->result();
		
	}

    public function InsertProducto($producto=array())
	{
		$this->db->insert('producto', $producto);
		//$sql = "INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `subcategoria_id`, `proveedor_id`) VALUES (NULL, '".$titulo."', '".$descripcion."', '".$precio."', '".$stock."', '".$categoria."', '".$proveedor."');";
		//$this->db->query($sql);
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



	public function getRitmoID($id)
	{
		$sql = $this->db->query("SELECT * FROM batalla where id = '".$id."';");
		$row = $sql->row();
		return $row;
	}

	public function UpdateEnlaces($enlaces=array(), $id)
	{
		$this->db->where('id', $id);
		$this->db->update('enlaces', $enlaces); 
	}
}
?>