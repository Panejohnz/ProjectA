<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class searchcontroller extends CI_Controller {

    public function index()
    {
        
    }

    public function Search()
    {
        $imgname =  $this->input->post('keyword');

        $this->db->where('img_name', $imgname);
        $img = $this->db->get('img');
        $imgname = $img->result_array();
                    foreach($imgname as $data) { 
                    ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="tile">
                    <div class="price-label price<?php echo $data['img_id'] ?>" rel="<?php echo $data['img_price'] ?>">฿ <?php echo $data['img_price'] ?></div>
                        <img class="image<?php echo $data['img_id'] ?>" rel="<?php echo $data['image'] ?>" src="<?php echo base_url(); ?>/images/<?php echo $data['image'] ?>" alt="<?php echo $data['img_id'] ?>">
                        <span class="tile-overlay"></span>
                        <div class="footer">
                        <p class="name<?php echo $data['img_id'] ?>" rel="<?php echo $data['img_id'] ?>"><?php echo $data['img_name'] ?></p>
                        <button class="btn btn-primary" onclick="javascript:addtocart(<?php echo $data['img_id'] ?>)">Add to Cart</button>
                        </div>
                    </div>
                    </div>
                    <?php

                    } 
                    ?>
            </div>
        </div>
    <?php
    }
}



/* End of file Controllername.php */
