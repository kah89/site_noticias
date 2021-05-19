<?php $this->load->view('header'); ?>
<style>
	body{
		background: #DCDCDC;
	}
	img {
    width: 50%;
	border-radius: 10%;
	margin-left: 25%;
	}
	
	.titulo{
		text-align: center;
		margin-top: 10%;
	}
    #sobre{
        text-align: center;
    }
	#dados{
		margin-left: 10%;
	}
	#noticias{
		margin-top: 5%;
	}
</style>

<div class="container">
<div class="row">
            <div class="col-sm-5" id="sobre">
                <h2 class="titulo">Sobre mim</h2>
                <p>Me chamo Karina Souza, nasci em 189 na cidade de Guarulhos e moro atualmente em São Paulo para ter melhores oportunidades.</p>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
                <p>Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta.</p>
                <h2 class="titulo">Porque trabalho com web</h2>
                <p>Ainda que a programação exija uma boa capacidade de lógica e raciocínio, ela se baseia essencialmente em resolver problemas. E nada como uma mente criativa para encontrar soluções inovadoras ou até mesmo incomuns para as exigências de
                    implementação.
                </p>
                <p>Imagine que o gerente de projeto queira alternativas para apresentar para um cliente que tenha apenas uma loja física, mas que deseja iniciar as vendas nos canais digitais. O desenvolvedor web pode pensar em um e-commerce comum, mas também
                    oferecer a criação de um chatbot para conversar com os consumidores por texto ou voz.</p>
                <p>Para lidar com esses desafios e com as constantes mudanças das tecnologias (veremos esse fator com mais detalhes adiante), é preciso ter disposição para se superar a cada dia e se manter sempre atualizado. Por esse motivo, estudar é uma
                    das atividades mais pertinentes para o desenvolvedor web, assim como procurar frequentar eventos, workshops e palestras da área para se manter atualizado.</p>
            </div>
			<hr> 
            <div class="col-sm-5" id="dados">
                <h3 class="titulo">Formação profissional</h3>
                <img src="<?php echo base_url('assets/img/formatura.jpg') ?>" alt="">
                <ul>
                    <li>Tecnico em informática</li>
                    <li>Cursando analise e desenvolvimento do sistema</li>
                </ul>
                <h3 class="titulo">Áreas de conhecimento</h3>
                <ul>
                    <li>HTML e CSS</li>
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>Boostrap</li>
                    <li>Orientação ao objeto</li>
                    <li>Codeigniter</li>
                </ul>
            </div>
			<hr> 
    </div>
	</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-7" id="curiosidade">
                
                    <h2 class="titulo">Curiosidade</h2>
                    <p>Tudo começou em um projeto para o desenvolvimento de um site para um cliente, onde o prazo máximo era de dois meses. Devido ao curto tempo, tivemos que juntar toda a equipe em uma sala até o lançamento do produto. A equipe era formada
                        por: um designer, um dev-front-end, um gestor de projeto e um back-end.</p>
                    <p>Desde o momento em que comecei a prototipar algumas telas do site, a figura do front-end sempre esteve muito presente. A cada tela que pudesse ser muito fora da caixa, ele já argumentava para tentarmos achar alguma outra solução que
                        tivesse o mesmo objetivo, mas que fosse mais simples de implementar, e esse diálogo foi estendido até a última tela do wireframe.</p>
                
            </div>
            <div class="col-sm-5" id="noticias">
                <?php $this->load->view('noticias'); ?>
            </div>
        </div>
    </div> 

	<?php $this->load->view('footer'); ?>
