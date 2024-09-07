<script type="text/javascript">
function quad()
{
	var a=document.getElementById("av").value;
	var b=document.getElementById("bv").value;
	var c=document.getElementById("cv").value;
	if(a!=0)
	{
		var d=(Math.pow(b,2)-(4*a*c));
		var x1=(-b + Math.sqrt(d)) / 2*a
		var x2=(-b - Math.sqrt(d)) / 2*a
		if(d>0)
		{
			document.getElementById("r1").value=x1;
			document.getElementById("r2").value=x2;
			document.getElementById("rcom").innerHTML="The Roots Are Real And Unequal"
		}
		if(d==0)
		{
			document.getElementById("r1").value=x1;
			document.getElementById("r2").value=x2;
			document.getElementById("rcom").innerHTML="The Roots Are Real And Equal"	
		}
		if(d<0)
		{
			document.getElementById("r1").value="imag";
			document.getElementById("r2").value="imag";
			document.getElementById("rcom").innerHTML="The Roots Are Imaginary"
		}
	}	
}
function keycheck(event,tx)
{
var kc;
if(window.event)
{
	kc=event.keyCode;
}
else
{
	kc=event.which;
}
var a=tx.value;
if(kc==45)
{
	if(a.length==0)
	{
		return true;
	}
	else
	{
		return false;
	}
}
if(kc==48)
{
	if(a.indexOf("-")==0 && a.length==1)
	{
		return false;
	}
	
	
	if(a=="")
	{
		return false;
	}
	else
	{
		return true;
	}
}  
if (kc!=8 && kc!=0)
{
	if (kc<49||kc>57)
	{
		return false;
	}
} 

}
</script>

<form name="qfrm">
<table>
<tr>
<td><input type="text" name="av" id="av" size="3" onkeypress="return keycheck(event,av)">x<sup>2</sup>+</td>
<td><input type="text" name="bv" id="bv" size="3" onkeypress="return keycheck(event,bv)">x+</td>
<td><input type="text" name="cv" id="cv" size="3" onkeypress="return keycheck(event,cv)"></td></tr>
<tr rowspan="2"><td colspan="3" align="center"><input type="button" value="Calculate" onclick="quad()"></td></tr>
</table>
<table>
<tr rowspan="2"><td colspan="3" align="center">Result</td></tr>
<tr><td>Root 1<input type="text" name="r1" id="r1" size="10" readonly></td>
<td>Root 2<input type="text" name="r2" id="r2" size="10" readonly></td></tr>
<tr rowspan="2"><td colspan="2" align="center"><div id="rcom"></div></td></tr>
</table>
</form>