


<?php 
	//crud de categorias que relacionamos con el producto
	class categorias{

		public function agregaCategoria($datos){//agregamos nuevas categorias en la tabla
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into categorias(id_usuario,
										nombreCategoria,
										fechaCaptura)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]')";

			return mysqli_query($conexion,$sql);
		}

		public function actualizaCategoria($datos){//actualizamos las categorias 
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE categorias set nombreCategoria='$datos[1]'
								where id_categoria='$datos[0]'";
			echo mysqli_query($conexion,$sql);
		}

		public function eliminaCategoria($idcategoria){//eliminamos categorias
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from categorias 
					where id_categoria='$idcategoria'";
			return mysqli_query($conexion,$sql);
		}

	}

 ?>