<?php
namespace Modelo;

class Database{

	private $database;

	public function __construct($container)
	{
		$this->database = $container->database;
	}

	

	public function noticias(){
		$arr = $this->database->select('news',['ID', 'TITULO','ARTICULO','ESTADO'],['ESTADO'=>0]);
		return $arr;
	}
	
		public function noticiass(){
		$arr = $this->database->select('news',['ID', 'TITULO','ARTICULO','ESTADO'],['ESTADO'=>1]);
		return $arr;
	}



}