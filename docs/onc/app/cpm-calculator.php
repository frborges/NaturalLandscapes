<SCRIPT LANGUAGE="JavaScript">


<!-- Begin
function adCalc(form) {
var ok = 0;
var cost = form.cost.value;
var cpm = form.cpm.value;
var exposures = form.exposures.value;

var complete = "It looks like you entered all the information already!  With this calculator, you just enter two of the fields and it solves for the last one.";

var incomplete = "Oops!  It doesn't appear you entered enough information.  Please enter at least two entries in order to solve for the other two.";

if (cost != "" && cpm != "")       { form.exposures.value = ((cost / cpm) * 1000); ok++; } // solve for exposures
if (cost != "" && exposures != "") { form.cpm.value = ((1000 / exposures) * cost); ok++; } // solve for cpm
if (cpm != "" && exposures != "")  { form.cost.value = cpm / (1000 / exposures);   ok++; } // solve for cost

if (!ok) alert(incomplete);  // they did not enter at least 2 fields
if (cost != "" && cpm != "" && exposures != "") alert(complete); // they filled in all the fields!
}
//  End -->
</script>



<center>
<form method=post>
<table border="1" cellpadding=5>
<tr>
<td align=center>Cost:</td>
<td align=center><input type=text name=cost size=8 value="" onFocus="select()"></td>
</tr>
<tr>
<td align=center>CPM:</td>
<td align=center><input type=text name=cpm size=8 value="" onFocus="select()"></td>
</tr>
<tr>
<td align=center>Exposures:</td>
<td align=center><input type=text name=exposures size=8 value="" onFocus="select()"></td>
</tr>
<tr>
<td colspan=2 align=center><input type=button value="Solve" onClick="adCalc(this.form)"> <input type=reset value=reset></td>
</tr>
</table>
</form>
</center>
