<SCRIPT LANGUAGE="JavaScript">
<!-- Cost estimate idea by Daniel C. Peterson -->



<!-- Begin
function compute(form) {
var milesPerMo = form.avgMiles.value *30.4;
var mpgcalc = (form.milesDriven.value / form.gallons.value) * 1;
var moGascalc = (((form.avgMiles.value * 30.4) / mpgcalc) * form.ppGal.value) * 1;
mpgcalc = twoDecs(mpgcalc);
moGascalc = twoDecs(moGascalc);
form.mpg.value = mpgcalc;
form.moGas.value = moGascalc;
form.yrGas.value = moGascalc * 12;
}
function twoDecs(item) {
return eval(parseInt(item * 100) * .01);
}
//  End -->
</script>


<center>
<form>
<table border=1>
<tr><td>Miles Driven: </td><td><input type=text name=milesDriven size=5> mi.</td></tr>
<tr><td>Gallons of Gas: </td><td><input type=text name=gallons size=5> gal</td></tr>
<tr><td>Cost per Gallon: </td><td>$ <input type=text name=ppGal size=5></td></tr>
<tr><td>Miles per Day: </td><td><input type=text name=avgMiles size=5></td></tr>
<tr><td colspan=2 align=center><input type=button value="Calculates To...." onClick="compute(this.form)"></td></tr>
<tr><td>~ <input type=text name=mpg size=7></td><td>Mi. per Gal.</td></tr>
<tr><td>$ <input type=text name=moGas size=7></td><td> per month</td></tr>
<tr><td>$ <input type=text name=yrGas size=7></td><td> per year</td></tr>
<tr>
<td colspan=2 align=center><input type=reset></td></tr>
</table>
</form>
</center>