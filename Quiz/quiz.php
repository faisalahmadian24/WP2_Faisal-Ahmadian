<?php 
defined('BASEPATH') or exit ('no direct script access allowed');
class quiz extends CI_Controller { 
 
 public function index() 
 { 
$this->load->view('v_headerquiz');
$this->load->view('view-form-quiz');
$this->load->view('v_footerquiz');     
} 


 public function cetak()     { 
 
        $data = [             
            'nim' => $this->input->post('nim'),             
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'tgl' => $this->input->post('tgl'),             
            'alamat' => $this->input->post('alamat')         
        ]; 
    $this->load->view('v_headerquiz');
    $this->load->view('view-data-quiz', $data);
    $this->load->view('v_footerquiz');     
    } 
} 
