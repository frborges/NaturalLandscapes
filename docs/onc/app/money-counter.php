<SCRIPT LANGUAGE="JavaScript">



<!-- Begin
function s(num, val) {
amount = num * 1; // amount is the num or NaN
sum = (!num ? 0 : num) * val;  // the sum for that bill or coin

if (isNaN(amount)) { // if the entire is not a number

alert(
"' " + num + " ' is not a valid entry and that field will "
+ "not be included in the total money calculation."
);

return 0;
}
else
return sum; // if it is OK, send sum back
}

function money(form) {
hun = s(form.hun.value, 100); // Each amount is the returned value
fif = s(form.fif.value, 50);  // for the amount in the s() function
twe = s(form.twe.value, 20);
ten = s(form.ten.value, 10);
fiv = s(form.fiv.value, 5);
one = s(form.one.value, 1);
hlf = s(form.hlf.value, .5);
qtr = s(form.qtr.value, .25);
dme = s(form.dme.value, .1);
nck = s(form.nck.value, .05);
pny = s(form.pny.value, .01);

// add up all the amounts
var ttl = hun + fif + twe + ten + fiv
+ one + hlf + qtr + dme + nck + pny;

// rounds total to two decimal places

ttl = "" + ((Math.round(ttl * 100)) / 100);

dec1 = ttl.substring(ttl.length-3, ttl.length-2);
dec2 = ttl.substring(ttl.length-2, ttl.length-1);

if (dec1 != '.') { // adds trailing zeroes if necessary
if (dec2 == '.') ttl += "0";
else ttl += ".00";
}
form.total.value = "$ " + ttl; // display total amount
}
//  End -->
</script>


<center>
<form name=coinform>
<table border=1>
<tr>
<td align=center>$ 100</td>
<td align=center>$ 50</td>
<td align=center>$ 20</td>
<td align=center>$ 10</td>
<td align=center>$ 5</td>
<td align=center>$ 1</td>
</tr>
<tr>
<td align=center><input type=text name=hun size=3></td>
<td align=center><input type=text name=fif size=3></td>
<td align=center><input type=text name=twe size=3></td>
<td align=center><input type=text name=ten size=3></td>
<td align=center><input type=text name=fiv size=3></td>
<td align=center><input type=text name=one size=3></td>
</tr>
<tr>
<td colspan=6> </td>
</tr>
<tr>
<td> </td>
<td align=center>50 �</td>
<td align=center>25 �</td>
<td align=center>10 �</td>
<td align=center>5 �</td>
<td align=center>1 �</td>
</tr>
<tr>
<td> </td>
<td align=center><input type=text name=hlf size=3></td>
<td align=center><input type=text name=qtr size=3></td>
<td align=center><input type=text name=dme size=3></td>
<td align=center><input type=text name=nck size=3></td>
<td align=center><input type=text name=pny size=3></td>
</tr>
<tr>
<td colspan=5 align=center>
<input type=button name=calc value="Calculate" onClick="javascript:money(this.form)">
<input type=text name=total size=10>
</td>
</tr>
</table>
</form>
</center>
