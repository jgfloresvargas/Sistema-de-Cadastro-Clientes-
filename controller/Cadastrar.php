<?php

class Cadastrar extends Admin {

    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new CadastrarModel();
    }

    public function index() { 
        $data['msg']="";
        $data['cadastrar'] = $this->model->getCadastrar(); // getCadastrar chamando o arquivo cadastrarModel
        $data['nv'] = $this->model->getNiver();
        $this->view->load('header');
        $this->view->load('nav',$data);
        $this->view->load('tables', $data);
        $this->view->load('footer');
    } 
    
    
    public function inc() { 
        $data['msg']="";
        $data['cadastrar'] = $this->model->getCadastrar(); // getCadastrar chamando o arquivo cadastrarModel
        $data['nv'] = $this->model->getNiver();
        $this->view->load('header');
        $this->view->load('nav',$data);
        $this->view->load('tables', $data);
        $this->view->load('footer');
    }

    public function addCadastrar() {
        $data['msg'] = ''; 
          
        if (filter_input(INPUT_POST, 'add')) {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_NUMBER_INT);
            
            $ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
            $mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_STRING);
            $dia = filter_input(INPUT_POST, 'dia', FILTER_SANITIZE_STRING);

            $datadenascimento = "$ano-$mes-$dia";
              
            if ($nome && $email) {
                $cadastrar = new Cadastro($nome, $email, $fone, $datadenascimento);
                if ($this->model->insertCadastrar($cadastrar)) { 
                    
                  
                    $this->index(); 
                    
                    return true;
                } else {
                    $data['msg'] = 'Erro ao registrar!';
                }
            } else {
                $data['msg'] = 'Complete os campos obrigatórios!';
            }
        } 
        $data['nv'] = $this->model->getNiver();
        $this->view->load('header');
        $this->view->load('nav',$data);
        $this->view->load('forms', $data);
        $this->view->load('footer');
    }

    public function removeCadastrar($id_cadastrar) {
        
        if ($_GET) {
            
            $this->model->removeCadastrar($id_cadastrar);
            $this->index();
            
        } else {
            $data['cadastrar'] = $this->model->getCadastrar($id_cadastrar); 
            $data['nv'] = $this->model->getNiver();
            $this->view->load('header');
            $this->view->load('nav',$data);
            $this->view->load('tables', $data);
            $this->view->load('footer');
        }
    }

    public function updateCadastrar($id_cadastrar) {
        $data['msg'] = '';
        if (filter_input(INPUT_POST, 'update')) {
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_NUMBER_INT);
            
            $ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
            $mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_STRING);
            $dia = filter_input(INPUT_POST, 'dia', FILTER_SANITIZE_STRING);

            $datadenascimento = "$ano-$mes-$dia";
            
            if ($nome && $email ) {
                $cadastrar = new Cadastro($nome, $email, $fone, $datadenascimento,$id_cadastrar);
                if ($this->model->updateCadastrar($cadastrar)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Error ao atualizar a publicação!';
                }
            } else {
                $data['msg'] = 'Complete todos os campos!';
            }
        }
        $data['cadastrar'] = $this->model->getCadastrar($id_cadastrar);
        $data['nv'] = $this->model->getNiver();
        
        $data['retornar'] = $this->model->upd($id_cadastrar);
        $this->view->load('header');
        $this->view->load('nav',$data);
        $this->view->load('upd_cadastrar', $data);
        $this->view->load('footer');
    }

    public function upd($id_cadastrar){
        $data['retornar'] = $this->model->upd($id_cadastrar); 
        $data['nv'] = $this->model->getNiver();
        $this->view->load('header');
        $this->view->load('nav',$data);
        $this->view->load('tables', $data);
        $this->view->load('footer');
    }
}