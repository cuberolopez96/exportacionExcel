<?php 
/**
* 
*/
class Videojuegos 
{
	private $nombre;
	private $fechasalida;
	private $empresa;
	private $descripcion;
	private $plataforma;
	private $pdo;
	public function setNombre($nombre){
		$this->nombre = $nombre;
		return $this;
	}
	public function setFechaSalida($fechaSalida){
		$this->fechasalida=$fechaSalida;
		return $this;
	}
	public function setEmpresa($empresa){
		$this->empresa=$empresa;
		return $this;
	}
	public function setDescripcion($descripcion){
		$this->descripcion=$descripcion;
		return $this;
	}
	public function setPlataforma($plataforma){
		$this->plataforma=$plataforma;
		return $this;
	}
	public function save(){
		$nombre = $this->nombre;
		$plataforma = $this->plataforma;
		$fechasalida = $this->fechasalida;
		$descripcion = $this->descripcion;
		$empresa =$this->empresa;

		$this->pdo->exec("INSERT INTO videojuego(nombre,fechasalida,descripcion,empresa,plataforma) VALUES('$nombre','$fechasalida','$descripcion','$empresa','$plataforma')");
	}
	public function getVideojuegos(){
		$pdo = ConnectDB::getInstance();
		
		$pre = $pdo->prepare("SELECT * FROM videojuego");
		$pre->execute();
		return $pre->fetchAll();
	}

	public function getVideojuegosById($id){
		
		$videojuegos = self::getVideojuegos();
		foreach ($videojuegos as $key => $videojuego) {
			if ($videojuego['id']== $id) {
				return $videouego;
			}
		}
	}



	function __construct($nombre,$fechasalida,$empresa,$descripcion,$plataforma)
	{
		$this->pdo=ConnectDB::getInstance(); 
		$this->setNombre($nombre)->setPlataforma($plataforma)->setFechaSalida($fechasalida)->setEmpresa($empresa)->setDescripcion($descripcion)->save();
	}
}
 ?>