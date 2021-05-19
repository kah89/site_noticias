<?php $this->load->view('header'); ?>
<style>
	body{
		background: #DCDCDC;
		margin-top: 10%;
	}
	img {
    width: 50%;
}

#card1{
	margin-top: 20px;
	margin-left:50px;
}

#card2{
	margin-top: 20px;
	margin-left: 40px;
}

#card3{
	margin-top: 10px;
	width: 1150px;
	margin-left:50px;
}

#card4{
	margin-top: 12px;
	margin-left:70px;
	width: 950px;

}


</style>
<div class="container">
	<section>	
	    <div class="row">
        	<div class="card col-sm-3 " id="card1" >
			<div class="card-body">
				<h5 class="card-title">Clientes satisfeitos</h5>
					<ul class="card-text">
                    <li>
                        <a href="<?php echo base_url('clientes'); ?>">Nome da Empresa 1</a></li>
                    <li><a href="<?php echo base_url('clientes'); ?>">Nome da Empresa 2</a></li>
                    <li>
                        <a href="<?php echo base_url('clientes'); ?>">Nome da Empresa 3</a></li>
                    <li>
                        <a href="<?php echo base_url('clientes'); ?>">Nome da Empresa 4</a></li>
                    <li>
                        <a href="<?php echo base_url('clientes'); ?>">Nome da Empresa 5</a></li>
                    <li>
                        <a href="<?php echo base_url('clientes'); ?>">Nome da Empresa 6</a></li>
                    <li>
                        <a href="<?php echo base_url('clientes'); ?>">Nome da Empresa 7</a></li>
                </ul>
				<a href="<?php echo base_url('clientes'); ?>" class="btn btn-dark">Ver todos &raquo;</a>
			</div>
            </div>

	


			<div class="card mb-3 col-sm-6" id="card2" >
				<h5 class="card-title">Ultimo trabalho: <em>Empresa ABC</em></h5>
					<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. Desmoralizado
						pelos encantos do prazer, percebe que a dor não resulta em prazer algum. Está tão cego pelo desejo que não pode prever quem não cumprirá seu dever por fraqueza de vontade..</p>
				</div>
			</div>
    </div>
	</section>
        <div class="row">
            <div class=" card col-sm-5" id="card3" >
					<div class="card-body">
				<h5 class="card-title">Como um site pode ajudar sua empresa?</h5>
				<p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
                    <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
                    <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
				</div>
            </div>
            <div class="col-sm-4" id="card4">
                <?php $this->load->view('noticias', $noticias);?>
            </div> 
        </div>
 </div>
	<?php $this->load->view('footer'); ?>
