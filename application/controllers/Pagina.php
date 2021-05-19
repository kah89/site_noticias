<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper('url', 'form');
		$this->load->model('option_model', 'option');
		$this->load->model('noticias_model', 'noticias');
	}


	public function index(){		
		$dados['titulo'] = 'Codeigniter Desenvolvimento Web';
		$dados['noticias'] = $this->noticias->get(2);
		$this->load->view('home', $dados);
	}

	public function clientes(){
		$dados['titulo'] = 'Clientes - Codeigniter Desenvolvimento Web';
		$dados['noticias'] = $this->noticias->get(2);
		$this->load->view('clientes', $dados);
	}

	public function servicos(){
		$dados['titulo'] = 'O que eu faço - Codeigniter Desenvolvimento Web';
		$dados['noticias'] = $this->noticias->get(2);
		$this->load->view('servicos', $dados);
	}

	public function sobre(){
		$dados['titulo'] = 'Sobre mim - Codeigniter Desenvolvimento Web';
		$dados['noticias'] = $this->noticias->get(2);
		$this->load->view('sobre', $dados);
	}

	public function contato(){
		$dados['noticias'] = $this->noticias->get(2);
		$this->load->helper('form', 'url');
		$this->load->library(array('form_validation', 'email'));

		//regras de validação do formulário
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('assunto', 'Assunto', 'trim|required');
		$this->form_validation->set_rules('mensagem', 'Mensagem', 'trim|required');

		

		if($this->form_validation->run() == FALSE):
			
			$dados['formerror'] = validation_errors();
		else:
			$dados_form = $this->input->post();
			$this->email->from($dados_form['email'], $dados_form['nome']);
			$this->email->to('email');
			$this->email->subject($dados_form['assunto']);
			$this->email->message($dados_form['mensagem']);

			if($this->email->send()):
				$dados['formerror'] = 'Email enviado com sucesso';
			else:
				$dados['formerror'] ='Erro ao enviar email, tente novamente.';
			endif;	
		endif;

		$dados['titulo'] = 'Fale comigo - Codeigniter Desenvolvimento Web';
		$this->load->view('contato', $dados);
	}

	public function post(){
		$dados['noticias'] = $this->noticias->get(3);
		if(($id = $this->uri->segment(2)) > 0):
			if($noticia = $this->noticias->get_single($id)):
				$dados['titulo'] = to_html($noticia->titulo).' - Codeigniter';
				$dados['not_titulo'] = to_html($noticia->titulo);
				$dados['not_conteudo'] = to_html($noticia->conteudo);
				$dados['not_imagem'] = $noticia->imagem;
			else:
				$dados['titulo'] = 'Página não encontrada - Codeigniter';
				$dados['not_titulo'] = 'Noticícia não encontrada'; 
				$dados['not_conteudo'] = '<p>Nenhuma noticía foi encontrada com base nos parâmetros fornecidos</p>';
				$dados['not_imagem'] = '';
			endif;
		else:
			redirect(base_url(), 'refresh');
		endif;
		$this->load->view('post', $dados);
	}
}
