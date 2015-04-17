<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelicula extends CI_Controller {

        public function index()
        {
               $this->load->view('form_pelicula');
        }

        public function registrar()
        {		
                $titulo = $this->input->post('titulo');
                $categoria = $this->input->post('categoria');
                $this->load->model('Pelicula_model');
                $this->Pelicula_model->registrar($titulo,$categoria);
                
        }

        public function detalles()
        {		
                $this->load->model('Pelicula_model');
                $data['registros'] =$this->Pelicula_model->mostrar();
                $this->load->view('form_detalles_pelicula',$data);
                
                
        }
}

