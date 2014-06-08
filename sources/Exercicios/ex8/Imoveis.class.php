<?php 

class Imovel{
	private $referencia;
	private $tipo;
	private $quartos;
	private $bairro;
	private $valor;

	public static $lista = array();

	public static function carregaLista($arquivo){
		$linhas = file($arquivo);
		foreach ($linhas as $indice => $imoveis) {
			if($indice==0) continue;
			$imoveis = explode(";",$imoveis);
			Imovel::$lista[] = new Imovel($imoveis[0],$imoveis[1],$imoveis[2],$imoveis[3],$imoveis[4]);
		}
	}

	public function salva($arquivo){
		$id = fopen($arquivo,"a+");
		fwrite($id,"$this->referencia;$this->tipo;$this->quartos;$this->bairro;$this->valor");
		fclose($id);
	}

	function __construct($referencia,$tipo,$quartos,$bairro,$valor){
		$this->referencia = $referencia;
		$this->tipo = $tipo;
		$this->quartos = $quartos;
		$this->bairro = $bairro;
		$this->valor = $valor;
	}

	function __get($atributo){
		return $this->$atributo;
	}

	function __set($atr, $valor){
		$this->$atr = $valor;
	}

}
?>