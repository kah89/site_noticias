<style>
	.card{
		padding: 5px;
		background: #A9A9A9;
		
	}
	h3{
		text-align: center;
	}
	.list{
		background: #D3D3D3;
	}
	
</style>
	<div class="container" >
	 <div class="row">
		 <div class="col-sm-12">
					<div class="card">
					<h3>Últimas notícias</h3>
						<ul class="list-group list-group-flush">
							<?php 
							if($noticias > 0 ):
								foreach($noticias as $linha):
									?>
									<li class="list-group-item list">
									<img src="<?php echo base_url('upload/'.$linha->imagem); ?>" alt=""/>
									<h4><?php echo to_html($linha->titulo); ?></h4>
									<p><?php echo resumo_post($linha->conteudo); ?>... <a href="<?php echo base_url('post/'.$linha->id); ?>">Leia mais &raquo;</a> </p>
									</li>	
									<?php
								endforeach;
							else:
								echo '<p>Nenhuma notícia cadastrada!</p>';
							endif;
							?> 
						</ul>
					</div>
		 </div>
	 </div>
	 </div>

	

	
				
