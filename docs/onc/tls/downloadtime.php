<SCRIPT LANGUAGE="JavaScript">

<!-- Begin


function MakeArray(n) {

this.length = n;

for (var i = 1; i <= n; i++) {

this[i] = 0 }

return this

}

speedVar = new MakeArray(11);

speedVar[1] = "1.1719"
speedVar[2] = "1.7578"
speedVar[3] = "3.5156"
speedVar[4] = "6.8359"
speedVar[5] = "7.8125"
speedVar[6] = "16.6250"
speedVar[7] = "187.9883"
speedVar[8] = "1220.7031"
speedVar[9] = "3295.8984"
speedVar[10] = "5493.1641"
speedVar[11] = "18920.8984"

function compute(form, mult){

for (i=1; i < 12; i++){

if (form.size.value==null||form.size.value.length==0){

form.size.value=0;}

if (form[i+"hour"].value==null||form[i+"hour"].value.length==0){

form[i+"hour"].value=0;}

if (form[i+"minute"].value==null||form[i+"minute"].value.length==0){

form[i+"minute"].value=0;}

if (form[i+"second"].value==null||form[i+"second"].value.length==0){

form[i+"second"].value=0;}

if (mult != 0 && form.size.value != 0){

with (Math){

var speed = speedVar[i];

var TotalTime = ((form.size.value*mult)/speed);

var TotalHours = floor((TotalTime/3600));

var TotalHoursMod = (TotalTime%3600);

var TotalMin = floor(TotalHoursMod/60);

var TotalMinMod = (TotalHoursMod%60);

var TotalSec = floor(TotalMinMod);

form[i+"hour"].value=TotalHours;

form[i+"minute"].value=TotalMin;

form[i+"second"].value=TotalSec;

      }

   }

}

return;

}

// End -->

</SCRIPT>


<FORM>

<TABLE BORDER="4">

<TR>

<TD>File Size?

<INPUT TYPE="TEXT" NAME="size" SIZE="10">
<INPUT TYPE="BUTTON" OnClick="compute(this.form, 1)" VALUE="KB">
<INPUT TYPE="BUTTON" OnClick="compute(this.form, 1024)" VALUE="MB">

</TD>

<TD colspan=3><CENTER><B>It will take you ....</B></CENTER>

</TD>

</TR>

<TR>

<TH>If your modem is a ....</TH>

<TH>Hours </TH>

<TH>Minutes </TH>

<TH>Seconds</TH>

</TR>

<TR>

<TD BGCOLOR="#ffffff">9.6 Kb</TD>
<TD><INPUT TYPE="TEXT" NAME="1hour" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="1minute" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="1second" SIZE="6"></TD>

</TR>

<TR>

<TD BGCOLOR="#ffffff">14.4 Kb</TD>
<TD><INPUT TYPE="TEXT" NAME="2hour" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="2minute" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="2second" SIZE="6"></TD>

</TR>

<TR>

<TD BGCOLOR="#ffffff">28.8 Kb</TD>
<TD><INPUT TYPE="TEXT" NAME="3hour" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="3minute" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="3second" SIZE="6"></TD>

</TR>

<TR>

<TD BGCOLOR="#ffffff">56 Kb</TD>
<TD><INPUT TYPE="TEXT" NAME="4hour" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="4minute" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="4second" SIZE="6"></TD>

</TR>

<TR>

<TD BGCOLOR="#ffffff">ISDN (64 Kb)</TD>
<TD><INPUT TYPE="TEXT" NAME="5hour" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="5minute" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="5second" SIZE="6"></TD>

</TR>

<TR>

<TD BGCOLOR="#ffffff">ISDN (128 Kb)</TD>
<TD><INPUT TYPE="TEXT" NAME="6hour" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="6minute" SIZE="6"> </TD>
<TD><INPUT TYPE="TEXT" NAME="6second" SIZE="6"></TD>

</TR>

<TR>

<TD BGCOLOR="#ffffff"></TD>

<TD><INPUT TYPE="HIDDEN" NAME="7hour" SIZE="6"> </TD>
<TD><INPUT TYPE="HIDDEN" NAME="7minute" SIZE="6"> </TD>
<TD><INPUT TYPE="HIDDEN" NAME="7second" SIZE="6"></TD>

</TR>

<INPUT TYPE="HIDDEN" NAME="8hour" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="8minute" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="8second" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="9hour" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="9minute" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="9second" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="10hour" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="10minute" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="10second" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="11hour" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="11minute" SIZE="6">
<INPUT TYPE="HIDDEN" NAME="11second" SIZE="6">

</TABLE>

</FORM>