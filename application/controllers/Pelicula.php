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

        public function consultar_api()
        {
         	
         	//Url donde esta nuestro JSON
			$url = 'http://www.omdbapi.com/?t=avatar';

			//Iniciamos cURL junto con la URL
			$curlUrl = curl_init($url);

			//Agregamos opciones necesarias para leer
			curl_setopt($curUrl,CURLOPT_RETURNTRANSFER, TRUE);

			// Capturamos la URL
			$datosJson = curl_exec($curUrl);

			//Descodificamos para leer
			$datos = json_decode($datosJson,true);

			//Asociamos los campos del JSON a variables
			echo $titulo = $datos['Title'];
			echo $descripcion = $datos['Year'];
			
        }
}

