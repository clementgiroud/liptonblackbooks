<?php

class Blackbooks extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Blackbooks_Model');
    $this->load->helper('url_helper');

  }

  public function index()
  {
     $data['book'] = $this->Blackbooks_Model->get_books();
     $data['title'] = 'Liste des livres';
     $this->load->view('template/header', $data);
     $this->load->view('blackbooks/index', $data);
     $this->load->view('template/footer', $data);

  }

  public function view($id = NULL)
  {
        $data['book_item'] = $this->Blackbooks_Model->get_books($id);

        if (empty($data['book_item']))
        {
            show_404();
        }

        $data['title'] = $data['book_item']['id'];

        $this->load->view('template/header', $data);
        $this->load->view('blackbooks/view', $data);
        $this->load->view('template/footer');

  }
  public function create($id = NULL)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        if ($id) {
            $data['book_item'] = $this->Blackbooks_Model->get_books($id);
        }
        $data['title'] = 'Créer un nouveau livre';
        //$data['cats'] = $this->Blackbooks_model->get_cats();
        $this->form_validation->set_rules('Titre', 'Titre', 'required');
        $this->form_validation->set_rules('Auteur', 'Auteur', 'required');
        $this->form_validation->set_rules('Categorie', 'Categorie', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('template/header', $data);
            $this->load->view('blackbooks/create');
            $this->load->view('template/footer');

        }else{
            $this->Blackbooks_Model->set_news($id = NULL);
            redirect('blackbooks', 'refresh');
        }
    }

  public function delete($id){
    $this->Blackbooks_Model->delete($id);
    redirect('blackbooks', 'refresh');
    // $data['title'] = 'Supprimer un livre';
    // //$data['books'] =
    //
    // $this->load->view('template/header', $data);
    // $this->load->view('blackbooks/delete');
    // $this->load->view('template/footer');
  }
}
