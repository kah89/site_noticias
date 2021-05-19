<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

	 function __construct(){
		parent :: __construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('option_model', 'option');
		$this->load->model('usuario_model');
	

	}

	public function index(){
		redirect('usuario/listar', 'refresh');
	
	}





	public function listar(){
		//verificar se usuário esta logado
		verificar_login();

		//carregar a view
		$dados['titulo'] = 'Codeigniter - Listagem de usuários';
		// $dados['tituloPagina'] = $this->option->get_option('nome_site');
		$dados['h2'] = 'Listagem de usuários';
		$dados['tela'] = 'Listar';
		$dados['usuario'] = $this->usuario_model->get();
		$this->load->view('painel/usuarios', $dados);
	}





public function cadastrar(){
		//verificar se usuário esta logado
		verificar_login();

		//regras d validação
		$this->form_validation->set_rules('nome','NOME', 'trim|required');
		$this->form_validation->set_rules('email','EMAIL', 'trim|required');
		$this->form_validation->set_rules('senha', 'SENHA', 'trim|required|min_length[6]');

		//verificar a validação
		if($this->form_validation->run() == FALSE):
			if('validation_errors'()):
				set_msg('validation_errors'());
			endif;

		else:
			$dados_form = $this->input->post();

			$dados_insert['nome'] = to_bd($dados_form['nome']);
			$dados_insert['email'] = to_bd($dados_form['email']);
				
		
			//salvar no banco de dados
			if($id = $this->usuario_model->salvar($dados_insert)):
				set_msg('<p>usuario cadastrado com sucesso!</p>');
				redirect('usuario/editar/'.$id, 'refresh');
			else:
				set_msg('<p>Erro! Usuário não cadastrado.</p>');
			endif;
		
		endif;


		//carregar a view
		$dados['titulo'] = 'Codeigniter - Cadastro de usuário';
		// $dados['tituloPagina'] = $this->option->get_option('nome_site');
		$dados['h2'] = 'Cadastro de usuário';
		$dados['tela'] = 'Cadastrar';
		$this->load->view('painel/usuarios', $dados);
	}






	public function excluir(){
	//verificar se o usuário est logado
	verificar_login();

	//verifica se foi passado o id da notícia
	$id = $this->uri->segment(3);
	if($id > 0):
		//id informado, continuar com exclusão
		if($usuario = $this->usuario_model->get_single($id)):
		$dados['usuario'] = $usuario;
		else:
			set_msg('<p>Usuário inexistente! Escolha um usuário para excluir!</p>');
			redirect('usuario/listar', 'refresh');
		endif;
	else:
		set_msg('<p>Você deve escolher um usuário para excluir!</p>');
			redirect('usuario/listar', 'refresh');
	endif;

	//regras de validação
	$this->form_validation->set_rules('enviar', 'ENVIAR', 'trim|required');

	//verificar a validação
		if($this->form_validation->run() == FALSE):
			if('validation_errors'()):
				set_msg('validation_errors'());
			endif;
		else:
			if($this->usuario_model->excluir($id)):
				set_msg('<p>Usuário excluído com sucesso!</p>');
				redirect('usuario/listar', 'refresh');
			else:
				set_msg('<p>Erro! Nenhuma usuário foi excluído!</p>');
			endif;
		endif;

	//carregar a view
		$dados['titulo'] = 'Codeigniter - Exclusão de usuário';
		// $dados['tituloPagina'] = $this->option->get_option('nome_site');
		$dados['h2'] = 'Exclusão de usuário';
		$dados['tela'] = 'Excluir';
		$this->load->view('painel/usuarios', $dados);
	}	






	public function editar(){
	//verificar se o usuário est logado
	verificar_login();

	//verifica se foi passado o id do usuario
	$id = $this->uri->segment(3);
	if($id > 0):
		//id informado, continuar com a edição
		if($usuario = $this->usuario_model->get_single($id)):
		$dados['usuario'] = $usuario;
		$dados_update['id'] = $usuario->id;
		else:
		set_msg('<p>Usuário inexistente! Escolha um usuário para editar!</p>');
		redirect('usuario/listar', 'refresh');
		endif;
	else:
	set_msg('<p>Você deve escolher uma usuário para editar!</p>');
		redirect('usuario/listar', 'refresh');
	endif;

	//regras de validação
		$this->form_validation->set_rules('nome','NOME', 'trim|required');
		$this->form_validation->set_rules('email','EMAIL', 'trim|required');

	//verificar a validação
		if($this->form_validation->run() == FALSE):
			if('validation_errors'()):
				set_msg('validation_errors'());
			endif;

		else:
			$dados_form = $this->input->post();
			$dados_update['nome'] = to_bd($dados_form['nome']);
			$dados_update['email'] = to_bd($dados_form['email']);
			if($this->usuario_model->salvar($dados_update)):
				set_msg('<p>Usuário alterada com sucesso!</p>');
					else:
				set_msg('<p>Erro! Nenhuma alteração foi salva!</p>');
			endif;

		endif;

	//carregar a view
		$dados['titulo'] = ' Alteração de usuário';
		// $dados['tituloPagina'] = $this->option->get_option('nome_site');
		$dados['h2'] = 'Alteração de usuário';
		$dados['tela'] = 'Editar';
		$this->load->view('painel/usuarios', $dados);
	}	

}
