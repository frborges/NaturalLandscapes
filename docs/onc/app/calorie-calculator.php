<SCRIPT LANGUAGE="JavaScript">



<!-- Begin
var myWeight;
var myDistance;
function HowMany(form) {
var difference;
difference = (myDistance * myWeight) * .653;
form.Fdiff.value = difference;

if (difference < 100) {
form.comment.value="You better start working!";
}
if (difference >  101 && difference < 200) {
form.comment.value="Nice run, but you can do better.";
}
if (difference >  201 && difference < 300) {
form.comment.value="Very good!  Push above 300 next time.";
}
if (difference >  301 && difference < 500) {
form.comment.value="Great!  Your a runner.....keep it up!";
}
if (difference >  501 && difference < 700) {
form.comment.value="Bill Rogers move over!";
}
if (difference > 701) {
form.comment.value="Your my hero!  Have a jelly doughnut.";
}
}
function SetMyWeight(weight) {
myWeight = weight.value;
}
function SetmyDistance(dis) {
myDistance = dis.value;
}
function ClearForm(form){
form.myWeight.value = "";
form.myDistance.value = "";
form.Fdiff.value = "";
form.comment.value = "";
}
// End -->
</SCRIPT>

<CENTER>
<FORM METHOD="POST">
<TABLE border=3>
<TR>
<TR>
<TD><div align=center>Your<br>Weight</div></TD>
<TD><div align=center>Miles<br>run</div></TD>
<TD><div align=center>Calories<br>burned</div></TD>
<TD><INPUT TYPE=BUTTON ONCLICK="HowMany(this.form)" VALUE="Calculate"></TD>
</TR>
<tr>
<TD><div align=center><INPUT TYPE=text  NAME=myWeight SIZE="4"ONCHANGE="SetMyWeight(this)"></div></TD>
<TD><div align=center><INPUT TYPE=text  NAME=myDistance SIZE="4"ONCHANGE="SetmyDistance(this)"></div></TD>
<TD><div align=center><INPUT TYPE=text NAME="Fdiff" VALUE="" SIZE="6"></div></TD>
<TD><div align=center><INPUT TYPE=BUTTON VALUE="   Reset   " onClick="ClearForm(this.form)"></div></tr>
</table>
<table border=3>
<tr>
<TD><DIV ALIGN=CENTER>Comments</DIV></TD>
<TD><INPUT TYPE=text NAME="comment" size="37"></td>
</TR>
</TABLE>
</FORM>
</CENTER>