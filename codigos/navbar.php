		<div id="navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="gerenciamento.php">PASS</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="gerenciamento.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						
						
						<?php if($_SESSION['email']!='bruno@email.com'){//Diferenciar o nível de usuario?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Atendimento Usuário<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?tipo=consulta&acao=nova">Solicitação de Agendamento</a></li>
								<li><a href="?tipo=consulta&acao=listar">Consultas</a></li>
								<li class="divider"></li>
								
							</ul>
						</li>
						<?php } ?>
						
						<?php if($_SESSION['email']=='bruno@email.com'){//Diferenciar o nível de usuario?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuário <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?tipo=usuario&acao=novo">Novo</a></li>
								<li><a href="?tipo=usuario&acao=listar">Listar</a></li>
								<li class="divider"></li>
					
							</ul>
						</li>
					
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Horários<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?tipo=horario&acao=listar">Listar Horários</a></li>
								<li class="divider"></li>
								
							</ul>
						</li>	
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Atendimento <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="?tipo=ficha&acao=nova">Solicitação de Agendamento</a></li>
								<li><a href="?tipo=ficha&acao=listar">Solicitação de Consultas</a></li>
								<li class="divider"></li>
								
							</ul>
						</li>
						<?php } ?>
						
						
						<li><a href="index.php">Sair <span class="glyphicon glyphicon-off"></span></a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>