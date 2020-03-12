<?php

class Usuarios{
    private $_idUser;
    private $_nomUser;
    private $_Apellido;
    private $_FechNaci;
    private $_UserMail;
    private $_UserDirec;
    private $_Genero;
    private $_Ocupacion;

    // Constructor
	public function __construct($_idUser, $_nomUser, $_Apellido,  
	$_FechNaci, $_UserMail, $_UserDirec, $_Genero, $_Ocupacion = 0){
		$this->idUser = $_idUser;
		$this->nomUser = $_nomUser;
		$this->Apellido = $_Apellido;
		$this->FechNaci = $_FechNaci;
		$this->UserMail = $_UserMail;
		$this->UserDirec = $_UserDirec;
		$this->Genero = $_Genero;
		$this->Ocupacion = $_Ocupacion;
	}
	
	//Métodos
	public function getidUser(){
		return $this->idUser;
	}
	public function setidUser($_idUser){
		$this->idUser = $_idUser;
	}

	public function getnomUser(){
		return $this->nomUser;
	}
	public function setnomUser($_nomUser){
		$this->nomUser = $_nomUser;
	}

	public function getApellido(){
		return $this->Apellido;
	}
	public function setApellido($_Apellido){
		$this->Apellido = $_Apellido;
	}

	public function getFechNaci(){
		return $this->FechNaci;
	}
	public function setFechNaci($_FechNaci){
		$this->FechNaci = $_FechNaci;
	}

	public function getUserMail(){
		return $this->UserMail;
	}
	public function setUserMail($_UserMail){
		$this->UserMail = $_UserMail;
	}

	public function getUserDirec(){
		return $this->UserDirec;
	}
	public function setUserDirec($_UserDirec){
		$this->UserDirec = $_UserDirec;
	}
}

?>