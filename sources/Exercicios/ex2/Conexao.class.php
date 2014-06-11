<?php
// Desabilitando mensagens de erros do PHP
error_reporting(0);

class Conexao{

	private static $servidor = "localhost";
	private static $usuario = "u382085297_data";
	private static $senha = "123456";
	private static $banco = "u382085297_data";

	static function executar($sql){

		// Conectar ao SGBD e armazenar id da conexao
		$id_conexao = mysql_connect(
				self::$servidor,
				self::$usuario,
				self::$senha);
		if(!$id_conexao) {
			throw new Exception("Falha ao conectar ao SGBD. Problema: [". mysql_error() ."]");
		}

		// Selecionar o banco do SGBD
		if(!mysql_select_db(self::$banco, $id_conexao)){
			throw new Exception("Falha ao selecionar o banco. Problema: [" . mysql_error() . "]");
		}

		// Enviar instrução SQL ao banco selecionado
		$resultado = mysql_query($sql);
		if(! $resultado){
			throw new Exception("Falha ao enviar instrução SQL ao banco. Problema: [" . mysql_error() . "]");
		}

		// Fechando a conexao
		mysql_close($id_conexao);

		// Retornando o resultado para quem chamou o método
		return $resultado;
	}

}
?>