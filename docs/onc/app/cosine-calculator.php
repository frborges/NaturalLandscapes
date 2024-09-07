<SCRIPT LANGUAGE="JavaScript">

<!-- This script and many more are available online free at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function calccos(form) {
var adj = eval(form.adj.value);
var hyp = eval(form.hyp.value);
form.cos.value = adj/hyp;
}
// End -->
</script>

<center>
<form>
<table border=3 cellspacing=2 cellpadding=5>
<tr>
<td align=center><i>Adjacent Angle</i></td>
<td align=center><i>Hypotenuse Angle</i></td>
<td align=center><i>Cosine Angle</i></td>
</tr>
<tr>
<td align=center><input type=text name=adj size=15></td>
<td align=center><input type=text name=hyp size=15></td>
<td align=center><input type=text name=cos size=15></td>
</tr>
<tr>
<td colspan=3 align=center><input type=button value="Calculate!" onclick="calccos(this.form)"></td>
</tr>
</table>
</form>
</center>