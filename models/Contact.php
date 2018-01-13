<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model {

	public function __construct(){
		parent::__construct();}
	
	function addContactModel($data){
		$this->db->insert('contact',array('Documento'=> $data['documento'], 'Nombre' => $data['nombre'], 'Telefono' => $data['telefono']));
		}

	function searchContact($data){
		$this ->db->insert('contact',array('documento'=> $data['documento']));
		}

}
?>