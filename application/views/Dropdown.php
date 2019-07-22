
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add_Product</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add_Product</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
 
<body>
 
<form action=""  method="post" enctype="multipart/form-data" name="Add_Product" id="Add_Product" >
 
  
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="50" colspan="3" align="center">เพิ่มสินค้า
     </td>
    </tr>
    <tr>
      <td width="129" align="right" valign="middle">ชื่อสินค้า :</td>
      <td colspan="2"><label for="pro_name2"></label>
        <input name="pro_name" type="text" required="required" id="pro_name2" size="50"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">ประเภทสินค้า :</td>
      <td colspan="2">
      <label for=""></label>
        <select name="type_id" id="type_id" required="required">
          <option value="">กรุณาเลือกประเภท</option>
          <option value="1">ประเภท1</option>
          <option value="2">ประเภท1</option>
           
          </option>
           
        </select>
        </td>
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
      <td align="right" valign="top">รายละเอียดอื่นๆ :</td>
      <td colspan="2">
      <textarea name="pro_detailother" cols="50" rows="3" required="required" id="pro_detailother"></textarea></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">ราคาต้นทุน :</td>
      <td width="190"><label for="pro_price_cost"></label>
         <input type="number" name="pro_price_cost" id="pro_price_cost" required="required"/></td>
      <td width="281">ราคาขาย :
      <input type="number" name="pro_price_sale" id="pro_price_sale" required="required"/></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">จำนวนสินค้า :</td>
      <td><label for="pro_qty"></label>
        <input type="number" name="pro_qty" id="pro_qty" required="required"/></td>
      <td>หน่วยสินค้า :
        <select name="pro_unit" id="pro_unit" required>
          <option value="">กรุณาเลือก</option>
          <option value="ชิ้น">ชิ้น</option>
          <option value="กล่อง">กล่อง</option>
          <option value="แผง">แผง</option>
          <option value="ตัว">ตัว</option>
      </select></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" valign="middle">รูปภาพสินค้า :</td>
      <td colspan="2"><label for="pro_img"></label>
        <input name="pro_img" type="file" required="required" id="pro_img" size="40" /></td>
    </tr>
    <tr>
      <td align="right" valign="middle">&nbsp;</td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><button type="submit" name="button" id="button" value="ตกลง" class="btn btn-primary">เพิ่มสินค้า</button></td>
    </tr>
  </table> 
</form>
</body>
</html>