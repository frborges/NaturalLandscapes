<!-- TWO STEPS TO INSTALL AMORTIZATION CALCULATOR:
 
  1.  Copy the coding into the HEAD of your HTML document
  2.  Add the last code into the BODY of your HTML document  -->
 
<!-- STEP ONE: Paste this code into the HEAD of your HTML document  -->
 
<HEAD>
 
<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
<!-- Original:  Paul Baggethun -->
<script src="amortizationCalc11.js" type="text/javascript"></script>
</HEAD>
 
<!-- STEP TWO: Copy this code into the BODY of your HTML document  -->
 
<BODY>
 
<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->
<!-- Original:  Paul Baggethun -->
<p>
<table cellpadding=2 style="border:2px outset;background-color:silver;font-size:smaller;">
<tr>  <td>  Loan Amount
    <td>  <input id=amount name=amount type=text value=6000 size=10>
<tr>  <td>  Interest Rate (APR)
<td>  <input id=apr name=apr type=text value=10.0 size=10>
<tr>  <td>  Term (months)
<td>  <input id=term name=term type=text value=24 size=10>
<tr>  <td align=right colspan=2>
<button onclick="getAmortization(document.getElementById('amount').value,document.getElementById('term').value,document.getElementById('apr').value)" width=100 height=50">Calculate</button>
</table>
</p>
<p>
<textarea id="amortizationtable" rows="16" cols="70" wrap="off" style="visibility:hidden;background-color:silver"></textarea>
</p>
 
<p><center>
<font face="arial, helvetica" size"-2">Free JavaScripts provided<br>
by <a href="http://javascriptsource.com">The JavaScript Source</a></font>
</center><p>
 
<!-- Script Size:  1.72 KB -->