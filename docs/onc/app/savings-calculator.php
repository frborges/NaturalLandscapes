<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Michael C. Hundt (mchundt@nglic.com) -->
<!-- Web Site:  http://www.cinet.net/~mhundt/mystuff.htm -->



<!-- Begin
var i = 0; // interest
var m = 0; // months
var f = 0; // factor
var den = 0;
var s = "0"; // string
var d = 0; // decimal place
function CalcA() {
if(document.calform.interest.value=="" || document.calform.months.value=="" || document.calform.payment.value=="") {
alert("Please fill in all of the required fields.");
}
else {
if(document.calform.period.options[1].selected == true) {
m = document.calform.months.value * 12;
}
else {
m = document.calform.months.value;
}
i = Math.pow(((document.calform.interest.value/100)+1),.0833333)-1;
den = i / (i+1);
f = Math.pow((i+1),m)-1;
f /= den;
f *= document.calform.payment.value;
d = String(f).indexOf(".");
s = String(f).substring(0,(d+3));
document.calform.total.value = "$" + s;
   }
}
//  End -->
</script>


<center>
<form method=post name="calform">
<table width=400>
<tr>
<td align=right width=200>Total invested each month:</td>
<td><input type=text name=payment size=13 maxlength=13></td>
</tr>
<tr>
<td align=right width=200>Number of months/years to aquire sum:</td>
<td><input type=text name=months size=3 maxlength=3>
<select name=period size=1>
<option value="m">Months
<option value="y">Years
</select>
</td>
</tr>
<tr>
<td align=right width=200>Interest rate on savings:</td>
<td><input type=text name=interest size=5 maxlength=5><b> %</b></td>
</tr>
<tr>
<td width=200 colspan=2 align=center> <br>
<input type=button name=button1 value="How much will I have?" onClick="javascript:CalcA()"></td>
</tr>
<tr>
<td colspan=2 align=center width=100>Total :
<input type=text name=total value="0.00" size=15 maxlength=15></td>
</tr>
</table>
</form>
</center>