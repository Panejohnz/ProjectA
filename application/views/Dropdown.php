

<div class="col-sm-5">
              <p>ชื่อสินค้า</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
              <p>ประเภทสินค้า</p>
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
            <p> รายละเอียดสินค้า</p>
            <input type="text"  name="p_detail" class="form-control" required placeholder="รายละเอียดสินค้า" />
          </div>
          <div class="col-sm-2">
            <p> ราคา (บาท) </p>
            <input type="number"  name="p_price" class="form-control" required placeholder="ราคา" />
          </div>

          <div class="col-sm-5 info">
            <p> ภาพสินค้า </p>
            <input type="file" name="p_img" class="form-control" />
          </div>

          <div class="col-sm-2">
            <p>จำนวนสินค้า</p>
            <input type="text"  name="p_num" class="form-control" required placeholder="จำนวนสินค้า" />
          </div>

          <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" name="btnadd"> + เพิ่มสินค้า </button>
            <button type="submit" class="btn btn-primary" name="btnadd"> กลับ </button>
          </div>
        </div>

    
    