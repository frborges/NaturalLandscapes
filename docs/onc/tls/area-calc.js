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
