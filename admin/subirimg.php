<?php


function subir_imagen($name){
	
	$tamano = $_FILES [ $name ][ 'size' ]; // Leemos el tama�o del fichero 
	$tama�o_max='1073741824'; // Tama�o maximo permitido 
	
	
	
	if( $tamano < $tama�o_max){ // Comprovamos el tama�o  
		$destino = '../usados/' ; // Carpeta donde se guardata 
		$sep=explode('image/',$_FILES[$name]['type']); // Separamos image/ 
		$tipo=$sep[1]; // Optenemos el tipo de imagen que es 
		
		if($tipo == 'gif' || $tipo == 'jpeg' || $tipo == 'png'){ // Si el tipo de imagen a subir es el mismo de los permitidos, segimos. Puedes agregar mas timagen 
			$nombre_img = date('Ymd-his').$name;
			
			move_uploaded_file ( $_FILES [ $name][ 'tmp_name' ], $destino . '/' .$nombre_img.'.'.$tipo);  // Subimos el archivo
			$nombre_img.='.'.$tipo;
			return $nombre_img;
		}
		return '';
	}
	return '';
}



	
?>