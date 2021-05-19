<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
  	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $titulo ?></title>

    <link href="http://fonts.gogleapi.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" type="text/css">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/estilo.css') ?>"> -->

	 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</head>

<style>
	#titulo{
		margin-left: 10%;
		font-size: 150%;
	}

	#navbarNavAltMarkup{
		margin-left: 40%;
	}
</style>

<body>
            <header>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
					<a class="navbar-brand" id="titulo" href="<?php echo base_url('setup'); ?>"><?php
					if($nome_site = $this->option->get_option('nome_site')):
						echo $nome_site;
					else:
						echo 'falta configurar';
					endif; 

					// $tituloPagina;

					// echo $this->load->model('option_model','option');
					// echo $this->option->get_option('nome_site');
					?>
					</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav mr-auto" style="width: 100%;">
								<a class="nav-link active" href="<?php echo base_url(); ?>">Ver sites<span class="sr-only">(current)</span></a>
								<a class="nav-link" href="<?php echo base_url('noticia'); ?>">Noticias</a>
								<a class="nav-link" href="<?php echo base_url('usuario'); ?>">Usuários</a>
								<a class="nav-link" href="<?php echo base_url('create'); ?>">Cadastro</a>
								<a class="nav-link" href="<?php echo base_url('setup'); ?>">Configs</a>
								<a class="nav-link" href="<?php echo base_url('setup/logout'); ?>">Sair</a>
							</div>
						</div>
				</nav>

            </header>
 
