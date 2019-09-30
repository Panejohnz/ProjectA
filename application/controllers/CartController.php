<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CartController extends CI_Controller
{


  public function __construct()
  {

    parent::__construct();
    //Load Library and model.
    $this->load->library('cart');
    $this->load->model('Cart_model');
    $this->load->library('pagination'); // โหลด pagination library

    // if(!$this->session->userdata('firsname')){ //ดัก user บังคับล็อกอิน
    //   redirect('TestController');
    // }

  }

  public function viewall()
  {
    $per_page = 8;
    $page = ($this->uri->segment(3) != '') ? $this->uri->segment(3) : 0; // เลขหน้าที่จะถูกส่งมาเช่น home/member/3
    $this->load->library('pagination'); // โหลด pagination library
    $config['attributes'] = array('class' => 'page-link');
    $config['base_url'] = base_url("CartController/viewall"); // ชี้หน้าเพจหลักที่จะใช้งานมาที่ home/member
    $config['total_rows'] = $this->Cart_model->getAllData(); // จำนวนข้อมูลทั้งหมด
    $config['per_page'] = $per_page; // จำนวนข้อมูลต่อหน้า

    $config['use_page_numbers'] = TRUE; // เพื่อให้เลขหน้าในลิงค์ถูกต้อง ให้เซตค่าส่วนนี้เป็น TRUE
    $config['full_tag_open'] = '<ul class="pagination mt-5" >';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = false;
    $config['last_link'] = false;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#"><span class="sr-only">(current)</span>';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $this->PAGE['member_list'] = $this->Cart_model->getPageData($page, $per_page); // รายชื่อสมาชิกที่จะนำไปแสดงในหน้านั้น
    $this->PAGE['pagination'] = $this->pagination->create_links(); // เลขหน้า
    $this->load->view('cart', $this->PAGE); // ส่งข้อมูลออกไปที่ member_veiw
  }



  function add()
  {

    // Set array for send data.
    $insert_data = array(
      'id' => $this->input->post('id'),
      'name' => $this->input->post('name'),
      'price' => $this->input->post('price'),
      'stock' => $this->input->post('stock'),
      'image' => $this->input->post('image'),
      'qty' => 1
    );
    // This function add items into cart.
    $this->cart->insert($insert_data);
    echo $fefe = count($this->cart->contents());
    // This will show insert data in cart.
    
    
  } 
  

  




  function remove()
  {
    $rowid = $this->input->post('rowid');
    // Check rowid value.
    if ($rowid === "all") {
      // Destroy data which store in session.

      $this->cart->destroy();
      $fefe = count($this->cart->contents());
      echo json_encode(['status' => 1, 'msg' => 'Success', 'cart' => $fefe]);
      redirect($this->uri->uri_string());
    } else {
      // Destroy selected rowid in session.
      $data = array(
        'rowid' => $rowid,
        'qty' => 0
      );
      // Update cart data, after cancel.
      $this->cart->update($data);
      $fefe = count($this->cart->contents());
      echo json_encode(['status' => 0, 'msg' => 'Fail', 'cart' => $fefe]);
    }

    // This will show cancel data in cart.
  }




  function update_cart()
  {
    // Recieve post values,calcute them and update
    $rowid = $_POST['rowid'];
    $price = $_POST['price'];
    $amount = $price * $_POST['qty'];
    $qty = $_POST['qty'];

    $data = array(
      'rowid' => $rowid,
      'price' => $price,
      'amount' => $amount,
      'qty' => $qty
    );
    $this->cart->update($data);
    echo $data['amount'];
    
  }

  function billing_view()
  {
    // Load "billing_view".
    $this->load->view('billing_view');
  }

 
  public function save_order()
	{
	// This will store all values which inserted from user.
	$customer = array(
	'name' => $this->input->post('name'),
	'email' => $this->input->post('email'),
	'address' => $this->input->post('address'),
	'phone' => $this->input->post('phone')
	);
	// And store user information in database.
	$cust_id = $this->cart_model->insert_customer($customer);
	$order = array(
	'date' => date('Y-m-d'),
	'customerid' => $cust_id
	);
	$ord_id = $this->cart_model->insert_order($order);
	if ($cart = $this->cart->contents()):
	foreach ($cart as $item):
	$order_detail = array(
	'orderid' => $ord_id,
	'productid' => $item['id'],
	'quantity' => $item['qty'],
	'price' => $item['price']
	);

	// Insert product imformation with order detail, store in cart also store in database.

	$cust_id = $this->cart_model->insert_order_detail($order_detail);
	endforeach;
	endif;

	$this->cart->destroy();

	// After storing all imformation in database load "billing_success".
	$this->load->view('billing_success');
	}


  public function opencart()
  {
    $data['cart']  = $this->cart->contents();
    $this->load->view("cart_modal", $data);
  }
}
