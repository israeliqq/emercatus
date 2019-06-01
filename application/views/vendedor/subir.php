<?php

$archivo = $_FILES['file'];
templocation = $archivo['tmp_name'];
$name=$archivo["name"];

if (!templocation) {
	die('no ha seleccionado ningun archivo');
}
if (move_uploaded_file(templocation, "tools/images/uploads/$name")) {

	echo "archivo guardado correctamente";
}else{
	echo "error";
}


?>