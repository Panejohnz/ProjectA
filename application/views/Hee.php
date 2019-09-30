<?php
$query = $this->db->get_where('order_detail', array('orderid' => $id));

$data = $query->result_array();
    echo'<pre>';
    print_r($data);
    echo'</pre>';
    foreach($data as $d){
        echo'<pre>';
       echo $d['id'];
    }
    ?>

    