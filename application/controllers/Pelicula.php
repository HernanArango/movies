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

        public function detalles($id)
        {		
                $this->load->model('Pelicula_model');
                //obtenemos los datos de la pelicula en la base de datos
                $result=$this->Pelicula_model->mostrar($id);
                //sacamos el titulo
                $titulo=$result[0]->titulo;
                //consultamos los datos extra de la pelicula en la api
                $datos_extra=$this->consultar_api($titulo);
                
                //preparamos los datos que se le enviaran a la vista
                $data['registros']=$result;
                $data['anio']=$datos_extra['Year'];
                $data['director']=$datos_extra['Director'];
                $data['escritor']=$datos_extra['Writer'];
                $data['pais']=$datos_extra['Country'];
                $data['actores']=$datos_extra['Actors'];
                $data['imagen']=$datos_extra['Poster'];
                //cargamos la vista y enviamos los datos           
                $this->load->view('form_detalles_pelicula',$data);
                
                
        }

        public function consultar_api($titulo)
        {
         	
         	//Url donde esta nuestro JSON
			$url = 'http://www.omdbapi.com/?t='.$titulo;

			//Iniciamos cURL junto con la URL
			$curlUrl = curl_init($url);

			//Agregamos opciones necesarias para leer
			curl_setopt($curlUrl,CURLOPT_RETURNTRANSFER, TRUE);

			// Capturamos la URL
			$datosJson = curl_exec($curlUrl);

			//Descodificamos para leer y guardamos en datos
			$datos = json_decode($datosJson,true);

						
			return $datos;
			
        }
}

