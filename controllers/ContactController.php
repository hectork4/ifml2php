<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactController extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('Contact');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function addContact()
	{
		$this->load->view('addContact');
	}

	public function searchContact()
	{
		$this->load->view('searchContact');
	}

	public function ContactModel()
	{
		$data = array(
			'documento' => $this->input->post('documento'),
			'nombre' => $this->input->post('nombre'),
			'telefono' => $this->input->post('telefono')
		);
		$this->Contact->addContactModel($data);
	}

	public function ContactModelSearch()
	{
		$data = array(
			'documento' => $this->input->post('documento')
		);
		$this->Contact->searchContact($data);
	}
}