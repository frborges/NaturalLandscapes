<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Cut-N-Paste JavaScript



<!-- Begin
function initArray() {
this.length = initArray.arguments.length;
for (var i = 0; i < this.length; i++) {
this[i] = initArray.arguments[i];
   }
}
var isn10 = new initArray("4b","5b","8b","8b");
isn10[0] = "~01~10.10197~20.7376~32.778e-7~43.777e-7~53.725e-7~60.009869~70.0002388~80.0009478~9";
isn10[1] = "~09.80665~11~27.233~32.724e-6~43.7037e-6~53.653e-6~60.09678~70.002342~80.009295~9";
isn10[2] = "~01.356~10.1383~21~33.766e-7~45.1206e-7~55.0505e-7~60.01338~70.0003238~80.001285~9";
isn10[3] = "~03.6e6~13.671e5~22.655e6~31~41.3596~51.341~635528~7859.9~83412~9";
isn10[4] = "~02.648e6~12.7e5~21.9529e6~30.7355~41~50.9863~626131~7632.4~82510~9";
isn10[5] = "~02.6845e6~12.7375e5~21.98e6~30.7457~41.0139~51~626493~7641.2~82544~9";
isn10[6] = "~0101.333~110.333~274.74~32.815e-5~43.827e-5~53.775e-5~61~70.0242~80.09604~9";
isn10[7] = "~04187~1426.9~23088~30.001163~40.001581~50.001560~641.32~71~83.968~9";
isn10[8] = "~01055~1107.6~2778.2~32.931e-4~43.985e-4~53.93e-4~610.41~70.252~81~9";
function eneCon() {
for (var i = 0; i < 9; i++) {
if (document.isnform10.enei[i].checked) {
enei = i;
eneinm = document.isnform10.enei[i].value;
   }
}
for (var i = 0; i < 9; i++) {
if (document.isnform10.eneo[i].checked) {
eneo = i;
eneonm = document.isnform10.eneo[i].value;
   }
}
useri = document.isnform10.eneinp.value;
if (useri == 0) {
useri = 1;
document.isnform10.eneinp.value = useri;
}
mulstr = isn10[enei];
picker = "~" + eneo;
ps = mulstr.indexOf(picker);
eneo++;
picker = "~" + eneo;
ps1 = mulstr.indexOf(picker);
mulstr = mulstr.substring((ps + 2),ps1);
ps = (useri * mulstr);
picker = "";
picker += ps
ps1 = picker.indexOf(".");
if (ps1 > -1) {
ps = ps + .000001;
picker = "";
picker += ps;
ps2 = picker.indexOf("e");
if (ps2 < 0) {
picker = picker.substring(0,(ps1 + 6));
}
if (ps2 == 0 || ps2 > 0) {
ps3 = picker.indexOf("00000");
if (ps3 > 0) {
picker = picker.substring(0,ps3 + 1) + picker.substring(ps2,picker.length);
     }
   }
}
picker = useri + " " + eneinm + " = " + picker + " " + eneonm
document.isnform10.eneout.value = picker;
}
// End -->
</SCRIPT>

<CENTER>
<TABLE BORDER=1 WIDTH=486>
<TR><TD COLSPAN=10 ALIGN=CENTER><FORM NAME="isnform10"><FONT COLOR="blue"><B>Energy To Work Equivalents</B></TD></TR>
<TR><TD COLSPAN=10 VALIGN=TOP><FONT SIZE=1><B>First, type the number you wish converted here: </B>
<INPUT TYPE="text" NAME="eneinp" SIZE=30 VALUE="" onChange="eneCon();"><BR><B>Then, click radio buttons for desired conversion:</FONT></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>Fm:</B></FONT></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Joules<BR>
<INPUT TYPE="radio" NAME="enei" VALUE="Joules" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kg-meters<BR>
<INPUT TYPE="radio" NAME="enei" VALUE="Kg-meters" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Ft-lbs<BR>
<INPUT TYPE="radio" NAME="enei" VALUE="Ft-lbs" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kw-hrs<BR>
<INPUT TYPE="radio" NAME="enei" VALUE="Kw-hrs" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Metric Hp-hrs<BR>
<INPUT TYPE="radio" NAME="enei" VALUE="Metric Hp-hrs" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>US Hp-hrs<BR>
<INPUT TYPE="radio" NAME="enei" VALUE="US Hp-hrs" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Liter-atm<BR>
<INPUT TYPE="radio" NAME="enei" VALUE="Liter-atm" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>K-cal<BR>
<INPUT TYPE="radio" NAME="enei" VALUE="K-cal" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Btu<BR>
<INPUT TYPE="radio" NAME="enei" VALUE="Btu" onClick = ""></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>To:</B></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Joules<BR>
<INPUT TYPE="radio" NAME="eneo" VALUE="Joules" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kg-meters<BR>
<INPUT TYPE="radio" NAME="eneo" VALUE="Kg-meters" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Ft-lbs<BR>
<INPUT TYPE="radio" NAME="eneo" VALUE="Ft-lbs" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kw-hrs<BR>
<INPUT TYPE="radio" NAME="eneo" VALUE="Kw-hrs" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Metric Hp-hrs<BR>
<INPUT TYPE="radio" NAME="eneo" VALUE="Metric Hp-hrs" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>US Hp-hrs<BR>
<INPUT TYPE="radio" NAME="eneo" VALUE="US Hp-hrs" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Liter-atm<BR>
<INPUT TYPE="radio" NAME="eneo" VALUE="Liter-atm" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>K-cal<BR>
<INPUT TYPE="radio" NAME="eneo" VALUE="K-cal" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Btu<BR>
<INPUT TYPE="radio" NAME="eneo" VALUE="Btu" onClick = ""></TD></TR>
<TR><TD COLSPAN=10 ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>
<INPUT TYPE="button" VALUE=" Click for Conversion " onClick="eneCon();">
<INPUT TYPE="reset" VALUE=" Reset Values "><BR><INPUT TYPE="text" NAME="eneout" SIZE=60 VALUE="" onClick="eneCon();">
</FONT></TD></TR>
</TABLE>
</FORM>
</CENTER>