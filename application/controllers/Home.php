<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function index()
	{
	    $dados["container"] = "main";
	    $dados["titulo"] = "Página inicial";
	    $dados["nome_empresa"] = "Ciclo Tecnologia & Internet";
		$this->load->view('home', $dados);
	}
}
