<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	function cargarCredito($data){
		$this->db->select('creditos');
		$this->db->from('usuario');
		$this->db->where('email', $data);
		$consulta = $this->db->get();
		$resultado = $consulta->row();
		$num= $resultado->creditos;
		$num=$num+1;
		
		$data7 = array(
			'creditos' => $num
		);
		$this->db->where('email', $data);
        $this->db->update('usuario', $data7);
	}
}
?>