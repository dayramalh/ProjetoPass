<?php

include 'conectabd.php';

session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$turma = $_POST['turma'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$horario = $_POST['horario'];


if($_POST['id']==""){
	$comando = "INSERT INTO agendamento (nome, matricula, turma, servico, data, horario )
	VALUES ('".$nome."', '".$matricula."', '".$turma."', '".$servico."', '".$data."', '".$horario."')";
}else{
	$comando = "UPDATE agendamento SET nome='".$nome."', matricula='".$matricula."', turno='".$turno."', servico='".$servico."', data='".$data."', '".$horario."' WHERE id=".$id."";
}

if(mysql_query($comando)){
	header('Location:gerenciamento.php?mensagem=sucesso');
}else{
	header('Location:gerenciamento.php?mensagem=erro');
}

?>