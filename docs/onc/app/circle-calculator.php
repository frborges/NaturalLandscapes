<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Chris Brown  -->
<!-- Web Site:  http://www.geocities.com/BourbonStreet/3843  -->



<!-- Begin
function circle(form,changed) {
with (Math) {
var area = form.area.value;
var diameter = form.diameter.value;
var circumference = form.circumference.value;
if (changed == "area") {
var radius = sqrt(area / PI);
diameter = 2 * radius;
circumference = PI * diameter;
}
if (changed == "diameter") {
area = PI * (diameter / 2) * (diameter / 2);
circumference = PI * diameter;
}
if (changed == "circumference") {
diameter = circumference / PI;
area = PI * (diameter / 2) * (diameter / 2);
       }
form.area.value = area;
form.diameter.value = diameter;
form.circumference.value = circumference;
  }
}
var toDegrees = 360 / (Math.PI * 2);
var toRadians = (Math.PI * 2) / 360;
//  End -->
</script>


<center>
<form method=post>
<table border="5">
<tr>
<td align=center>Area:</td>
<td align=center><input type=text name=area size=6 value=0  onFocus="select()"></td>
<td align=center><input type=button value="Solve Others" onClick="circle(this.form,'area')"></td>
</tr>
<tr>
<td align=center>Diameter:</td>
<td align=center><input type=text name=diameter size=6 value=0 onFocus="select()"></td>
<td align=center><input type=button value="Solve Others" onClick="circle(this.form,'diameter')"></td>
</tr>
<tr>
<td align=center>Circumference:</td>
<td align=center><input type=text name=circumference size=6 value=0 onFocus="select()"></td>
<td align=center><input type=button value="Solve Others" onClick="circle(this.form,'circumference')"></td>
</tr>
</table>
</form>
</center>
