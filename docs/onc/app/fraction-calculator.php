
<!-- TWO STEPS TO INSTALL FRACTION CALCULATOR:

  1.  Copy the coding into the HEAD of your HTML document
  2.  Add the last code into the BODY of your HTML document  -->

<!-- STEP ONE: Paste this code into the HEAD of your HTML document  -->

<HEAD>

<script type="text/javascript">
<!--
/* This script and many more are available free online at
The JavaScript Source!! http://www.javascriptsource.com
Created by: Matthew Roy :: http://matthewroy.com */

/*****************************************
**   Matthew C. Roy
**   Big Business Websites
**   For Small Business Prices!
**   http://www.matthewroy.com
**
**   You may use this script freely for
**   non-commercial use as long
**   as this header is left intact.
*****************************************/

var n1, n2, d1, d2, An, Ad, Op;
var neg=1;

function solve(){
  //If all fields are numbers
  if(!isNaN(document.calc.n1.value)&&!isNaN(document.calc.d1.value)&&!isNaN(document.calc.n2.value)&&!isNaN(document.calc.d2.value)){
  //If no fields are blank
  if(document.calc.n1.value!=''&&document.calc.d1.value!=''&&document.calc.n2.value!=''&&document.calc.d2.value!=''){
    //Set variables:
    n1=document.calc.n1.value;// Numerator 1
    d1=document.calc.d1.value;// Numerator 2
    n2=document.calc.n2.value;// Denominator 1
    d2=document.calc.d2.value;// Denominator 2
    Op=document.calc.Op.value;// Operator
    } else {
    //If blank field
    alert('Please fill-in all fields!');
    }
  } else {
  //If field has non-number
  alert('Please enter only Numbers into the fields!');
  }

  //Which Operation
  switch (Op){
  case '+':
    //add fractions using formula ((n1*d2)+(n2*d1)) over (d1*d2)
    An=(n1*d2)+(n2*d1) //Answer Numerator
    Ad=(d1*d2) //Answer Denominator
    if(document.calc.reduce.checked==1){
      reduce();
    } else {
      display();
    }
   break

  case '-':
    //subtract fractions using formula ((n1*d2)-(n2*d1)) over (d1*d2)
    An=(n1*d2)-(n2*d1)//Answer Numerator
    Ad=(d1*d2)//Answer Denominator
    if(document.calc.reduce.checked==1){
      reduce();
    } else {
      display();
    }
   break

  case '*':
    //multiply fractions using formula (n1*n2) over (d1*d2)
    An=n1*n2;//Answer Numerator
    Ad=d1*d2; //Answer Denominator
    if(document.calc.reduce.checked==1){
            reduce();
    } else {
      display();
    }
    break

  case '/':
    //divide fractions using formula (n1*d2) over (d1*n2)
    An=n1*d2;//Answer Numerator
    Ad=d1*n2;//Answer Denominator
    if(document.calc.reduce.checked==1){
      reduce();
    } else {
      display();
    }
   break
  }
}

function reduce() {
  neg=1; //1 if positive, -1 if negative
  //convert to strings
  ng=An+'';
  dg=Ad+''
  if(ng.indexOf('-')!=-1){  //check to see if answer is negative.
    neg=-1
  }
  if(dg.indexOf('-')!=-1){
    neg=-1
  }
  if(ng.indexOf('-')!=-1&&dg.indexOf('-')!=-1)  {//if both numerator and denominator are negative the answer is positive
    neg=1
  }
  var factorX //highest common factor

  if ( An == 0 || Ad == 0 ) {
    factorX=1;
    return;
  }

  An = Math.abs( An );
  Ad = Math.abs( Ad );

  var factorX = 1;

  //Find common factors of Numerator and Denominator
  for ( var x = 2; x <= Math.min( An, Ad ); x ++ ) {
    var check1 = An / x;
    if ( check1 == Math.round( check1 ) ) {
      var check2 = Ad / x;
      if ( check2 == Math.round( check2 ) ) {
        factorX = x;
      }
    }
  }

  An=(An/factorX)*neg;  //divide by highest common factor to reduce fraction then multiply by neg to make positive or negative
  Ad=Ad/factorX;  //divide by highest common factor to reduce fraction
  display();
}

function display(){
  //Display answer
  document.calc.An.value = An;
  document.calc.Ad.value = Ad;
}

// -->
</script>
</HEAD>

<!-- STEP TWO: Copy this code into the BODY of your HTML document  -->

<BODY>

<table width="200" align="center" border="0" cellspacing="0" cellpadding="4" style="background-color:#ffffff;border:1px #000000 solid;">
  <tr>
    <td align="center" valign="middle">
      <h3>Fraction Calculator</h3>
      <form name="calc">
        <table width="150" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td style="border-bottom:2px #000000 solid;"><input type="text" size="2"  name="n1" id="n1" tabindex="1"></td>
            <td rowspan="2" align="center" valign="middle">
              <select name="Op" tabindex="3">
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="*">x</option>
              <option value="/">÷</option>
              </select>
            </td>
            <td style="border-bottom:2px #000000 solid;"><input type="text" size="2" name="n2" id="n2" tabindex="4"></td>
            <td rowspan="2" align="center" valign="middle"><input type="button" value=" = "onClick="solve();" tabindex="6"></td>
            <td style="border-bottom:2px #000000 solid;"><input type="text" size="2" name="An" id="An" readonly="1"></td>
          </tr>
          <tr>
            <td><input type="text" size="2" name="d1" id="d1" tabindex="2"></td>
            <td><input type="text" size="2" name="d2" id="d2" tabindex="5"></td>
            <td><input type="text" size="2" name="Ad" id="Ad" readonly="1"></td>
          </tr>
        </table>
      <br><input type="checkbox" name="reduce" id="reduce" checked> Reduce
    </form>
    </td>
  </tr>
</table>

<p><center>
<font face="arial, helvetica" size"-2">Free JavaScripts provided<br>
by <a href="http://javascriptsource.com">The JavaScript Source</a></font>
</center><p>

<!-- Script Size:  5.86 KB -->