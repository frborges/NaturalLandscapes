
<!-- Script by hscripts.com -->
<!-- Copyright of HIOXINDIA -->
<!-- More scripts @www.hscripts.com -->

<script type="text/javascript">
function find_ratio()
{
   var x=document.getElementById("x1").value;
   var y=document.getElementById("y1").value;
   var gcd=calc(x,y);
   var r1=x/gcd;
   var r2=y/gcd;
   var ratio=r1+":"+r2;
   document.getElementById("res").value=ratio;
}
function calc(n1,n2)
{
  var num1,num2;
  if(n1 < n2){ 
      num1=n1;
      num2=n2;  
   }
   else{
      num1=n2;
      num2=n1;
    }
  var remain=num2%num1;
  while(remain>0){
      num2=num1;
      num1=remain;
      remain=num2%num1;
  }
  return num1;
}  
function isInteger(s,iid)
{
      var i;
      s = s.toString();
      for (i = 0; i < s.length; i++)
      {
         var c;
         if(s.charAt(i)==".")
         {
         }
         else
         {   
            c = s.charAt(i);
         }
         if (isNaN(c)) 
	   {
		alert("Given value is not a number");
                document.getElementById(iid).value="";
		return false;
	   }
      }
      return true;
}
function ctck()
{
     var sds = document.getElementById("dum");
     if(sds == null){
        alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
     var sdss = document.getElementById("dumdiv");
     if(sdss == null){
         alert("You are using a free package.\n You are not allowed to remove the tag.\n");
     }
}
document.onload ="ctck()";
</script>

<!-- Script by hscripts.com -->

<table cellspacing=0 cellpadding=2 style="border:1px solid green;" align=center>
<tr><td>Enter the x value:</td><td><nput type="text" id="x1" onkeyup="isInteger(this.value,this.id);"></td></tr>
<tr><td>Enter the y value:</td><td><input type="text" id="y1" onkeyup="isInteger(this.value,this.id);"></td></tr>
<tr><td colspan=2 align=center><input type="button" value="Find Ratio" onclick="find_ratio()"></td></tr>
<tr><td colspan=2 align=center>Ratio:<input type="text" readonly id="res" style="font-weight:bold;" size="6"></td></tr></table>
<div style="font-size: 10px;color: #dadada;" id="dumdiv" align=center>
</div>
