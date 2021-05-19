<?php $this->load->view('header'); ?>
<style>
	body{
		background: #DCDCDC;
	}
	img {
    width: 50%;
	}
	.card{
		margin: 5% ;
	}
	#topo{
		margin-top: 50px;
        text-align: center;
	}
	#noticia{
		margin-top: 3%;
	}
	

</style>
<div class="container">
<div class="row">
			<div class="card mb-3 col-sm-5">
				<h5 class="card-title">O que eu faço?</h5>
			<img src="<?php echo base_url('assets/img/ideia.jpg') ?>" class="card-img-top" alt="...">
			<div class="card-body">
				<ul>
                    <li>Identidade visual</li>
                    <li>Layout para sites</li>
                    <li>Sites corporativos</li>
                    <li>Lojas virtuais</li>
                    <li>Email marketing</li>
                    <li>Marketing de conteúdo</li>
                    <li>Consultoria estratégica</li>
                </ul>
			</div>
			</div>
			

            <div class="col-sm-5"  id="topo">
                <h2>Identidade visual</h2>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
                <h2>Layout para sites</h2>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
                <h2>Sites corporativos</h2>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
                <h2>Lojas virtuais</h2>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
                <h2>Email marketing</h2>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
                <h2>Marketing de conteúdo</h2>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
                <h2>Consultoria estratégica</h2>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
            </div>
    </div>
	</div>
    <div class="container">
        <div class="row">
			<div class=" card col-sm-5">
			<div class="card-body">
			<h5 class="card-title">Como conquistar clientes na area digital</h5>
				<p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
			</div>
            </div>
        
        <div class="col-sm-5" id="noticia">
            <?php $this->load->view('noticias'); ?>
        </div>
    </div>
    </div> 
<?php $this->load->view('footer'); ?>
