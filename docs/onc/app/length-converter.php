<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Cut-N-Paste JavaScript



<!-- Begin
function initArray() {
this.length = initArray.arguments.length;
for (var i = 0; i < this.length; i++) {
this[i] = initArray.arguments[i];
   }
}
var isn01 = new initArray("4b","5b","8b","8b");
isn01[0] = "~01~10.3937~20.03281~30.01094~40.01~50.0004971~60.00001~70.000006214~8";
isn01[1] = "~02.540~11~20.08333~30.02778~40.0254~50.001263~60.0000254~70.00001578~8";
isn01[2] = "~030.48~112~21~30.3333~40.3048~50.01515~60.0003048~70.0001894~8";
isn01[3] = "~091.44~136~23~31~40.9144~50.04545~60.0009144~70.0005682~8";
isn01[4] = "~0100~139.37~23.281~31.0936~41~50.04971~60.001~70.0006214~8";
isn01[5] = "~02012~1792~266~322~420.12~51~60.0212~70.0125~8";
isn01[6] = "~0100000~139370~23281~31093.6~41000~549.71~61~70.6214~8";
isn01[7] = "~0160934~163360~25280~31760~41609~580~61.609~71~8";
function lenCon() {
for (var i = 0; i < 8; i++) {
if (document.isnform01.leni[i].checked) {
leni = i;
leninm = document.isnform01.leni[i].value;
   }
}
for (var i = 0; i < 8; i++) {
if (document.isnform01.leno[i].checked) {
leno = i;
lenonm = document.isnform01.leno[i].value;
   }
}
useri = document.isnform01.leninp.value;
if (useri == 0) {
useri = 1;
document.isnform01.leninp.value = useri;
}
mulstr = isn01[leni];
picker = "~" + leno;
ps = mulstr.indexOf(picker);
leno++;
picker = "~" + leno;
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
picker = useri + " " + leninm + " = " + picker + " " + lenonm
document.isnform01.lenout.value = picker;
}
// End -->
</SCRIPT>

<CENTER>
<TABLE BORDER=1 WIDTH=486>
<TR><TD COLSPAN=9 ALIGN=CENTER><FORM NAME="isnform01"><FONT COLOR="blue"><B>Length Equivalents</B></FONT></TD></TR>
<TR><TD COLSPAN=9 VALIGN=TOP><FONT SIZE=1><B>First, type the number you wish converted here: </B>
<INPUT TYPE="text" NAME="leninp" SIZE=30 VALUE="" onChange="lenCon();"><BR><B>Then, click radio buttons for desired conversion:</FONT></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>From:</B></FONT></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Centimeters<BR><INPUT TYPE="radio" NAME="leni" VALUE="Centimeters" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Inches<BR><INPUT TYPE="radio" NAME="leni" VALUE="Inches" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Feet<BR><INPUT TYPE="radio" NAME="leni" VALUE="Feet" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Yards<BR><INPUT TYPE="radio" NAME="leni" VALUE="Yards" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Meters<BR><INPUT TYPE="radio" NAME="leni" VALUE="Meters" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Chains<BR><INPUT TYPE="radio" NAME="leni" VALUE="Chains" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kilometers<BR><INPUT TYPE="radio" NAME="leni" VALUE="Kilometers" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Miles<BR><INPUT TYPE="radio" NAME="leni" VALUE="Miles" onClick = ""></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>To:</B></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Centimeters<BR><INPUT TYPE="radio" NAME="leno" VALUE="Centimeters" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Inches<BR><INPUT TYPE="radio" NAME="leno" VALUE="Inches" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Feet<BR><INPUT TYPE="radio" NAME="leno" VALUE="Feet" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Yards<BR><INPUT TYPE="radio" NAME="leno" VALUE="Yards" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Meters<BR><INPUT TYPE="radio" NAME="leno" VALUE="Meters" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Chains<BR><INPUT TYPE="radio" NAME="leno" VALUE="Chains" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kilometers<BR><INPUT TYPE="radio" NAME="leno" VALUE="Kilometers" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Miles<BR><INPUT TYPE="radio" NAME="leno" VALUE="Miles" onClick = ""></TD></TR>
<TR><TD COLSPAN=9 ALIGN=CENTER VALIGN=TOP><FONT SIZE=1><INPUT TYPE="button" VALUE=" Click for Conversion " onClick="lenCon();"> <INPUT TYPE="reset" VALUE=" Reset Values "><BR><INPUT TYPE="text" NAME="lenout" SIZE=60 VALUE="" onClick="lenCon();">
</FONT></TD></TR>
</TABLE>
</FORM>
</CENTER>