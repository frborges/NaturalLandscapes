<!-- This script and many more are available free online at -->

<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Original:  Denis Makarov (info@binarythings.com) -->

<!-- Web Site:  http://www.binarythings.com -->

<style>

input {

	width: 100%;

	font-size: medium;



}

body {

	font-family: Verdana, Arial, Helvetica, sans-serif;

	font-size: x-small;

	margin: 0px;

	padding: 0px;

}

h1 {

	font-size: medium;

	font-weight: bold;

}

td {

	text-align: center;

	vertical-align: middle;

}

table {

	margin: 4px;

	

}

</style>


<script language="JavaScript">

var Result=0, Operator=0, Second=0, Ready=0, Done=1, Complete=0, Integer, CurrentValue;

function reset(value)

{

	document.calculator.LED.value = value;

	Result = 0, Operator = 0, Second = 0, Ready = 0; Done = 1; Complete = 0;

}

function SetValue(NewValue)

{

	Integer = 1;

	if(Second || Done)

	{

		Second = 0;

		Done = 0;

		CurrentValue = NewValue;

	}

	for(var i=0; i<CurrentValue.length; i++)

		if (CurrentValue[i]=='.')

			Integer=0;

}

function Click(Caption)

{

	CurrentValue = document.calculator.LED.value;

	if(Caption=='.')

	{

		SetValue('0');

		if(Integer)

		{

			CurrentValue += Caption;

			document.calculator.LED.value = CurrentValue;

			Complete = 0;

		}

	}

	if (Caption.length == 1 && Caption>='0' && Caption<='9')

	{

		SetValue('');

		if(CurrentValue=='0')

			CurrentValue='';

		CurrentValue += Caption;

		document.calculator.LED.value = CurrentValue;

		Complete = 1;

	}

	if (Caption=='pi')

	{

		CurrentValue = Math.PI;

		document.calculator.LED.value = CurrentValue;

		Complete = 1;

	}

	if (Caption=='e')

	{

		CurrentValue = Math.E;

		document.calculator.LED.value = CurrentValue;

		Complete = 1;

	}

	if(Caption=='-' || Caption=='+' || Caption=='/' || Caption=='*' || Caption=='^')

	{

		if(Second)

			Operator = Caption

		else

		{

			if(!Ready)

			{

				Operator = Caption;

				Result = CurrentValue;

				Ready=1;

			} else

			{

				if (Operator=='^')

					Result = Math.pow(Result, CurrentValue);

				else

					Result = eval(Result + Operator + CurrentValue);

				Operator = Caption; document.calculator.LED.value = Result;

			} Complete=0; Second = 1;

		}

	}

	if(Caption=='1/x' )

	{

		Result = eval('1/' + CurrentValue) ; reset(Result);

	}

	if(Caption=='sqrt')

	{

		Result = Math.sqrt(CurrentValue);

		reset(Result);

	}

	if(Caption=='exp' )

	{

		Result = Math.exp(CurrentValue);

		reset(Result);

	}

	if(Caption=='log' )

	{

		Result = Math.log(CurrentValue) / Math.LN10;

		reset(Result);

	}

	if(Caption=='ln' )

	{

		Result = Math.log(CurrentValue);

		reset(Result);

	}

	if(Caption=='sin' )

	{

		Result = CurrentValue;

		if (document.calculator.angle[0].checked)

			Result = Result * Math.PI / 180;

		if (document.calculator.angle[2].checked)

			Result = Result * Math.PI / 200;

		Result = Math.sin(Result);

		reset(Result);

	}

	if(Caption=='cos' )

	{

		Result = CurrentValue;

		if (document.calculator.angle[0].checked)

			Result = Result * Math.PI / 180;

		if (document.calculator.angle[2].checked)

			Result = Result * Math.PI / 200;

		Result = Math.cos(Result);

		reset(Result);

	}

	if(Caption=='tan' )

	{

		Result = CurrentValue;

		if (document.calculator.angle[0].checked)

			Result = Result * Math.PI / 180;

		if (document.calculator.angle[2].checked)

			Result = Result * Math.PI / 200;

		Result = Math.tan(Result);

		reset(Result);

	}

	if(Caption=='asin' )

	{

		Result = Math.asin(CurrentValue);

		if (document.calculator.angle[0].checked)

			Result = Result * 180 / Math.PI;

		if (document.calculator.angle[2].checked)

			Result = Result * 200 / Math.PI;

		reset(Result);

	}

	if(Caption=='acos' )

	{

		Result = Math.acos(CurrentValue);

		if (document.calculator.angle[0].checked)

			Result = Result * 180 / Math.PI;

		if (document.calculator.angle[2].checked)

			Result = Result * 200 / Math.PI;

		reset(Result);

	}

	if(Caption=='atan' )

	{

		Result = Math.atan(CurrentValue);

		if (document.calculator.angle[0].checked)

			Result = Result * 180 / Math.PI;

		if (document.calculator.angle[2].checked)

			Result = Result * 200 / Math.PI;

		reset(Result);

	}

	if(Caption=='sinh' )

	{

		Result = Math.exp(CurrentValue);

		Result = (Result - 1 / Result) / 2;

		reset(Result);

	}

	if(Caption=='cosh' )

	{

		Result = Math.exp(CurrentValue);

		Result = (Result + 1 / Result) / 2;

		reset(Result);

	}

	if(Caption=='tanh' )

	{

		Result = Math.exp(CurrentValue);

		Result = (Result - 1 / Result) / (Result + 1 / Result);

		reset(Result);

	}

	if(Caption=='asinh' )

	{

	//sign(x) * log(|x| + sqrt(x*x+1))

	//	alert(CurrentValue + Math.sqrt(CurrentValue * CurrentValue + 1));

	//	Result = Math.log(CurrentValue + Math.sqrt(CurrentValue * CurrentValue + 1));

		Result = CurrentValue / Math.abs(CurrentValue) * Math.log(Math.abs(CurrentValue) + Math.sqrt(CurrentValue * CurrentValue + 1));

		reset(Result);

	}

	if(Caption=='acosh' )

	{

	//2 log  (sqrt((x+1)/2) + sqrt((x-1)/2)) 

		Result = 2 * Math.log(Math.sqrt((CurrentValue + 1) / 2) + Math.sqrt((CurrentValue - 1) / 2));

		reset(Result);

	}

	if(Caption=='atanh' )

	{

	//0.5*log((x-1)/(x+1))

		Result = Math.log((CurrentValue - 1) / (CurrentValue + 1)) / 2;

		reset(Result);

	}

	if(Caption=='+/-')

		document.calculator.LED.value = eval(-CurrentValue);

	if(Caption=='=' && Complete && Operator!='0')

	{

		if (Operator=='^')

		{

			Result = Math.pow(Result, CurrentValue);

			reset(Result);

		} else

			reset(eval(Result + Operator + CurrentValue));

	}

	if (Caption=='C')

		reset(0);

	if(document.calculator.LED.value[0] == '.')

		document.calculator.LED.value = '0' + document.calculator.LED.value;

}

</script>



</HEAD>



<!-- STEP TWO: Copy this code into the BODY of your HTML document  -->



<BODY>



<!-- This script and many more are available free online at -->

<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Original:  Denis Makarov (info@binarythings.com) -->

<!-- Web Site:  http://www.binarythings.com -->

<form name="calculator">

  <table width="360" height="240" border="0" align="center" cellpadding="2" cellspacing="0">

    <tr> 

      <td colspan="4"> <input name="LED" type="text" value="0"> </td>

      <td><input type="button" name="C" value="C" onclick="Click('C')"></td>

      <td width="60"><input name="=" type="button" id="=2" value="=" onclick="Click('=')">

      </td>

    </tr>

    <tr> 

      <td colspan="2"> <input name="angle" type="radio" checked>

        Degrees</td>

      <td colspan="2"> <input name="angle" type="radio">

        Radians</td>

      <td colspan="2"> <input name="angle" type="radio">

        Gradients</td>

    </tr>

    <tr> 

      <td width="60"> <input name="sin" type="button" id="sin" value="sin" onclick="Click('sin')"></td>

      <td width="60"> <input name="cos" type="button" id="cos" value="cos" onclick="Click('cos')"></td>

      <td width="60"> <input name="tab" type="button" id="tab" value="tan" onclick="Click('tan')"></td>

      <td width="60"> <input name="sinh" type="button" id="sinh" value="sinh" onclick="Click('sinh')"></td>

      <td width="60"> <input name="cosh" type="button" id="cosh" value="cosh" onclick="Click('cosh')"></td>

      <td width="60"> <input name="tanh" type="button" id="tanh" value="tanh" onclick="Click('tanh')"></td>

    </tr>

    <tr> 

      <td width="60"> <input name="asin" type="button" id="asin" value="asin" onclick="Click('asin')"></td>

      <td width="60"> <input name="acos" type="button" id="acos" value="acos" onclick="Click('acos')"></td>

      <td width="60"> <input name="atan" type="button" id="atan" value="atan" onclick="Click('atan')"></td>

      <td width="60"> <input name="asinh" type="button" id="asinh" value="asinh" onclick="Click('asinh')"> 

      </td>

      <td width="60"> <input name="acosh" type="button" id="acosh" value="acosh" onclick="Click('acosh')"> 

      </td>

      <td width="60"> <input name="atanh" type="button" id="atanh" value="atanh" onclick="Click('atanh')"></td>

    </tr>

    <tr> 

      <td width="60"><input name="exp" type="button" id="exp" value="exp" onclick="Click('exp')"> 

      </td>

      <td width="60"><input name="7" type="button" id="7" value="7" onclick="Click('7')"> 

      </td>

      <td width="60"><input name="8" type="button" id="8" value="8" onclick="Click('8')"> 

      </td>

      <td width="60"><input name="9" type="button" id="9" value="9" onclick="Click('9')"> 

      </td>

      <td width="60"><input name="+" type="button" id="+" value="+" onclick="Click('+')"> 

      </td>

      <td width="60"><input name="^" type="button" id="^" value="^" onclick="Click('^')">

      </td>

    </tr>

    <tr> 

      <td width="60"><input name="log" type="button" id="log" value="log" onclick="Click('log')"> 

      </td>

      <td width="60"><input name="4" type="button" id="4" value="4" onclick="Click('4')"> 

      </td>

      <td width="60"><input name="5" type="button" id="5" value="5" onclick="Click('5')"> 

      </td>

      <td width="60"><input name="6" type="button" id="6" value="6" onclick="Click('6')"></td>

      <td width="60"><input name="-" type="button" id="-" value="-" onclick="Click('-')"> 

      </td>

      <td width="60"><input name="1/x" type="button" id="1/x2" value="1/x" onclick="Click('1/x')">

      </td>

    </tr>

    <tr> 

      <td width="60"><input name="ln" type="button" id="abs22" value="ln" onclick="Click('ln')"> 

      </td>

      <td width="60"><input name="1" type="button" id="1" value="1" onclick="Click('1')"> 

      </td>

      <td width="60"><input name="2" type="button" id="2" value="2" onclick="Click('2')"> 

      </td>

      <td width="60"><input name="3" type="button" id="3" value="3" onclick="Click('3')"> 

      </td>

      <td width="60"><input name="*" type="button" id="*" value="*" onclick="Click('*')"> 

      </td>

      <td width="60"><input name="pi" type="button" id="pi3" value="pi" onclick="Click('pi')">

      </td>

    </tr>

    <tr> 

      <td width="60"><input name="sqrt" type="button" id="sqrt" value="sqrt" onclick="Click('sqrt')"> 

      </td>

      <td width="60"><input name="0" type="button" id="0" value="0" onclick="Click('0')"> 

      </td>

      <td width="60"><input name="." type="button" id="." value="." onclick="Click('.')"> 

      </td>

      <td width="60"><input name="+/-" type="button" id="+/-2" value="+/-" onclick="Click('+/-')"> 

      </td>

      <td width="60"><input name="/" type="button" id="/" value="/" onclick="Click('/')"> 

      </td>

      <td width="60"><input name="e" type="button" id="pi4" value="e" onclick="Click('e')">

      </td>

    </tr>

  </table>

</form>




<!-- Script Size:  11.98 KB -->