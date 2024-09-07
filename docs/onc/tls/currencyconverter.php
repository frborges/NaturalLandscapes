<?php
/************* Exchange Rate Calculator *******************/
/*
Released by AwesomePHP.com, under the GPL License, a
copy of it should be attached to the zip file, or
you can view it on http://AwesomePHP.com/gpl.txt
*/
/************* Exchange Rate Calculator *******************/	

// Include Class
include_once('currency_class.php');

// Get list of currencies
$c = new JOJO_Currency_yahoo();
$list = $c->getCurrencies();

// Check any submitions
if($_GET['N'] != NULL){
	// Amount to convert
	$amount = (int)$_GET['N'];
	// From
	$from = $_GET['F'];
	$from_text = $list[$from];
	// To
	$to = $_GET['T'];
	$to_text = $list[$to];
	// Get rate
	$rate = $c->getRate($from,$to, true);
	// Total price (to 2 decemial points)
	$total = number_format(($rate*$amount),2);
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Exchange Rate Calculator</title>
</head>
<body>
<?php
if($total != NULL){?>
  <table width="600"  border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td width="100%"><div align="center"><strong><font color="#000000" si</div></td>
    </tr>
    <tr>
      <td><div align="left"><strong>Exchange Rate is</strong> <font color="#FF0000">$<?=$rate;?>, <?=$amount;?></font> <strong><?=$from_text;?> will tend</strong> <font color="#FF0000">$<?=$total;?></font> <strong><?=$to_text;?></strong>. </div></td>
    </tr>
  </table>
  <br/>
  <?php } ?>
<form name="convert" id="convert" method="get" action="/currency-converter/" style="display:inline;">
 <table width="350"  border="0" align="center" cellpadding="5" cellspacing="0">
    <tr>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr>
      <td width="50%"><strong><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">Convert:</font></strong></td>
      <td width="50%"><input name="N" type="text" id="N" style="width:90%;" value="<?=$amount;?>"></td>
    </tr>
    <tr>
      <td width="50%"><strong><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">From:</font></strong></td>
      <td width="50%"><select name="F" id="F"  style="width:90%;">
	  <?php
	  if($from == NULL){$from = 'XAU';}
	  foreach($list as $code => $name){
	  	if($from == $code){$sel=' selected';}else{$sel=NULL;}
		echo '<option value="'.$code.'"'.$sel.'>'.$name.'</option>';
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td width="50%"><strong><font color="#000000" size="2" face="Verdana, Arial, Helvetica, sans-serif">To:</font></strong></td>
      <td width="50%"><select name="T" id="T"  style="width:90%;">
	  <?php
	  if($to == NULL){$to = 'USD';}
	  foreach($list as $code => $name){
	  	if($to == $code){$sel=' selected';}else{$sel=NULL;}
		echo '<option value="'.$code.'"'.$sel.'>'.$name.'</option>';
	  }
	  ?>
            </select></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Convert">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>