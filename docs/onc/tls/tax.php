<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Tim Wallace



<!-- Begin
function fmtPrice(value) {
result="$"+Math.floor(value)+".";
var cents=100*(value-Math.floor(value))+0.5;
result += Math.floor(cents/10);
result += Math.floor(cents%10);
return result;
}
function compute() {
var unformatted_tax = (document.forms[0].cost.value)*(document.forms[0].tax.value);
document.forms[0].unformatted_tax.value=unformatted_tax;
var formatted_tax = fmtPrice(unformatted_tax);
document.forms[0].formatted_tax.value=formatted_tax;
var cost3= eval( document.forms[0].cost.value );
cost3 += eval( (document.forms[0].cost.value)*(document.forms[0].tax.value) );
var total_cost = fmtPrice(cost3);
document.forms[0].total_cost.value=total_cost;
}
function resetIt() {
document.forms[0].cost.value="19.95";
document.forms[0].tax.value=".06";
document.forms[0].unformatted_tax.value="";
document.forms[0].formatted_tax.value="";
document.forms[0].total_cost.value="";
}
// End -->
</SCRIPT>
<CENTER>
<FORM>
<TABLE BORDER=2 WIDTH=300 CELLPADDING=3>
<TR>
<TD align="center"><FONT SIZE=+1><STRONG>Cost</STRONG></FONT>
<TD align="center"><FONT SIZE=+1><STRONG>Tax</STRONG></FONT>
</TR>
<TR>
<TD align="center"><INPUT TYPE="text" NAME="cost" VALUE="19.95" SIZE=10>
<TD align="center"><INPUT TYPE="text" NAME="tax" VALUE=".06" SIZE=10>
</TR>
</TABLE>
<BR>
<TABLE BORDER=1 WIDTH=600 CELLPADDING=3>
<TR>
<TD align="center"><FONT SIZE=+1><STRONG>Unformatted Tax</STRONG></FONT>
<TD align="center"><FONT SIZE=+1><STRONG>Formatted Tax</STRONG></FONT>
<TD align="center"><FONT SIZE=+1><STRONG>TOTAL COST</STRONG></FONT>
</TR>
<TR>
<TD align="center"><INPUT TYPE="text" NAME="unformatted_tax" SIZE=15>
<TD align="center"><INPUT TYPE="text" NAME="formatted_tax" SIZE=15>
<TD align="center"><INPUT TYPE="text" NAME="total_cost" SIZE=15>
</TR>
</TABLE>
<BR>
<TABLE BORDER=0 WIDTH=400 CELLPADDING=5>
<TR>
<TD align="center"><INPUT TYPE="reset"  VALUE="RESET" onClick="resetIt()">
<TD align="center"><INPUT TYPE="button" VALUE="COMPUTE" onclick="compute()">
</TR>
</TABLE>
</CENTER>