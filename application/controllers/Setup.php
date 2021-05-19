<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Setup extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('option_model','option');
	}

	public function index(){
		if($this->option->get_option('setup_executado') == 1):
			//setup ok, mostrar tela para editar dados de setup
		    redirect('setup/alterar', 'refresh');
		else:
			//não instalado, mostrar tela de setup
			redirect('setup/instalar','refresh');
		endif;
	}

	

	public function instalar(){
		if($this->option->get_option('setup_executado') == 1):
			//setup ok, mostrar tela para editar dados de setup
		    redirect('setup/alterar', 'refresh');
		endif;

		//regras de validação formulário
		$this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('senha2', 'REPITA A SENHA', 'trim|required|min_length[6]|matches[senha]');

		//verificar validação
		if($this->form_validation->run() == FALSE): 
			if(validation_errors()):
				set_msg(validation_errors());
			endif;
		else:
			$dados_form = $this->input->post();
			$this->option->update_option('user_login', $dados_form['login']);
			$this->option->update_option('user_email', $dados_form['email']);
			$this->option->update_option('user_pass', password_hash($dados_form['senha'], PASSWORD_DEFAULT));
			$inserido = $this->option->update_option('setup_executado', 1);
			if($inserido):
				set_msg('<p>Sistema instalado, use os dados cadastrado para acessar.</p>');
				redirect('setup/login', 'refresh');
			endif;
		endif;

		//carrega view
		$dados['titulo'] = 'Codeigniter - Setup do sistema';
		$dados['h2'] = 'Setup do sistema';
		// $dados['tituloPagina'] = $this->option->get_option('nome_site');
		$this->load->view('painel/setup', $dados);
	}

	public function login(){
		if($this->option->get_option('setup_executado') != 1):
			//setup não esta ok, mostrar tela para instalar o sistema
		    redirect('setup/instalar', 'refresh');
		endif;

		//regras de validação
		$this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[6]');

		//verificar validação
		if($this->form_validation->run() == FALSE):
			if(validation_errors()):
				set_msg(validation_errors());
			endif;
		else:
			$dados_form = $this->input->post();
			if($this->option->get_option('user_login') == $dados_form['login']):
				//usuário existente
				if(password_verify($dados_form['senha'], $this->option->get_option('user_pass'))):
					//senha ok, fazer login
					$this->session->set_userdata('logged', TRUE);
					$this->session->set_userdata('user_login', $dados_form['login']);
					$this->session->set_userdata('user_email', $this->option->get_option('user_email'));
				//fazer redirect para home do painel
				redirect('setup/alterar', 'refresh');
				else:
					//senha incorreta
					set_msg('<p>Senha incorreta!</p>');
				endif;	
			else:
			//usuário não existe
			set_msg('<p>Usuário inexistente</p>');
			redirect('setup/instalar', 'refresh');
			endif;
		endif;

		//carrega a view
		$dados['titulo'] = 'Codeigniter - Acesso ao sistema';
		$dados['h2'] = 'Acessar o painel';
		// $dados['tituloPagina'] = $this->option->get_option('nome_site');
		$this->load->view('painel/login', $dados);
	}

	public function alterar(){
		//verificar o login do usuário
		verificar_login();

		
		//regras de validação formulário
		$this->form_validation->set_rules('login', 'NOME', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'EMAIL', 'trim|required|valid_email');
		$this->form_validation->set_rules('senha', 'SENHA', 'trim|min_length[6]');
		$this->form_validation->set_rules('site', 'NOME DO SITE', 'trim|required');
		if(isset($_POST['senha']) && $_POST['senha']!= ''):
			$this->form_validation->set_rules('senha2', 'SENHA2', 'trim|required|min_length[6]|matches[senha]');
		endif;

	//verificar validação
		if($this->form_validation->run() == FALSE):
			// var_dump($this->form_validation->run()); 
			if(validation_errors()):
				set_msg(validation_errors()); 
			endif;
		else:
			
			$dados_form = $this->input->post();
			// var_dump($dados_form);exit;
			$this->option->update_option('user_login', $dados_form['login']);
			$this->option->update_option('user_email', $dados_form['email']);
			$this->option->update_option('nome_site', $dados_form['site']);
			if(isset($dados_form['senha']) && $dados_form['senha'] != ''):
				$this->option->update_option('user_pass', password_hash($dados_form['senha'], PASSWORD_DEFAULT));
			endif; 
			set_msg('<p>Dados alterados com sucesso!</p>');
		endif;

		//carregar a view
		$_POST['login'] = $this->option->get_option('user_login');
		$_POST['email'] = $this->option->get_option('user_email');
		$_POST['site'] = $this->option->get_option('nome_site');
		$dados['titulo'] = 'Codeigniter -  Configuração  do sistema';

		// $dados['tituloPagina'] = $this->option->get_option('nome_site');

		$dados['h2'] = 'Alterar configuração básica';
		$this->load->view('painel/config', $dados);
	}

	public function logout(){
		//destroir os dados de sessão
		$this->session->unset_userdata('logged');
		$this->session->unset_userdata('user_login');
		$this->session->unset_userdata('user_email');
		set_msg('<p>Você saiu do sistema!</p>');
		redirect('setup/login', 'refresh');
	}
}
