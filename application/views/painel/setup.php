<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $titulo ?></title>
    <link href="http://fonts.gogleapi.com/css?family=Roboto:400,100,300,500,700" rel="stylesheet" type="text/css">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<style>
body{
	
	background: #DCDCDC;
}
.container{
	border: 3%;
	margin-top: 10%;
	margin-left: 30%;
	background: #808080;
	padding: 20px;
	width: 30%;
	color: white;
}
label{
	text-align: left;
	width: 30%; 
}
input{
	text-align: center;
	width: 70%;
}
.btn{
 width: 20%;
 margin-left: 55%;
 text-align: center;
}
.row{
	margin-left: 15%;
}

</style>

<body>

	<div class="container">
		<div class="row">
		<div class="col-sm-3">&nbsp;</div>
		<div class="col-sm-6">
			<h2><?php echo $h2; ?></h2>
			<?php
			if($msg = get_msg()):
				echo '<div class="msg-box">' .$msg. '</div>';
			endif;
			echo 'form_open'();
			echo 'form_label'('Nome para login:', 'login');
			echo 'form_input'('login', set_value('login'), array('autofocus' => 'autofocus'));
			echo 'form_label'('Email do administrador do site:' ,'email');
			echo 'form_input'('email', set_value('email'));
			echo 'form_label'('Senha:', 'senha');
			echo 'form_password'('senha', set_value('senha'));
			echo 'form_label'('Repita a senha:', 'senha2');
			echo 'form_password'('senha2', set_value('senha2'));
			echo form_submit('enviar', 'Salvar', array ('class' => 'btn btn-dark'));
			echo form_close();
			?>
		</div>
		<div class="col-sm-3">&nbsp;</div>
		</div>
	</div>

</body>
</html>
