<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lutindo extends CI_Controller
{

	public function index()
	{
        $telah = $this->db->get_where('ltd_order', ['type_tower' => 'Greenfield']);
        $data['greenfield'] = $telah->num_rows();
        $blm = $this->db->get_where('ltd_order', ['type_tower' => 'Rooftop']);
        $data['rooftop'] = $blm->num_rows();
        $total = $this->db->get_where('ltd_order', ['status_verifikasi' => 'Site telah aktif']);
        $data['site_c'] = $total->num_rows();
        // var_dump($telah);
        // die;
	    
		$this->load->view('lutungan/index', $data);
	}
	public function pesan()
	{
		$this->db->insert('post_pesan', [
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'subject' => $this->input->post('subject'),
			'message' => $this->input->post('message'),
			'date' => time()
		]);
		redirect();
	}
}
