<?php

session_start();

if($_GET["id"]!=''){
	include 'conectabd.php';
	$comando = "select * from agendamento where id = ".$_GET["id"]."";
	$resultado = mysql_query($comando);
	$atributo=mysql_fetch_array($resultado);
}

?>
<div class="container" role="main">
	<div class="panel panel-default">
		<div class="panel-body">
			<form name="cadastrohorario" action="salvahorario.php" method="post">
				<div class="well">Cadastro de Horário de Atendimento</div>
				<div id="erro"></div>
				

				<div class="page-header">
					<h2 class="text-center">Cadastro de Horário de Atendimento</h2>
				</div>
				
				<div class="row">
				
					
					<input name="id" id="id" value="<?php echo $atributo['id']; ?>" type="hidden" /> 
				
					<div class="col-sm-8">
						<div id="divnome" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> Nome</span>
							<input value="<?php echo $atributo['nome']; ?>" id="nome" name="nome" type="text" class="form-control" placeholder="digite o nome">
						</div>
						<br>
						<div id="divmatricula" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>  Matrícula</span>
							<input value="<?php echo $atributo['matricula']; ?>" id="matricula" name="matricula" type="text" class="form-control" placeholder="digite a matrícula">
						</div>
						<br>
						<div id="divturno" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span>  Turma</span>
							<input value="<?php echo $atributo['turma']; ?>" id="turma" name="turma" type="text" class="form-control" placeholder="digite o turno">
						</div>
						<br>
						<div id="divservico" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-th-list"></span>  Serviço a Solicitar</span>
							<input value="<?php echo $atributo['servico']; ?>" id="servico" name="servico" type="text" class="form-control" placeholder="digite o serviço a solicitar">
						</div>
						<br>
						<div id="divservico" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>  Data do Atendimento</span>
							<input value="<?php echo $atributo['data']; ?>" id="data" name="data" type="text" class="form-control" placeholder="digite a data do atendimento">
						</div>
						
						<br>
						<div id="divservico" class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span>  Horário do Atendimento</span>
							<input value="<?php echo $atributo['horario']; ?>" id="horario" name="horario" type="text" class="form-control" placeholder="digite o horário do atendimento">
						</div>
						
					</div>
					
					
				</div>
				<hr>
				<div class="row" style="text-align:center;">
					<button type="button" class="btn btn-success btn-lg" onclick="salvar()"> Salvar <span class="glyphicon glyphicon-ok"></span></button>
					<button type="reset" class="btn btn-info btn-lg"> Limpar tudo <span class="glyphicon glyphicon-remove"></span></button>
					
				</div>
			</form>

		</div>
		
		<div class="panel-footer">Panel footer</div>
		
	</div>
</div>


<script>
    
    function salvar(){
		document.forms["cadastrohorario"].submit();
    }
</script>