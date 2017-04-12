<?php
class Elemento
{
//--------------------------------------------------------------------------------//
//--ATRIBUTOS
	private $id;
	private $nombre;
 	private $contacto;
 	private $negros12;
 	private $negros10;
 	private $blancos12;
 	private $blancos10;
 	private $mensaje;

//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--GETTERS Y SETTERS
 	public function GetId()
	{
		return $this->id;
	}
	public function GetNombre()
	{
		return $this->nombre;
	}
	public function GetContacto()
	{
		return $this->contacto;
	}
	public function GetNegros12()
	{
		return $this->negros12;
	}
	public function GetNegros10()
	{
		return $this->negros10;
	}
	public function GetBlancos12()
	{
		return $this->blancos12;
	}
	public function GetBlancos10()
	{
		return $this->blancos10;
	}
	public function GetMensaje()
	{
		return $this->mensaje;
	}
	
	public function SetId($valor)
	{
		$this->id = $valor;
	}
	public function SetNombre($valor)
	{
		$this->nombre = $valor;
	}
	public function SetContacto($valor)
	{
		$this->contacto = $valor;
	}
	public function SetNegros12($valor)
	{
		$this->negros12 = $valor;
	}
	public function SetNegros10($valor)
	{
		$this->negros10 = $valor;
	}
	public function SetBlancos12($valor)
	{
		$this->blancos12 = $valor;
	}
	public function SetBlancos10($valor)
	{
		$this->blancos10 = $valor;
	}
	public function SetMensaje($valor)
	{
		$this->mensaje = $valor;
	}
	
//--------------------------------------------------------------------------------//
//--CONSTRUCTOR
	public function __construct($id=NULL)
	{
		if($id != NULL){
			$obj = Elemento::TraerPorId($id);
			$this->id = $obj->id;
			$this->nombre = $obj->nombre;
			$this->contacto = $obj->contacto;
			$this->negros12 = $obj->negros12;
			$this->negros10 = $obj->negros10;
			$this->blancos12 = $obj->blancos12;
			$this->blancos10 = $obj->blancos10;
			$this->mensaje = $obj->mensaje;
		}
	}

//--------------------------------------------------------------------------------//
//--TOSTRING	
//--------------------------------------------------------------------------------//

//--------------------------------------------------------------------------------//
//--METODO DE CLASE

	public static function Guardar($campo1, $campo2, $campo3, $campo4, $campo5, $campo6, $campo7) {
		
		$unElemento = new Elemento();
		$unElemento->SetNombre($campo1);
		$unElemento->SetContacto($campo2);
		$unElemento->SetNegros12($campo3);
		$unElemento->SetNegros10($campo4);
		$unElemento->SetBlancos12($campo5);
		$unElemento->SetBlancos10($campo6);
		$unElemento->SetMensaje($campo7);
		
		$unElemento->Insertar();
	}

//--------------------------------------------------------------------------------//
//--METODOS DE INSTANCIA
	public function Insertar()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDato->RetornarConsulta("INSERT INTO pedidos (nombre, contacto, negros12, negros10, blancos12, blancos10, mensaje) values (:campo1, :campo2, :campo3, :campo4, :campo5, :campo6, :campo7)");
		$consulta->bindValue(':campo1',$this->nombre, PDO::PARAM_STR);
		$consulta->bindValue(':campo2',$this->contacto, PDO::PARAM_STR);
		$consulta->bindValue(':campo3',$this->negros12, PDO::PARAM_STR);
		$consulta->bindValue(':campo4',$this->negros10, PDO::PARAM_STR);
		$consulta->bindValue(':campo5',$this->blancos12, PDO::PARAM_STR);
		$consulta->bindValue(':campo6',$this->blancos10, PDO::PARAM_STR);
		$consulta->bindValue(':campo7',$this->mensaje, PDO::PARAM_STR);
		$consulta->execute();
		//return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}
//--------------------------------------------------------------------------------//
}
?>