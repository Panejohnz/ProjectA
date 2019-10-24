

<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #E6E6FA;
}

.navbar a {
  float: left;
  font-size: 20px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: black
  ;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

</head>
 
<body>
 



</head>
 
<body>
 
<form action="<?php echo base_url('index.php/DropdownController/Dropdown')?>"  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >
 
  
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="50" colspan="3" align="center">เพิ่มสินค้า
     </td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">ชื่อสินค้า :</td>
      <td colspan="2"><label for="pro_name2"></label>
        <input name="pro_name1" type="text" required="required" id="pro_name1" size="50"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">เลือกประเภท :</td>
      <td colspan="2"><label for="pro_name2"></label>
        <input name="pro_name2" type="text" required="required" id="pro_name2" size="50"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="top">รายละเอียดสินค้า :</td>
      <td colspan="2">
      <textarea name="pro_detail" id="pro_detail" cols="50" rows="3" required="required"></textarea></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">ราคา :</td>
      <td width="190"><label for="pro_price_cost"></label>
         <input type="number" name="pro_price_cost" id="pro_price_cost" required="required"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">จำนวนสินค้า :</td>
      <td><label for="pro_qty"></label>
        <input type="number" name="pro_qty" id="pro_qty" required="required"/></td>
    </tr>
    <td>&nbsp;</td>
    <tr> <td colspan="2">
    <button  class="btn btn-primary" onclick="location.href='<?php echo base_url();?>index.php/Image'">อัพรูป</button></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">เพิ่มสินค้า</button></td>
    </tr>s
  </table> 
</form>
</body>
</html>