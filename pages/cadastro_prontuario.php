<?php 
session_start();
include('conexao.php');
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$cpf 				= $_POST ["cpf"];
$nome				= $_POST ["nome"];	//atribuição do campo "nome" vindo do formulário para variavel	
$sexo				= $_POST ["sexo"];	//atribuição do campo "email" vindo do formulário para variavel
$dataNasc			= $_POST ["dataNasc"];	//atribuição do campo "ddd" vindo do formulário para variavel
$atendimento		= $_POST ["atendimento"];	//atribuição do campo "telefone" vindo do formulário para variavel
$leito 				= $_POST ["leito"];	//atribuição do campo "endereco" vindo do formulário para variavel
$dataEntrada		= $_POST ["dataEntrada"];	//atribuição do campo "cidade" vindo do formulário para variavel
$alergicoMed		= $_POST ["alergicoMed"];	//atribuição do campo "estado" vindo do formulário para variavel
$descAlergia 		= $_POST ["descAlergia"];	//atribuição do campo "bairro" vindo do formulário para variavel
$alergiaMED			= $_POST ["alergiaMED"];	//atribuição do campo "pais" vindo do formulário para variavel
$descMedicamento 	= $_POST ["descMedicamento"];	//atribuição do campo "endereco" vindo do formulário para variavel
$diagnostico		= $_POST ["diagnostico"];	//atribuição do campo "cidade" vindo do formulário para variavel
$exames				= $_POST ["exames"];	//atribuição do campo "estado" vindo do formulário para variavel
$tratamento			= $_POST ["tratamento"];

/*
$login	= $_POST ["login"];	//atribuição do campo "login" vindo do formulário para variavel
$senha	= $_POST ["senha"];	//atribuição do campo "senha" vindo do formulário para variavel
*/

//Gravando no banco de dados !
/*
//conectando com o localhost - mysql
$conexao = mysql_connect("localhost","root");
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db("clientes",$conexao);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysql_error());
*/
//echo " '$fixo'</p>";

$query = "INSERT INTO prontuario (CPF,NOME,EMAIL,SEXO,DATANASC,ATENDIMENTO,LEITO,dataENTRADA,ALERGICO,descALERGIA,ALERGIAMED,descMEDICAMENTO,DIAGNOSTICO,EXAMES,TRATAMENTO)
VALUES ('$cpf','$nome','$sexo','$dataNasc','$atendimento','$leito','$dataEntrada','$alergicoMed','$descAlergia','$alergiaMED','$descMedicamento','$exames','$tratamento')";



mysqli_query($conexao,$query); //Realiza a consulta
 
if(mysqli_affected_rows($conexao) == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
	
?>
	<script>
	alert('O cadastro foi efetuado com sucesso!');
	location.href="prontuario.php";
	</script>
<?php

   /* echo "<p>Cadastro feito com sucesso</p>";
    echo '<a href="cadastro.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro*/
} else {
?>
	<script>
	alert('Erro, não possível inserir no banco de dados');
	location.href="prontuario.php";
	</script>
  <?php  
}
//echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
?> 