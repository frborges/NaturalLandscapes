<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
function calc1(form) {
a = form.a.value/100;
b = a*form.b.value;
form.total1.value = b;
}
function calc2(form) {
a = form.c.value;
b = form.d.value;
c = a/b;
d = c*100;
form.total2.value = d;
}

//  End -->
</script>
<center>
<form name="form1">
<table border=1 cellpadding=4 cellspacing=1>
<tr>
<td align=center>What is
<input type="text" name="a" size=5>
% of <input type="text" name="b" size=5>?</td>
<td align=center>Answer: <input type="text" name="total1"
size=5 maxlength=40></td>
<td align=center><input type="button" value="Calculate"
onClick="calc1(this.form)"></td>
</tr>
<tr>
<td align=center colspan=3 align=center>Or...</td>
</tr>
<tr>
<td align=center><input type="text" name="c" size=5>
 is what
percent of <input type="text" name="d" size=5>?</td>
<td align=center>Answer: <input type="text" name="total2"
size=5> %</td>
<td align=center><input type="button" value="Calculate"
onClick="calc2(this.form)"></td>
</tr>
</table>
</form>
</center>