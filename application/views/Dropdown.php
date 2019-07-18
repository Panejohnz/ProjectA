

<div class="col-sm-5">
<p style="text-indent: 2.5em;">ชื่อสินค้า</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="" />
            <p style="text-indent: 2.5em;">ประเภทสินค้า</p>
</div>
    <select name="Cate" id="Cate" onChange="change()" >
    <?php
    $this->db->select('category_name,id');                                        
    $province = $this->db->get('category_tb');                                        
    foreach($province->result_array() as $d)
    {
    ?>
    <option value="<?=$d['id']?>"><?=trim($d['category_name'])?></option>
    <?php
    }
    ?>
    </select>
</div>
    <div>
    <select name="Pro" id="Pro">
    </select>
    </div>



    <div class="col-sm-5">
    <p style="text-indent: 2.5em;"> รายละเอียดสินค้า</p>
            <input type="text"  name="p_detail" class="form-control" required placeholder="" />
          </div>
          <div class="col-sm-2">
          <p style="text-indent: 2.5em;"> ราคา (บาท) </p>
            <input type="number"  name="p_price" class="form-control" required placeholder="" />
          </div>

          <div class="col-sm-5 info">
          <p style="text-indent: 2.5em;"> ภาพสินค้า </p>
            <input type="file" name="p_img" class="form-control" />
          </div>

          <div class="col-sm-2">
          <p style="text-indent: 2.5em;">จำนวนสินค้า</p>
            <input type="text"  name="p_num" class="form-control" required placeholder="" />
          </div>

          <div class="form-group">
          <div class="col-sm-12">
          <td><button class="btn btn-success" type="button">Success</button></td>
          <td><button class="btn btn-danger" type="button">Back</button></td>
          </div>
        </div>

    
    