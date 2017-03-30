<?php
 class Blackbooks_Model extends CI_Model {

   public function __construct()
   {
        $this->load->database();
   }

   public function get_Books($id = FALSE)
   {
        if ($id === FALSE)
            {
              $query = $this->db->get('books');
              return $query->result_array();
            }

        $query = $this->db->get_where('books', array('id' => $id));
        return $query->row_array();
   }
   public function set_news($id = 0)
        {
            $this->load->helper('url');
            $data = array(
                'Titre' => $this->input->post('Titre'),
                'Auteur' => $this->input->post('Auteur'),
                'Categorie' => $this->input->post('Categorie')
            );
            if ($id == 0) {
                return $this->db->insert('books', $data);
            } else {
                $this->db->where('id', $id);
                return $this->db->update('books', $data);
            }
        }
  //  public function set_Books(){
  //    $this->load->helper('url');
   //
  //    $data = array('Titre' => $this->input->post('Titre'),
  //                   'Auteur' => $this->input->post('Auteur'),
  //                   'Categorie' => $this->input->post('Categorie'));
  //   return $this->db->insert('books', $data);
  //  }
   public function delete($id){
     $this->db->where('id', $id);
     return $this->db->delete('books');;
   }
 }
