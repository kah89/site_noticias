<?php $this->load->view('painel/header'); ?>

<style>
body{
		background: #DCDCDC;
		
}
.container{
	margin-top: 5%;
	width: 50%;
}
label{
	text-align: left;
	width: 40%;
}
input{
	text-align: center;
	width: 60%;
}
.btn{
 width: 20%;
 margin-left: 80%;
}
footer p{
		margin-top: -10%;
	}

</style>
<div class="container">
<h2><?php echo $h2; ?></h2>
<!-- <form method='post' >	 -->
  	<div class="form-group">
			<?php
			if($msg = get_msg()):
				echo '<div class="msg-box">' .$msg. '</div>';
			endif;
		
			?>
			<!-- <label for="login">Nome para login:</label>
			<input type="text" class="form-control" id="login" placeholder="Insira seu Login" value="<?= set_value('login') ?>"> -->
			
			<?php
		    echo form_open();
			echo form_label('Nome para login:', 'login');
			echo form_input('login', set_value('login'), array('autofocus' => 'autofocus', "form-control"));
			echo form_label('Email do administrador do site:', 'email');
			echo form_input('email', set_value('email'), array('class' => 'autofocus', "form-control"));
			echo form_label('Senha (deixe em branco para não alterar):', 'senha');
			echo form_password('senha');
			echo form_label('Repita a senha:', 'senha2');
			echo form_password('senha2');
			echo form_label('Nome do site:', 'site');
			echo form_input('site', set_value('site'), array('class' =>'autofocus', "form-control"));
			echo form_submit('enviar', 'Salvar dados', array ('class' => 'btn btn-dark'));
			echo form_close();
			?>
	</div>
</div> 
<!-- </form> -->


			

<?php $this->load->view('painel/footer'); ?>
