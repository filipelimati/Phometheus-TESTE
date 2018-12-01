<?php
session_start();
//Verificação de sessão
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
	header('location: index.php');
	exit();
}
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);	

$query = "select idusuario,usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

if($row == 1) {
	$_SESSION['usuario'] = $usuario;
	header('Location: index.html');
	exit();

}else{
	$_SESSION['msg'] = "Usuário e senha incorretos!";
	header("Location: index.php");	
}
?>