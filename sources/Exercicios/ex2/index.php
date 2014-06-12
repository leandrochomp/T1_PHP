<?php
session_start();
include('../menu.php');

require_once("Conexao.class.php");
try{
	$registros = Conexao::executar("SELECT * FROM cds ORDER BY id ASC");
    $_SESSION["status"] = " ";
} catch(Exception $e){
	$_SESSION["status"] = $e->getMessage();
}
?>

<div class="container">
<p> Voce está no <strong> Exercício 02 </strong> </p>
	<br>
<span> Usando Mapeamento Objeto-Relacional do Zend Framework na tabela "cds" do banco "cdcol" criar um sistema que permita inserir, alterar, apagar e filtrar os registros do banco <span>

<h1>Coleção de CDs</h1>
  <p><?php print($_SESSION["status"]); ?></p>

  <table class="table" width="50%" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <th align="center" valign="middle"><div align="center">Título</div></th>
      <th align="center" valign="middle"><div align="center">Intérprete</div></th>
      <th align="center" valign="middle"><div align="center">Ano</div></th>
      <th colspan="2" align="center" valign="middle"><div align="center">Ações</div>      <div align="center"></div></th>
    </tr>
   <?php
   while($cd = mysql_fetch_object($registros)){
   ?>
    <tr>
      <td align="center" valign="middle"><div align="center"><?php echo $cd->titel;?></div></td>
      <td align="center" valign="middle"><div align="center"><?php echo $cd->interpret;?></div></td>
      <td align="center" valign="middle"><div align="center"><?php echo $cd->jahr;?></div></td>
      <td align="center" valign="middle"><div align="center"><a href="altera-cd.php?cd=<?php print($cd->id);?>">Atualizar</a></div></td>
      <td align="center" valign="middle"><div align="center"><a href="apaga-cd.php?cd=<?php print($cd->id);?>">Remover</a></div></td>
    </tr>
   <?php
   }
   ?>
    <tr>
      <td colspan="5" align="center" valign="middle"><div align="center"><a href="insere-cd.php">Inserir novo CD</a></div></td>
    </tr>
  </table>
    <?php 
      include('../lista.php'); 
    ?>
</div>
