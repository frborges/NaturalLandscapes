<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  James P. Dildine (jpd@wlsmail.com) -->
<!-- Web Site:  http://www.mste.uiuc.edu/dildine -->



<!-- Begin
function windChill(form) {
wind=eval(form.wind.value);
temp=eval(form.temp.value);
chill=(0.0817*(3.71*(Math.pow(wind, 0.5))+
5.81-0.25*wind)*(temp-91.4)+91.4);
form.windchill.value = chill;
}
//  End -->
</script>

<form action="" method=post name=windform>
<center>
<table border=1 cellpadding=3 cellspacing=0 width="250">
<tr>
<td align=center>
Wind Speed (MPH) =
</td>
<td align=center>
<input type=text name=wind value="" size=6>
</td>
</tr>
<tr>
<td align=center>
Air Temperature (ºF) =
</td>
<td align=center>
<input type=text name=temp value="" size=6>
</td>
</tr>
<tr>
<td colspan=2 align=center>
<br>
<input type=button value="Calculate Wind Chill" onclick="windChill(this.form)">
<p>
<input name=windchill type=text value="" size=10> º F
</td>
<tr>
</table>
</center>
</form>