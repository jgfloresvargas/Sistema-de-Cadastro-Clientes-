<?php
/**
 * Description of News
 *
 * @author Professor
 */
class News extends Controller {

    public function __construct() {
        parent::__construct();
        $this->model = new NewsModel();
    }

    public function index() {        
        $data['news'] = $this->model->getNews();        
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('news', $data);
    }

    public function view_news($id_news) {
        $data['news'] = $this->model->getNewsById($id_news);        
        $this->view->load('header');
        $this->view->load('nav');
        $this->view->load('view_news', $data);
    }

}
