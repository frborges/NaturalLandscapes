<SCRIPT LANGUAGE="JavaScript">



<!-- Begin
function computeamount(h,a,t){
h = document.forms[0].h.value
a = document.forms[0].a.value
t = document.forms[0].t.value
document.forms[0].result1.value=eval(a*Math.exp((Math.log(0.5)/h)*t));
document.forms[0].result2.value=eval((document.forms[0].result1.value/a)*100);
}
// End -->
</SCRIPT>

<CENTER>
<TABLE border=1>
<TR>
<TD>Halflife</TD>
<TD>Amount</TD>
<TD>Time</TD>
</TR>
<TR>
<TD><FORM><input name="h" size=10 ></TD>
<TD><input name="a" size=10 ></TD>
<TD><input name="t" size=10 ></TD>
<TD><input type="button" value="Calculate Amount Left" onclick="computeamount()"></TD>
</TR>
</TABLE>
</CENTER>
<BR>The amount remaining is:
<input name="result1" size=22> or
<input name="result2" size=5> percent of the original sample.
<input type="reset" value="Reset Form">
</FORM>
