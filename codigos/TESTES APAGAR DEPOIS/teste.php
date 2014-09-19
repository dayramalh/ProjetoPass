<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>Cadastro</title>
		<link href="css/theme.css" rel="stylesheet">

		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>

		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">CFO</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class="container" role="main">
			<!-- Main jumbotron for a primary marketing message or call to action -->
			<div class="jumbotron">
				<h1>Hello, world!</h1>
				<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
				<p><a href="#" class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>
			</div>
			
			<div class="page-header"></div>
			<div class="row">
				<div class="col-sm-2">
					<div class="input-group">
						<span class="input-group-addon">nº</span>
						<input type="text" readonly class="form-control" placeholder="123123">
					</div>
					<br>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-home"></span>  Propriedade</span>
						<input type="text" class="form-control" placeholder="Digite o nome da propriedade">
						
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> Proprietário</span>
						<input type="text" class="form-control" placeholder="Digite o nome do proprietário">
					</div>
					<br>
				</div><!-- /.col-sm-4 -->	
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">Comunidade</span>
						<input type="text" class="form-control" placeholder="Digite o nome da comunidade">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon">Município</span>
						<input type="text" class="form-control" placeholder="Digite o nome do município">
					</div>
					<br>
				</div>
			</div>
			
			<div class="page-header">
				<h2 class="text-center">Ficha individual de cadastro de fêmeas ovina</h2>
			</div>	
			<div class="row">
				<div class="col-sm-3">
					<div class="input-group">
						<span class="input-group-addon">Cordão</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
				<div class="col-sm-7">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> Dono do animal</span>
						<input type="text" class="form-control" placeholder="Digite o nome do proprietário">
					</div>
					<br>
				</div>	
				<div class="col-sm-2">
					<div class="input-group">
						<span class="input-group-addon">Data</span>
						<input type="text" class="form-control" placeholder="dd/mm/aaaa">
					</div>
					<br>
				</div>
				<div class="col-sm-5">
					<div class="input-group">
						<span class="input-group-addon">Forma de aquisição</span>
						<input type="text" class="form-control" placeholder="Digite a forma de aquisição">
					</div>
					<br>
				</div>
				<div class="col-sm-7">
					<div class="input-group">
						<span class="input-group-addon">Dono anterior</span>
						<input type="text" class="form-control" placeholder="Nome do dono anterior">
					</div>
					<br>
				</div>
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">Nome do animal</span>
						<input type="text" class="form-control" placeholder="Digite o nome do animal">
					</div>
					<br>
				</div>
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">Raça do animal</span>
						<input type="text" class="form-control" placeholder="Digite a raça do animal">
					</div>
					<br>
				</div>
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">Grau de sangue</span>
						<input type="text" class="form-control" placeholder="Digite o grau de sangue">
					</div>
					<br>
				</div>
				<div class="col-sm-2">
					<div class="input-group">
						<span class="input-group-addon">DN</span>
						<input type="text" class="form-control" placeholder="dd/mm/aaaa">
					</div>
					<br>
				</div>
				<div class="col-sm-2">
					<div class="input-group">
						<span class="input-group-addon">PN</span>
						<input type="text" class="form-control" placeholder="kg">
					</div>
					<br>
				</div>
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">Pelagem</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">Estado fisiológico</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">Tipo de Nascimento</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
				<div class="col-sm-4">
					<div class="input-group">
						<span class="input-group-addon">Nascimento difícil?</span>
						<select class="form-control">
							<option></option>
							<option value="1">Sim</option>
							<option value="2">Não</option>
						</select>
					</div>
					<br>
				</div>
			</div>
			
			
			<div class="page-header">
				<h3>Prováveis defeitos</h3>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<div class="input-group">
						<span class="input-group-addon">Tetas</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
				<div class="col-sm-3">
					<div class="input-group">
						<span class="input-group-addon">Dentição</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
				<div class="col-sm-3">
					<div class="input-group">
						<span class="input-group-addon">Aprumos</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
				<div class="col-sm-3">
					<div class="input-group">
						<span class="input-group-addon">Outro</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
			</div>
			
			<div class="page-header">
				<h3>Descendência</h3>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">Nome do pai</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon">Nome do avô</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="input-group">
						<span class="input-group-addon">Nome da avó</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon">Nome da mãe</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon">Nome do avô</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<div class="input-group">
						<span class="input-group-addon">Nome da avó</span>
						<input type="text" class="form-control" placeholder="">
					</div>
					<br>
				</div>
			</div>
			
		</div><!-- /container -->
		
		
		

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>