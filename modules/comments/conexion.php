<?php

	class Conexion{

		private $cnx;

		public function conectar(){
			require 'DatosConexion.php';
			$this->cnx = new Mysqli($host, $user, $pass, $db);
		}

		public function ejecutar($sentencia){
			$respuesta = $this->cnx->query($sentencia);
			return $respuesta;
		}

		public function cerrar(){
			$this->cnx->close();
		}
	}

?>