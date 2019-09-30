<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Orders extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model('Orders_model');
	}

	public function index()
	{
		$config = array();
		$config['base_url'] = base_url('orders/index');
		$config['total_rows'] = $this->Orders_model->record_count($this->input->get('keyword'));
		$config['per_page'] = $this->input->get('keyword') == NULL ? 14 : 999;
		$config['uri_segment'] = 3;
		$choice = $config['total_rows'] / $config['per_page'];
		$config['num_links'] = round($choice);

		$this->pagination->initialize($config);

		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data['results'] = $this->Orders_model->fetch_Orders($config['per_page'], $page, $this->input->get('keyword'));
		$data['link'] = $this->pagination->create_links();
		$data['total_rows'] = $config['total_rows'];
		$this->load->view('template/backheader');
		$this->load->view('orders/mainpage', $data);
		$this->load->view('template/backfooter');
	}

	public function newdata()
	{
		$this->load->view('template/backheader');
		$this->load->view('orders/newdata');
		$this->load->view('template/backfooter');
	}

	public function postdata()
	{
		if ($this->input->server('REQUEST_METHOD') == TRUE) {

			$this->form_validation->set_rules('name', 'ชื่อ', 'required', array('required' => 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('email', 'email', 'required', array('required' => 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('address', 'ที่อยู่', 'required', array('required' => 'ค่าห้ามว่าง!'));
			$this->form_validation->set_rules('phone', 'เบอร์โทร', 'required', array('required' => 'ค่าห้ามว่าง!'));




			if ($this->form_validation->run() == TRUE) {
				$this->session->set_flashdata(
					array(
						'msginfo' => '<div class="pad margin no-print"><div style="margin-bottom: 0!important;" class="callout callout-info"><h4><i class="fa fa-info"></i> ข้อความจากระบบ</h4>ทำรายการสำเร็จ</div></div>'
					)
				);
				$this->Orders_model->entry_Orders($this->input->post('customerid'));
				redirect('orders', 'refresh');
			} else {
				$data = array(
					'error_name' 		=> form_error('name'),
					'error_email' 		=> form_error('email'),
					'error_address' 	=> form_error('address'),
					'error_phone' 		=> form_error('phones'),


					'name'       		=> set_value('name'),
					'email'       		=> set_value('email'),
					'address'       	=> set_value('address'),
					'phone'       		=> set_value('phone'),

				);
				$this->session->set_flashdata($data);
			}
			if ($this->input->post('id') == NULL) {
				redirect('orders/newdata');
			} else {
				redirect('orders/edit/' . $this->input->post('id'));
			}
		}
	}
	public function edit($customers_id)
	{
		$data['result'] = $this->Orders_model->read_orders($customers_id);
		$this->load->view('template/backheader');
		$this->load->view('orders/edit', $data);
		$this->load->view('template/backfooter');
	}

	public function confrm($customers_id)
	{
		$data = array(
			'backlink'  => 'orders',
			'deletelink' => 'orders/remove/' . $customers_id
		);
		$this->load->view('template/backheader');
		$this->load->view('confrm', $data);
		$this->load->view('template/backfooter');
	}

	public function remove($customers_id)
	{
		$this->Orders_model->remove_orders($customers_id);
		redirect('orders', 'refresh');
	}
	public function update_status()  //สถานะ
	{
	if(isset($_REQUEST['sval'])){
		$this->load->model('Orders_model','orders');
		$up_status = $this->orders->update_status();
		if($up_status > 0){
			$this->session->set_flashdata('msg',"updated success");
			$this->session->set_flashdata('msg_class',"alert-success");
			
		}else{
			$this->session->set_flashdata('msg',";not updated success");
			$this->session->set_flashdata('msg_class',"alert-danger");
		}
		return redirect('orders');
		
	}
	}
}
