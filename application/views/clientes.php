<?php $this->load->view('header'); ?>
<style>
	body{
		background: #DCDCDC;
	}
	#painelnot  img {
    	width: 100%;
	}
  
	h2{
		text-align: center;
		margin-top: 5%;
	}
  #card0{
    width: 450px;
    margin-top: 5%;
  }
  
  #card2{
    margin-top: 5%;
    width: 300px;
  }
  #card3{
    margin-top: 2%;
    margin-left: 65px;
  }
  #card4{
    margin-top: 2%;
    margin-left: -4px;
  }

  .row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    }

</style>
<div class="container">
	   <h2>Veja quem já contratou nosso serviços</h2>
<div class="row" id="painelnot">
  <div class="col-sm-6" id="card0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 1</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
  <div class="col-sm-6" id="card0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 2</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
   <div class="col-sm-4" id="card2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 3</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
   <div class="col-sm-4" id="card2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 4</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
   <div class="col-sm-4" id="card2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 5</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
    <div class="col-sm-4" id="card2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 6</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
    <div class="col-sm-4" id="card2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 7</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
  </div>
    <div class="col-sm-4" id="card2">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nome da empresa 8</h5>
		<img src="<?php echo base_url('assets/img/thumb-grande.jpg') ?>" alt="">
        <p class="card-text">Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. </p>
      </div>
    </div>
    
  </div>
</div>


    
  <div class="row">
    <div class="card col-sm-6" id="card3">
      <div class="card-body"  >
        <h5 class="card-title">Opinião de quem contratou</h5>
		      <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
          <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
          <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. </p>
      </div>
    </div>
  
            
         <div class="col-sm-5" id="card4">
            <?php $this->load->view('noticias', $noticias); ?>
         </div>
         </div>
   </div>
<?php $this->load->view('footer'); ?>
