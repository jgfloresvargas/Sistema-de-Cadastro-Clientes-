<?php

/**
 * Description of Admin
 *
 * @author echoes
 */
class Admin extends Controller {

    //put your code here
    protected $login;

    public function __construct() {
        parent::__construct();
        $this->view->setTemplate('admin');
        $this->login = new Login();
        if (!$this->login->isLogged()) {
            $this->login();
            die;
        }
         $this->model = new CadastrarModel(); 
         
         
        
    }

    public function index() {
        $data['nv'] = $this->model->getNiver();
        $data['usuario'] = $this->login->getSession();
        $data['all'] = $this->model->getCadastrar(); // getCadastrar chamando o arquivo cadastrarModel
      
        
        $this->view->load('header');
        $this->view->load('nav', $data);
        $this->view->load('index', $data);
        $this->view->load('footer'); 
        
    }  
    
    public function inc() {
        $data['nv'] = $this->model->getNiver();
        $data['usuario'] = $this->login->getSession();
        $data['all'] = $this->model->getCadastrar(); // getCadastrar chamando o arquivo cadastrarModel 
        
        $this->view->load('header');
        $this->view->load('nav', $data);
        $this->view->load('inc', $data);
        $this->view->load('footer'); 
        
    } 
    
    
    public function msn() {
        $data['nv'] = $this->model->getNiver();
        $data['usuario'] = $this->login->getSession();
        $data['all'] = $this->model->getCadastrar(); // getCadastrar chamando o arquivo cadastrarModel 
        $this->view->load('header');
        $this->view->load('nav', $data);
        $this->view->load('msn', $data);
        $this->view->load('footer'); 
        
    }

    public function login() {
        $data['msg'] = '';
        if (filter_input(INPUT_POST, 'logar')) {
            $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
            $senha = filter_input(INPUT_POST, 'senha');
            if ($login && $senha) {
                if ($this->login->verifyLogin(new AdminUser($login, $senha))) {
                    if (filter_input(INPUT_POST, 'lembrar')) {
                        $this->login->createCookies();
                    }
                    $this->login->createSession();
                    $data['msg'] = '';
                } else {
                    $data['msg'] = 'Erro: login ou senha inválidos';
                }
            } else {
                $data['msg'] = 'Erro: informe os campos login e senha corretamente!';
            }
        }
        if ($this->login->isLogged()) {
            //Recarrega a página
            $this->reload();
        } else {
            $this->view->load('header');
            $this->view->load('login', $data);
            $this->view->load('footer');
        }
    }

    public function logout() {
        $this->login->logout();
        header('location:' . $this->config->base_url . 'Admin');
    }

}
