<script type="text/javascript">
     <!-- Begin
function doArea(num) {
switch(num) {
case 0 : return (""); break;
case 1 : var length = prompt("Please enter the length of your square:", "");
         length = length * length;
         return (length); break;
case 2 : var width = prompt("Please enter the width of the base:", "");
         var height = prompt("Please enter the height of the triangle:", "");
         return (width * height / 2); break;
case 3 : var width = prompt("Please enter the width of your rectangle:", "");
         var height = prompt("Please enter the height of your rectangle:", "");
         return (width * height); break;
case 4 : var radius = prompt("Please enter the radius of the circle: ", "");
         return (Math.PI * Math.pow(radius, 2)); break;
case 5 : var radius = prompt("Please enter the radious of the sphere:", 0);
         return (4 * Math.PI * (Math.pow(radius, 2))); break;
   }
}
//  End -->
    </script>

<link rel="stylesheet" href="area-calc.css" type="text/css" />
<table width="500" border="0" cellpadding="2" cellspacing="0">
		<tr>

		</tr>

		<tr>
		<td class="bodyText">
<p><!-- Demonstration -->
<center>
<form name=calcarea>
Find the area of a 
<select name="shape" size="1" onChange="this.form.area.value = doArea(this.selectedIndex);">
<option> ...
<option value="square">Square
<option value="triangle">Triangle
<option value="rectangle">Rectangle
<option value="circle">Circle
<option value="sphere">Sphere
</select>
= <input type=text name=area size=10>
</form>
</center>
</p>
</td>
		</tr>
		<tr>
		  <td class="bodyText">&nbsp;</td>
  </tr>
</table>
</body>
</html>