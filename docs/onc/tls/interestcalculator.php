<SCRIPT LANGUAGE="JavaScript">



<!-- Begin
function checkNumber(input, min, max, msg) {
msg = msg + " field has invalid data: " + input.value;
var str = input.value;
for (var i = 0; i < str.length; i++) {
var ch = str.substring(i, i + 1)
if ((ch < "0" || "9" < ch) && ch != '.') {
alert(msg);
return false;
      }
   }
var num = parseFloat(str)
if (num < min || max < num) {
alert(msg + " not in range [" + min + ".." + max + "]");
return false;
   }
input.value = str;
return true;
}
function computeField(input) {
if (input.value != null && input.value.length != 0)
input.value = "" + eval(input.value);
computeForm(input.form);
}
function computeForm(form) {
if ((form.payments.value == null || form.payments.value.length == 0) ||
(form.interest.value == null || form.interest.value.length == 0) ||
(form.principal.value == null || form.principal.value.length == 0)) {
return;
}
if (!checkNumber(form.payments, 1, 480, "# of payments") ||
!checkNumber(form.interest, .001, 99, "Interest") ||
!checkNumber(form.principal, 100, 10000000, "Principal")) {
form.payment.value = "Invalid";
return;
}
var i = form.interest.value;
if (i > 1.0) {
i = i / 100.0;
form.interest.value = i;
}
i /= 12;
var pow = 1;
for (var j = 0; j < form.payments.value; j++)
pow = pow * (1 + i);
money = "" + .01* Math.round(100*(form.principal.value * pow * i) / (pow - 1));
dec = money.indexOf(".");
dollars = money.substring(0,dec);
cents = money.substring(dec+1,dec+3);
cents = (cents.length < 2) ? cents + "0" : cents;
money = dollars + "." + cents;
form.payment.value = money;
}
function clearForm(form) {
form.payments.value = "";
form.interest.value = "";
form.principal.value = "";
}
// done hiding from old browsers -->
</SCRIPT>

<CENTER>
<FORM method=POST>
<TABLE border>
<TR>
<TD>
<DIV ALIGN=CENTER>  # of<br>Payments</DIV>
</TD>
<TD>
<DIV ALIGN=CENTER>Interest<br>Rate</DIV>
</TD>
<TD>
<DIV ALIGN=CENTER>Principal</DIV>
</TD>
<TD>
</TD>
<TD>
<DIV ALIGN=CENTER> Monthly<br> Payment</DIV>
</TD>
</TR>
<TR>
<TD>
<INPUT TYPE=TEXT NAME=payments  SIZE=5 onChange=computeField(this)>
</TD>
<TD>
<INPUT TYPE=TEXT NAME=interest  SIZE=6 onChange=computeField(this)>
</TD>
<TD>
<INPUT TYPE=TEXT NAME=principal SIZE=9 onChange=computeField(this)>
</TD>
<TD>
</TD>
<TD>
<INPUT TYPE=TEXT NAME=payment   SIZE=9 onChange=computeField(this)>
</TD>
<TD>
<INPUT TYPE="button" VALUE="Compute"   onClick=computeForm(this.form)>
</TD>
<TD>
<INPUT TYPE="reset"  VALUE="Reset"     onClick=clearForm(this.form)>
</TD>
</TR>
</FORM>
<FORM method=POST>
<TR>
<TD>
<INPUT TYPE=TEXT NAME=payments  SIZE=5 onChange=computeField(this)>
</TD>
<TD>
<INPUT TYPE=TEXT NAME=interest  SIZE=6 onChange=computeField(this)>
</TD>
<TD>
<INPUT TYPE=TEXT NAME=principal SIZE=9 onChange=computeField(this)>
</TD>
<TD>
</TD>
<TD>
<INPUT TYPE=TEXT NAME=payment   SIZE=9 onChange=computeField(this)>
</TD>
<TD>
<INPUT TYPE="button" VALUE="Compute"   onClick=computeForm(this.form)>
</TD>
<TD>
<INPUT TYPE="reset"  VALUE="Reset"     onClick=clearForm(this.form)>
</TD>
</TR>
</FORM>
<FORM method=POST>
<TR>
<TD>
<INPUT TYPE=TEXT NAME=payments  SIZE=5 onChange=computeField(this)>
</TD>
<TD>
<INPUT TYPE=TEXT NAME=interest  SIZE=6 onChange=computeField(this)>
</TD>
<TD>
<INPUT TYPE=TEXT NAME=principal SIZE=9 onChange=computeField(this)>
</TD>
<TD>
</TD>
<TD>
<INPUT TYPE=TEXT NAME=payment   SIZE=9 onChange=computeField(this)>
</TD>
<TD>
<INPUT TYPE="button" VALUE="Compute"   onClick=computeForm(this.form)>
</TD>
<TD>
<INPUT TYPE="reset"  VALUE="Reset"     onClick=clearForm(this.form)>
</TD>
</TR>
</TABLE>
</FORM>
</CENTER>