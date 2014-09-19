<?php

include 'conectabd.php';

session_start();
$id = $_POST['id'];
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$turno = $_POST['turno'];
$turma = $_POST['turma'];
$servico = $_POST['servico'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$confirma = $_POST['confirma'];




if($_POST['id']==""){
	$comando = "INSERT INTO agendamento (nome, matricula, turno, turma, servico, data, horario)
	VALUES ('".$nome."', '".$matricula."', '".$turno."', '".$turma."', '".$servico."', '".$data."','".$horario."')";
}else{
	$comando = "UPDATE agendamento SET nome='".$nome."', matricula='".$matricula."', turno='".$turno."', turma='".$turma."', servico='".$servico."', data='".$data."', horario='".$horario."', confirma='".$confirma."' WHERE id=".$id."";
}

if(mysql_query($comando)){
	header('Location:gerenciamento.php?mensagem=sucesso');
}else{
	header('Location:gerenciamento.php?mensagem=erro');
}

?>