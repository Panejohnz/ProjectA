<?php
defined('BASEPATH') or exit('No direct script access allowed');

class historyController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Load Library and model.
        $this->load->model('historyModels');
        $this->load->library('pagination'); // โหลด pagination library
    }
    public function history()
    {
        $result['his'] = $this->historyModels->historybill();
      
        // print_r($result);
        $this->load->view('history', $result);
        
    }
}
