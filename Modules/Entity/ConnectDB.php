<?php 
/**
* 
*/
class ConnectDB
{
	private static $instancia;
	private $pdo;
	private function __construct()
	{
		 $this->pdo = new PDO(DRIVER.":host=".HOST.";dbname=".DBNAME,USERNAME,PASSWORD); 
	}
	public function getInstance(){
		$myclass = __CLASS__;
		//si no existe la iguala a una instancia de la clase;
		if(!isset($instancia)){
			self::$instancia = new $myclass;
			
		}
		return self::$instancia;
	}
	public function prepare($consulta){
		return $this->pdo->prepare($consulta);
	}
	public function exec($consulta){
		return $this->pdo->exec($consulta);
	}
}
 ?>