<SCRIPT LANGUAGE="JavaScript">

<!-- This script and many more are available online free at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
function calctan(form) {
var opp = eval(form.opp.value);
var adj = eval(form.adj.value);
form.tan.value = opp/adj;
}
// End -->
</script>

<center>
<form>
<table border=3 cellspacing=2 cellpadding=5>
<tr>
<td align=center><i>Opposite Angle</i></td>
<td align=center><i>Adjacent Angle</i></td>
<td align=center><i>Tangent Angle</i></td>
</tr>
<tr>
<td align=center><input type=text name=opp size=15></td>
<td align=center><input type=text name=adj size=15></td>
<td align=center><input type=text name=tan size=15></td>
</tr>
<tr>
<td colspan=3 align=center><input type=button value="Calculate!" onclick="calctan(this.form)"></td>
</tr>
</table>
</form>
</center>