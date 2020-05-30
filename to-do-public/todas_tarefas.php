<?php 

	$acao = 'recuperar';
	require 'tarefa_controller.php';
	
?>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

		<link rel="stylesheet" href="css/styles.css">
		<link rel="icon" href="img/logo.svg">

	</head>

	<body>
		<nav class="navbar navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					<span id="logo">App Lista Tarefas</span>
				</a>
			</div>
		</nav>

			<div class="container app">
				<div class="row">
					<div class="col-md-3 menu">
						<ul class="list-group">
							<li class="list-group-item "><a href="index.php">Tarefas pendentes</a></li>
							<li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
							<li class="list-group-item active"><a href="#">Todas tarefas</a></li>
						</ul>
					</div>

					<div class="col-md-9">
						<div class="container pagina">
							<div class="row">
								<div class="col">
									<h4>Todas as tarefas</h4>
									<hr>

									<?php foreach ($tarefas as $key => $tarefa) { ?>
										
										<div class="row mt-3 d-flex align-items-center tarefa">
											<div id="tarefa_<?=$tarefa->id?>"
											 class="col-sm-9 align-items-center">
											 <?=$tarefa->tarefa?> (<span class="id"><?=$tarefa->status?></span>)
											</div>
											
											<div class="col-sm-3 mt-2 d-flex justify-content-between">

												<i onclick="remover(<?=$tarefa->id?>)" class="fas fa-trash-alt fa-lg text-danger ml-auto"></i>

												<?php if($tarefa->status == 'pendente') { ?>
												<i class="fas fa-edit fa-lg text-info ml-2" onclick="editar(<?=$tarefa->id?>, '<?=$tarefa->tarefa?>')"></i>
												<i onclick="marcarRealizada(<?=$tarefa->id?>)" class="fas fa-check-square fa-lg text-success ml-2"></i>

												<?php } ?>

											</div>
										</div>

									<?php	} ?>

								</div> <!-- /col -->
							</div> <!-- row -->
						</div> <!-- /container pagina -->
					</div> <!-- /col-md-9 -->
				</div>
		</div>

		<!-- JS -->
		<script src="js/scripts.js"></script>

	</body>
</html>