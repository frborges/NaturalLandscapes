<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Cut-N-Paste JavaScript



<!--Begin
function initArray() {
this.length = initArray.arguments.length;
for (var i = 0; i < this.length; i++)
{this[i] = initArray.arguments[i];
   }
}
var isn04 = new initArray("4b","5b","8b","8b");
isn04[0] = "~01~11550~210.76~31.196~40.0395~50.002471~60.0009884~70.0002471~80.0000003861~9";
isn04[1] = "~00.0006452~11~20.006944~30.0007716~40.00002551~50.000001594~60.0000006377~70.0000001594~82.291e-10~9";
isn04[2] = "~00.09290~1144~21~30.1111~40.003673~50.0002296~60.00009183~70.00002296~83.587e-8~9";
isn04[3] = "~00.8361~11296~29~31~40.03306~50.002066~60.0008264~70.0002066~83.228e-7~9";
isn04[4] = "~025.29~139204~2272.25~330.25~41~50.0625~60.025~70.00625~89.766e-6~9";
isn04[5] = "~0404.7~1627264~24356~3484~416~51~60.4~70.1~80.00015625~9";
isn04[6] = "~01012~11568160~210890~31210~440~52.5~61~70.25~80.000390625~9";
isn04[7] = "~04047~16272640~243560~34840~4160~510~64~71~80.0015625~9";
isn04[8] = "~02589988~14013355318~227878400~33097600~4102400~56400~62560~7640~81~9";
function areCon() {
for (var i = 0; i < 9; i++) {
if (document.isnform04.arei[i].checked) {
arei = i;
areinm = document.isnform04.arei[i].value;
   }
}
for (var i = 0; i < 9; i++) {
if (document.isnform04.areo[i].checked) {
areo = i;
areonm = document.isnform04.areo[i].value;
   }
}
useri = document.isnform04.areinp.value;
if (useri == 0) {
useri = 1;
document.isnform04.areinp.value = useri;
}
mulstr = isn04[arei];
picker = "~" + areo;
ps = mulstr.indexOf(picker);
areo++;
picker = "~" + areo;
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
picker = useri + " " + areinm + " = " + picker + " " + areonm
document.isnform04.areout.value = picker;
}
// End -->
</SCRIPT>


<CENTER>
<TABLE BORDER=1 WIDTH=486>
<TR><TD COLSPAN=9 ALIGN=CENTER><FORM NAME="isnform04"><FONT COLOR="blue"><B>Area Equivalents</B></FONT></TD></TR>
<TR><TD COLSPAN=10 VALIGN=TOP><FONT SIZE=1><B>First, type the number you wish converted here: </B>
<INPUT TYPE="text" NAME="areinp" SIZE=30 VALUE="" onChange="areCon();"><BR><B>Then, click radio buttons for desired conversion:</FONT></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>From:</B></FONT></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Meters<BR>
<INPUT TYPE="radio" NAME="arei" VALUE="Square Meters" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Inches<BR>
<INPUT TYPE="radio" NAME="arei" VALUE="Square Inches" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Feet<BR>
<INPUT TYPE="radio" NAME="arei" VALUE="Square Feet" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Yards<BR>
<INPUT TYPE="radio" NAME="arei" VALUE="Square Yards" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Rods<BR>
<INPUT TYPE="radio" NAME="arei" VALUE="Square Rods" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Chains<BR>
<INPUT TYPE="radio" NAME="arei" VALUE="Square Chains" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Roods<BR> <BR>
<INPUT TYPE="radio" NAME="arei" VALUE="Roods" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Acres<BR> <BR>
<INPUT TYPE="radio" NAME="arei" VALUE="Acres" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Miles<BR>
<INPUT TYPE="radio" NAME="arei" VALUE="Square Miles" onClick = ""></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>To:</B></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Meters<BR>
<INPUT TYPE="radio" NAME="areo" VALUE="Square Meters" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Inches<BR>
<INPUT TYPE="radio" NAME="areo" VALUE="Square Inches" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Feet<BR>
<INPUT TYPE="radio" NAME="areo" VALUE="Square Feet" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Yards<BR>
<INPUT TYPE="radio" NAME="areo" VALUE="Square Yards" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Rods<BR>
<INPUT TYPE="radio" NAME="areo" VALUE="Square Rods" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Chains<BR>
<INPUT TYPE="radio" NAME="areo" VALUE="Square Chains" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Roods<BR> <BR>
<INPUT TYPE="radio" NAME="areo" VALUE="Roods" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Acres<BR> <BR>
<INPUT TYPE="radio" NAME="areo" VALUE="Acres" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Square Miles<BR>
<INPUT TYPE="radio" NAME="areo" VALUE="Square Miles" onClick = ""></TD></TR>
<TR>
<TD COLSPAN=10 ALIGN=CENTER VALIGN=TOP>
<FONT SIZE=1>
<INPUT TYPE="button" VALUE=" Click for Conversion " onClick="areCon();">
<INPUT TYPE="reset" VALUE=" Reset Values "><BR>
<INPUT TYPE="text" NAME="areout" SIZE=60 VALUE="" onClick="areCon();">
</FONT></TD></TR>
</FORM></TABLE>
</CENTER>
