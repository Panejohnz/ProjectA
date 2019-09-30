<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
      
        $this->load->library('pagination');
		$this->load->model('Imgtype_model');
		$this->load->model('prd_model');


        $config = array();
		$config['base_url'] = base_url('imgtype/index');
		$config['total_rows'] = $this->prd_model->record_count($this->input->get('keyword'));
		$config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->prd_model->fetch_prd($config['per_page'], $page, $this->input->get('keyword'));
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		//$this->load->view('template/backheader');
		$this->load->view('product', $data);
		//$this->load->view('template/backfooter');
        
    }
    
}