<SCRIPT language="JavaScript">
<!-- Original:  Cut-N-Paste Javasript



<!-- Begin
function initArray() {
this.length = initArray.arguments.length;
for (var i = 0; i < this.length; i++) {
this[i] = initArray.arguments[i];
   }
}
/* Please don't ask about this work-around. It works... We're sure arrays
    will be better supported soon. */
var isn11 = new initArray("4b","5b","8b","8b");
isn11[0] = "~01~10.7457~21.014~30.7604~476.04~5550~60.1781~70.7068~8";
isn11[1] = "~01.3410~11~21.360~31.020~4102.0~5737.6~60.2388~70.9478~8";
isn11[2] = "~00.9863~10.7355~21~30.75~475~5542.5~60.1757~70.6971~8";
isn11[3] = "~01.315~10.9807~21.333~31~4100~5723.3~60.2342~70.9295~8";
isn11[4] = "~00.01315~10.009807~20.01333~30.01~41~57.233~60.002342~70.009295~8";
isn11[5] = "~00.00181818~10.001356~20.00184~30.00138~40.1383~51~60.0003238~70.001285~8";
isn11[6] = "~05.615~14.187~25.692~34.269~4426.9~53088~61~73.968~8";
isn11[7] = "~01.415~11.055~21.434~31.076~4107.6~5778.2~60.2520~71~8";
function powerCon() {
for (var i = 0; i < 8; i++) {
if (document.isnform11.poweri[i].checked) {
powi = i;
powinm = document.isnform11.poweri[i].value;
   }
}
for (var i = 0; i < 8; i++) {
if (document.isnform11.powero[i].checked) {
powo = i;
powonm = document.isnform11.powero[i].value;
   }
}
useri = document.isnform11.powerin.value;
mulstr = isn11[powi];
picker = "~" + powo;
ps = mulstr.indexOf(picker);
powo++;
picker = "~" + powo;
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
picker = useri + " " + powinm + " = " + picker + " " + powonm
document.isnform11.powerout.value = picker;
}
// End -->
</SCRIPT>



<CENTER>
<FORM NAME="isnform11">
<TABLE BORDER=1 WIDTH=486>
<TR><TD COLSPAN=9 ALIGN=CENTER><FONT
COLOR="blue"><B>Power Equivalents</B></FONT></TD></TR>
<TR><TD COLSPAN=9 VALIGN=TOP><FONT SIZE=1><B>Type the number
you wish converted here: </B>
<INPUT TYPE="text" NAME="powerin" SIZE=30 VALUE=""
onChange="powerCon();"><BR><B>Then click radio buttons for desired
conversion:</FONT></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>From:</B></FONT></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Hp<BR><INPUT TYPE="radio"
NAME="poweri" VALUE="Hp" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Metric hp<BR><INPUT
TYPE="radio" NAME="poweri" VALUE="Metric hp" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kw<BR><INPUT TYPE="radio"
NAME="poweri" VALUE="Kw" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Poncelets<BR><INPUT
TYPE="radio" NAME="poweri" VALUE="Poncelets" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kg-m/sec<BR><INPUT
TYPE="radio" NAME="poweri" VALUE="Kg-m/sec" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Ft-lb/sec<BR><INPUT
TYPE="radio" NAME="poweri" VALUE="Ft-lb/sec" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kcal/sec<BR><INPUT
TYPE="radio" NAME="poweri" VALUE="Kcal/sec" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Btu/sec<BR><INPUT
TYPE="radio" NAME="poweri" VALUE="Btu/sec" onClick = ""></TD></TR>
<TR><TD ALIGN=CENTER><FONT COLOR="red" SIZE=1><B>To:</B></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Hp<BR><INPUT
TYPE="radio" NAME="powero" VALUE="Hp" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Metric Hp<BR><INPUT
TYPE="radio" NAME="powero" VALUE="Metric Hp" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kw<BR><INPUT
TYPE="radio" NAME="powero" VALUE="Kw" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Poncelets<BR><INPUT
TYPE="radio" NAME="powero" VALUE="Poncelets" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kg-m/sec<BR><INPUT
TYPE="radio" NAME="powero" VALUE="Kg-m/sec" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Ft-lb/sec<BR><INPUT
TYPE="radio" NAME="powero" VALUE="Ft-lb/sec" CHECKED onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Kcal/sec<BR><INPUT
TYPE="radio" NAME="powero" VALUE="Kcal/sec" onClick = ""></TD>
<TD ALIGN=CENTER VALIGN=TOP><FONT SIZE=1>Btu/sec<BR><INPUT
TYPE="radio" NAME="powero" VALUE="Btu/sec" onClick = ""></TD></TR>
<TR><TD COLSPAN=9 VALIGN=TOP><FONT SIZE=1><INPUT TYPE="button"
VALUE=" Click for Conversion " onClick="powerCon();"><INPUT
TYPE="reset" VALUE=" Reset Values "><INPUT TYPE="text"
NAME="powerout" SIZE=30 VALUE="" onClick="powerCon();">
</FONT></TD></TR>
</TABLE></FORM>
</CENTER>