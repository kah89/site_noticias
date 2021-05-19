<?php $this->load->view('painel/header'); ?>
<style>
body{
	background: #DCDCDC;	
}
.usuario{
margin-top: 5%;
}
.list{
	border: #DCDCDC;
	background-color: #DCDCDC;
}
.btn{
margin-top:5%;
}

</style>
<div class="container">
<div class="row usuario">
		<div class="col-sm-2">
		<ul class="list-group">
                            <li class="list-group-item list">
                                <a href="<?php echo base_url('usuario/cadastrar'); ?>">INSERIR</a></li>
               				<li class="list-group-item list">
                                <a href="<?php echo base_url('usuario/listar'); ?>">LISTAR</a></li>
                        </ul>
		</div>
		<div class="col-sm-10">
			<h2><?php echo $h2; ?></h2>
			<?php
			if($msg = get_msg()):
				echo '<div class="msg-box">' .$msg. '</div>';
			endif;
			switch($tela):
				case 'Listar':
					if(isset($usuario) && sizeof($usuario) > 0):
					?>
					<table>
					<thead class="col-sm-5">
					<th align="left">Nome</th>
					<th align="right">Ações</th>
					</thead>
					<tbody class="col-sm-5">	
					<?php
					foreach ($usuario as $linha):
						?>
						<tr>
						<td><?php echo $linha->nome; ?></td>
						<td align="right" class="acoes"><?php echo anchor('usuario/editar/'.$linha->id, 'Editar');?> |<?php echo anchor('usuario/excluir/'.$linha->id, 'Excluir');?></td>
						</tr>
						<?php endforeach;
						?>
					</tbody>
					</table>

					<?php
					else:
						echo '<div class="msg-box"><p>Nenhum usuário cadastrado!</p></div>';
					endif;
					break;
				case 'Cadastrar':
						echo 'form_open_multipart'();
						echo 'form_label'('Nome:', 'nome');
						echo 'form_input'('nome', set_value('nome'), array('class' => "form-control"));
						echo 'form_label'('Email:', 'email');
						echo 'form_input'('email', to_html(set_value('email')), array('class' => "form-control"));
						echo 'form_label'('Senha:', 'senha');
						echo 'form_password'('senha', set_value('senha'), array('class' => "form-control"));
						echo form_submit('enviar', 'Salvar usuários', array ('class' => 'btn btn-dark'));
						echo form_close();
					break;
				case 'Editar':
						echo 'form_open_multipart'();
						echo 'form_label'('Nome:', 'nome');
						echo 'form_input'('nome', set_value('nome', to_html($usuario->nome)), array('class' => "form-control"));
						echo 'form_label'('Email:', 'email');
						echo 'form_input'('email',to_html( set_value('email', to_html($usuario->email))), array('class' => "form-control"));
						echo form_submit('enviar', 'Salvar usuarios', array ('class' => 'btn btn-dark'));
						echo form_close();
					break;
				case 'Excluir':
						echo 'form_open_multipart'();
						echo 'form_label'('Nome:', 'nome');
						echo 'form_input'('nome', set_value('nome', to_html($usuario->nome)), array('class' => "form-control"));
						echo 'form_label'('Email:', 'email');
						echo 'form_input'('email', set_value('email', to_html($usuario->email)), array('class' => "form-control"));
						echo form_submit('enviar', 'Excluir usuario', array ('class' => 'btn btn-dark'));
						echo form_close();
					break;
			endswitch;



			?>
		</div>

</div>
</div>


<?php $this->load->view('painel/footer'); ?>
