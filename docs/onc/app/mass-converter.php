<SCRIPT LANGUAGE="JavaScript">



<!-- Begin
function initArray() {
this.length = initArray.arguments.length;
for (var i = 0; i < this.length; i++) {
this[i] = initArray.arguments[i];
   }
}
/* Please don't ask about this work-around. It works... We're sure arrays
    will be better supported soon. */
var isn06 = new initArray("4b","5b","8b","8b");
isn06[0] = "~01~115432~232.15~335.27~42.6792~52.205~60.001102~70.0009842~80.001~9";
isn06[1] = "~06.48e-5~11~20.002083~30.002286~40.0001736~50.0001429~67.143e-8~76.378e-8~86.48e-8~9";
isn06[2] = "~00.0311~1480~21~31.09714~40.083333~50.06857~63.429e-5~73.061e-5~83.11e-5~9";
isn06[3] = "~00.02835~1437.5~20.9115~31~40.07595~50.0625~63.125e-5~72.79e-5~82.835e-5~9";
isn06[4] = "~00.3732~15760~212~313.17~41~50.8229~64.114e-4~73.673e-4~83.732e-4~9";
isn06[5] = "~00.4536~17000~214.58~316~41.215~51~60.0005~74.464e-4~84.536e-4~9";
isn06[6] = "~0907.2~114000000~229167~332000~42431~52000~61~70.8929~80.9072~9";
isn06[7] = "~01016~115680000~232667~335840~42722~52240~61.12~71~81.016~9";
isn06[8] = "~01000~115432356~232151~335274~42679~52205~61.102~70.9842~81~9";
function masCon() {
for (var i = 0; i < 9; i++) {
if (document.isnform06.masi[i].checked) {
masi = i;
masinm = document.isnform06.masi[i].value;
   }
}
for (var i = 0; i < 9; i++) {
if (document.isnform06.maso[i].checked) {
maso = i;
masonm = document.isnform06.maso[i].value;
   }
}
useri = document.isnform06.masinp.value;
if (useri == 0) {
useri = 1;
document.isnform06.masinp.value = useri;
}
mulstr = isn06[masi];
picker = "~" + maso;
ps = mulstr.indexOf(picker);
maso++;
picker = "~" + maso;
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
picker = useri + " " + masinm + " = " + picker + " " + masonm
document.isnform06.masout.value = picker;
}
// End -->
</SCRIPT>

<CENTER>
<TABLE BORDER=1 WIDTH=486>
<TR><TD COLSPAN=10 ALIGN=CENTER><FORM NAME="isnform06"><FONT COLOR="blue"><B>Mass Equivalents</B></FONT></TD></TR>
<TR><TD COLSPAN=10 VALIGN=TOP><FONT SIZE=1><B>First, type the number you wish converted here: </B>
<INPUT TYPE="text" NAME="masinp" SIZE=30 VALUE="" onChange="masCon();"><BR><B>Then, click radio buttons for desired conversion:</FONT></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>From:</B></FONT></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kilograms<BR>�<BR>
<INPUT TYPE="radio" NAME="masi" VALUE="Kilograms" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Grains<BR>�<BR>
<INPUT TYPE="radio" NAME="masi" VALUE="Grains" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Troy Ounces<BR>
<INPUT TYPE="radio" NAME="masi" VALUE="Troy Ounces" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Avoirdupois Ounces*<BR>
<INPUT TYPE="radio" NAME="masi" VALUE="Avoirdupois Ounces" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Troy Pounds<BR>
<INPUT TYPE="radio" NAME="masi" VALUE="Troy Pounds" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Avoirdupois Pounds*<BR>
<INPUT TYPE="radio" NAME="masi" VALUE="Avoirdupois Pounds" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Short Tons<BR>
<INPUT TYPE="radio" NAME="masi" VALUE="Short Tons" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Long Tons<BR>
<INPUT TYPE="radio" NAME="masi" VALUE="Long Tons" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Metric Tons<BR>
<INPUT TYPE="radio" NAME="masi" VALUE="Metric Tons" onClick = ""></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>To:</B></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kilograms<BR>�<BR>
<INPUT TYPE="radio" NAME="maso" VALUE="Kilograms" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Grains<BR>�<BR>
<INPUT TYPE="radio" NAME="maso" VALUE="Grains" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Troy Ounces<BR>
<INPUT TYPE="radio" NAME="maso" VALUE="Troy Ounces" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Avoirdupois Ounces*<BR>
<INPUT TYPE="radio" NAME="maso" VALUE="Avoirdupois Ounces" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Troy Pounds<BR>
<INPUT TYPE="radio" NAME="maso" VALUE="Troy Pounds" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Avoirdupois Pounds*<BR>
<INPUT TYPE="radio" NAME="maso" VALUE="Avoirdupois Pounds" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Short Tons<BR>
<INPUT TYPE="radio" NAME="maso" VALUE="Short Tons" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Long Tons<BR>
<INPUT TYPE="radio" NAME="maso" VALUE="Long Tons" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Metric Tons<BR>
<INPUT TYPE="radio" NAME="maso" VALUE="Metric Tons" onClick = ""></TD></TR>
<TR><TD COLSPAN=10 ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>
<INPUT TYPE="button" VALUE=" Click for Conversion " onClick="masCon();">
<INPUT TYPE="reset" VALUE=" Reset Values "><BR>
<INPUT TYPE="text" NAME="masout" SIZE=60 VALUE="" onClick="masCon();"><
BR>* Also known as Apothecary Ounces and Pounds
</FONT></TD></TR>
</TABLE>
</FORM>
</CENTER>
