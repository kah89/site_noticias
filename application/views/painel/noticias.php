<?php $this->load->view('painel/header'); ?>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({selector:'textarea'});</script>

<style>
body{
	background: #DCDCDC;	
}
.noticia{
margin-top: 5%;
}
.list{
	border: #DCDCDC;
	background-color: #DCDCDC;
}
.btn{
margin-top:2%;
}

.tox .tox-statusbar {
    background-color: #fff;
    border-top: #fff;
    color: #fff;
	}
	.tox .tox-statusbar__path {
		display: none;
	}
	.tox .tox-statusbar__text-container {
		display: none;
	}



</style>
	
<div class="container">
<div class="row noticia">
		<div class="col-sm-2">
		<ul class="list-group">
                            <li  class="list-group-item list">
                                <a href="<?php echo base_url('noticia/cadastrar'); ?>">INSERIR</a></li>
               				<li  class="list-group-item list">
                                <a href="<?php echo base_url('noticia/listar'); ?>">LISTAR</a></li>
                        </ul>
		</div>
		<div class="col-sm-10 a">
			<h2><?php echo $h2; ?></h2>
			<?php
			if($msg = get_msg()):
				echo '<div class="msg-box">' .$msg. '</div>';
			endif;
			switch($tela):
				case 'Listar':
					if(isset($noticia) && sizeof($noticia) > 0):
					?>
					<table>
					<thead>
					<th  align="left">Título</th>
					<th  align="right">Ações</th>
					</thead>
					<tbody>	
					<?php
					foreach ($noticia as $linha):
						?>
						<tr>
						<td class="left"><?php echo $linha->titulo; ?></td>
						<td align="right" class="right"><?php echo anchor('noticia/editar/'.$linha->id, 'Editar');?> |<?php echo anchor('noticia/excluir/'.$linha->id, 'Excluir');?> | <?php echo anchor('post/'.$linha->id, 'ver', array('target'=> '_blank') );?></td>
						</tr>
						<?php endforeach;
						?>
					</tbody>
					</table>

					<?php
					else:
						echo '<div class="msg-box"><p>Nenhuma notícia cadastrada!</p></div>';
					endif;
					break;
				case 'Cadastrar' :
						echo 'form_open_multipart'();
						echo 'form_label'('Título:', 'titulo');
						echo 'form_input'('titulo', set_value('titulo'), array('class' => "form-control"));
						echo 'form_label'('Conteúdo:', 'conteudo');
						echo 'form_textarea'('conteudo', to_html(set_value('conteudo')), array('class' => "form-control", 'style' => 'max-height:200px; overflow: auto;'));
						echo 'form_label'('Imagem da notícia (thumbnail:)', 'imagem');
						echo 'form_upload'('imagem');
						echo form_submit('enviar', 'Salvar notícias', array ('class' => 'btn btn-dark'));
						echo form_close();
					break; 
				case 'Editar':
						echo 'form_open_multipart'();
						echo 'form_label'('Título:', 'titulo');
						echo 'form_input'('titulo', set_value('titulo', to_html($noticia->titulo)), array('class' => "form-control"));
						echo 'form_label'('Conteúdo:', 'conteudo');
						echo 'form_textarea'('conteudo', to_html(set_value('conteudo', to_html($noticia->conteudo))), array('class' => "form-control", 'style' => 'max-height:200px; overflow: auto;'));
						echo form_label('Imagem da noticícia (thumbnail):', 'imagem');
						echo form_upload('imagem');
						echo '<p><small>Imagem atual:</small><br /><img src="'.base_url('uploads/'.$noticia->imagem).'" class="thumb-edicao" /></p>';
						echo form_submit('enviar', 'Salvar notícias', array ('class' => 'btn btn-dark'));
						echo form_close();
					break;
				case 'Excluir':
						echo 'form_open_multipart'();
						echo 'form_label'('Título:', 'titulo');
						echo 'form_input'('titulo', set_value('titulo', to_html($noticia->titulo)));
						echo 'form_label'('Conteúdo:', 'conteudo');
						echo 'form_textarea'('conteudo', to_html(set_value('conteudo', to_html($noticia->conteudo))), array('class' => 'editorhtml'));
						echo '<p><small>Imagem:</small><br /><img src="'.base_url('uploads/'.$noticia->imagem).'" class="thumb-edicao" /></p>';
						echo form_submit('enviar', 'Excluir notícias', array ('class' => 'btn btn-dark'));
						echo form_close();
					break;
			endswitch;



			?>
		</div>

</div>
</div>


<?php $this->load->view('painel/footer'); ?>
