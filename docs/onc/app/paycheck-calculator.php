<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Dan Scott (dscott@wirepower.com) -->
<!-- Web Site:  http://www.wirepower.com -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function compute() {
with (document.paycheck) {
otrate.value = rate.value * otpercent.value;
if (hours.value > 40) ot.value = hours.value - 40;
if (hours.value > 40) hours.value = 40;
gross.value = (rate.value * hours.value) + otrate.value * ot.value;
tax.value = gross.value * taxrate.value;
total.value = gross.value - tax.value - other.value;
   }
}
//  End -->
</script>

<center>
<form name=paycheck>
<table border=1>
<tr>
<td bgcolor="#c0c0c0" align=right><b>Pay Rate:</b></td>
<td><input type=text name=rate size=5></td>
<td bgcolor="#c0c0c0" align=right>Hours:</b></td>
<td><input type=text name=hours size=5></td>
</tr>
<tr>
<td align=right>OT Rate:</td>
<td><input type=text name=otpercent size=5 value=1.5></td>
<td align=right>OT Hours:</td>
<td><input type=text name=ot size=5 value=0></td>
</tr>
<tr>
<td align=right>OT Hourly:</td>
<td><input type=text name=otrate size=5></td>
<td align=right>Gross Pay:</td>
<td><input type=text name=gross size=5></td>
</tr>
<tr>
<td colspan=2>   </td>
<td align=right><p>Tax Rate</td>
<td><input type=text name=taxrate value=.12 size=5></td>
</tr>
<tr>
<td colspan=2>   </td>
<td align=right>Total Taxes:</td>
<td><input type=text name=tax size=5></td>
</tr>
<tr>
<td colspan=2>   </td>
<td align=right><p>Other Deductions:</td>
<td><input type=text name=other value=0 size=5></td>
</tr>
<tr>
<td colspan=2>   </td>
<td align=right bgcolor="#ffff80"><b>Your Paycheck:</b></td>
<td><input type=text name=total size=5></td>
</tr>
<tr>
<td colspan=4 align=center><input type=button value="Calculate" onClick="compute()">
</td>
</tr>
</table>
</form>
</center>
