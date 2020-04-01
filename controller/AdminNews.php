<?php

/**
 * Description of AdminNews
 *
 * @author echoes
 */
class AdminNews extends Admin {

    //put your code here
    /**
     * @var NewsModel
     */
    protected $model;

    function __construct() {
        parent::__construct();
        $this->model = new NewsModel();
    }

    public function index() {
        $data['news'] = $this->model->getNews();
        $this->view->load('header_news');
        $this->view->load('nav');
        $this->view->load('news', $data);
        $this->view->load('footer_news');
    }

    public function addNews() {
        $data['msg'] = '';
        if (filter_input(INPUT_POST, 'add')) {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
            if ($title && $text) {
                $news = new Noticia($title, $text);
                if ($this->model->insertNews($news)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao cadastrar Notícia!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $this->view->load('header_news');
        $this->view->load('nav');
        $this->view->load('add_news', $data);
        $this->view->load('footer_news');
    }

    public function removeNews($id) {
        if (filter_input(INPUT_POST, 'del')) {
            $this->model->removeNews($id);
            $this->index();
        } else {
            $data['news'] = $this->model->getNewsById($id);
            $this->view->load('header_news');
            $this->view->load('nav');
            $this->view->load('remove_news', $data);
            $this->view->load('footer_news');
        }
    }

    public function updateNews($id) {
        $data['msg'] = '';
        if (filter_input(INPUT_POST, 'update')) {
            $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
            $text = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
            if ($title && $text) {
                $news = new Noticia($title, $text,[],$id);
                if ($this->model->updateNews($news)) {
                    $this->index();
                    return true;
                } else {
                    $data['msg'] = 'Erro ao atualizar Notícia!';
                }
            } else {
                $data['msg'] = 'Preencha todos os campos!';
            }
        }
        $data['news'] = $this->model->getNewsById($id);
        $this->view->load('header_news');
        $this->view->load('nav');
        $this->view->load('upd_news', $data);
        $this->view->load('footer_news');
    }

}
