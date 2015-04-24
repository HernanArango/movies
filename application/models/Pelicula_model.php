<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pelicula_model extends CI_Model {

        public $titulo;
        public $categoria;
        

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();

        }

        public function registrar($titulo,$categoria)
        {
                $this->titulo    = $titulo;
                $this->categoria  =  $categoria;
                $this->db->insert('pelicula', $this);
        }
		/**
		 * retorna los datos de la pelicula
		 **/
        public function mostrar($id)
        {
                $query = $this->db->query('SELECT * FROM pelicula where id=?',array($id));
                return $query->result();              
                
        }
}
