<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DropdownController extends CI_Controller {

    public function index()
    {
        $this->load->view('Header');
        //$this->load->view('manage');
        $this->load->view('Dropdown');
        $this->load->view('Footer');
        
        
        
    }

    public function imaeYet($Kuy)
    {
        $this->db->where('category_id', $Kuy);
        $sql = $this->db->get('product_tb');
        foreach ($sql->result() as $d){
            ?>
            <option value="<?=$d->product_id?>"><?=trim($d->product_name)?></option>
            <?php 
        }
        
        
    }

}

/* End of file Hee.php */
