<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Ilan Kroo  kroo@leland.stanford.edu



<!-- Begin
function setEUnits() {
var str = document.forms[1].hunits.value;
if ( str== "ft") {
alert("Already in English Units.");
return;
}
document.forms[1].hunits.value = "ft"
document.forms[1].vunits.value = "ft/sec"
document.forms[1].lunits.value = "ft"
document.forms[2].tunits.value = "deg R"
document.forms[2].runits.value = "sl/ft^3"
document.forms[2].punits.value = "lb/ft^2"
document.forms[2].sunits.value = "ft/sec"
document.forms[2].muunits.value = "lb sec/ft^2"
document.forms[2].qunits.value = "lb/ft^2"
var h = document.forms[1].alt.value;
var v =document.forms[1].speed.value;
var rl = document.forms[1].rlength.value;
var tempVal = document.forms[2].temp.value
var rhoVal =  document.forms[2].rho.value
var pVal  = document.forms[2].press.value
var soundVal  = document.forms[2].ssound.value
var viscVal =  document.forms[2].visc.value
var machVal = document.forms[2].mach.value
var qVal  =document.forms[2].q.value
var cpstarVal  = document.forms[2].cpstar.value
var cpminVal  = document.forms[2].cpmin.value
var reynolds =  document.forms[2].reno.value
var cflam  = document.forms[2].cfl.value
var cfturb  =  document.forms[2].cft.value
document.forms[1].alt.value = h*3.2808
document.forms[1].speed.value = v*3.2808
document.forms[1].rlength.value = rl*3.2808
document.forms[2].temp.value =tempVal*1.8
document.forms[2].rho.value = rhoVal * .068521  * .028317
document.forms[2].press.value = pVal * .020885
document.forms[2].ssound.value = soundVal*3.2808
document.forms[2].visc.value = viscVal*.22481*.092903
document.forms[2].mach.value = machVal
document.forms[2].q.value = qVal * .020885
document.forms[2].cpstar.value = cpstarVal
document.forms[2].cpmin.value = cpminVal
document.forms[2].reno.value = reynolds
document.forms[2].cfl.value = cflam
document.forms[2].cft.value = cfturb
roundAll();
}
function setMUnits() {
var str = document.forms[1].hunits.value;
if ( str== "m") {
alert("Already in metric units.");
return;
}
Compute();
document.forms[1].hunits.value = "m"
document.forms[1].vunits.value = "m/sec"
document.forms[1].lunits.value = "m"
document.forms[2].tunits.value = "deg K"
document.forms[2].runits.value = "kg/m^3"
document.forms[2].punits.value = "N/m^2"
document.forms[2].sunits.value = "m/sec"
document.forms[2].muunits.value = "N sec/m^2"
document.forms[2].qunits.value = "N/m^2"
var h = document.forms[1].alt.value;
var v = document.forms[1].speed.value;
var rl = document.forms[1].rlength.value;
var tempVal = document.forms[2].temp.value
var rhoVal =  document.forms[2].rho.value
var pVal  = document.forms[2].press.value
var soundVal  = document.forms[2].ssound.value
var viscVal =  document.forms[2].visc.value
var machVal = document.forms[2].mach.value
var qVal  =document.forms[2].q.value
var cpstarVal  = document.forms[2].cpstar.value
var cpminVal  = document.forms[2].cpmin.value
var reynolds =  document.forms[2].reno.value
var cflam  = document.forms[2].cfl.value
var cfturb  =  document.forms[2].cft.value
document.forms[1].alt.value = h/3.2808
document.forms[1].speed.value = v/3.2808
document.forms[1].rlength.value = rl/3.2808
document.forms[2].temp.value =tempVal/1.8
document.forms[2].rho.value = rhoVal / .068521  / .028317
document.forms[2].press.value = pVal / .020885
document.forms[2].ssound.value = soundVal/3.2808
document.forms[2].visc.value = viscVal/.22481/.092903
document.forms[2].mach.value = machVal
document.forms[2].q.value = qVal / .020885
document.forms[2].cpstar.value = cpstarVal
document.forms[2].cpmin.value = cpminVal
document.forms[2].reno.value = reynolds
document.forms[2].cfl.value = cflam
document.forms[2].cft.value = cfturb
roundAll();
}
function ResetForm() {
document.forms[1].alt.value = "0.0"
document.forms[1].speed.value = "1.0"
document.forms[1].rlength.value = "1.0"
}
function Compute() {
// First set to English Units
var origUnits = "english";
var str = document.forms[1].hunits.value;
if ( str== "m") {
origUnits = "metric";
setEUnits();
}
var h = document.forms[1].alt.value;
var v =document.forms[1].speed.value;
var rl = document.forms[1].rlength.value;
var TEMPSL = 518.67;
var RHOSL = 0.00237689;
var PRESSSL = 2116.22;
var saTheta = 1.0
var saSigma = 1.0
var saDelta = 1.0
if ( h<232940 ){
saTheta = 1.434843 - h/337634;
saSigma = Math.pow( 0.79899-h/606330, 11.20114 );
saDelta = Math.pow( 0.838263-h/577922, 12.20114 );
}
if ( h<167323 ){
saTheta = 0.939268;
saSigma = 0.00116533 * Math.exp( (h-154200)/-25992 );
saDelta = 0.00109456 * Math.exp( (h-154200)/-25992 );
}
if ( h<154199 ){
saTheta = 0.482561 + h/337634;
saSigma = Math.pow( 0.857003+h/190115, -13.20114 );
saDelta = Math.pow( 0.898309+h/181373, -12.20114 );
}
if ( h<104987 ){
saTheta = 0.682457 + h/945374;
saSigma = Math.pow( 0.978261+h/659515, -35.16319 );
saDelta = Math.pow( 0.988626+h/652600, -34.16319 );
}
if ( h<65617 ){
saTheta = 0.751865;
saSigma = 0.297076 * Math.exp( (36089-h)/20806 );
saDelta = 0.223361 * Math.exp( (36089-h)/20806 );
}
if ( h<36089 ){
saTheta = 1.0 - h/145442;
saSigma = Math.pow( 1.0-h/145442, 4.255876 );
saDelta = Math.pow( 1.0-h/145442, 5.255876 );
}
var tempVal = TEMPSL * saTheta;
var rhoVal = RHOSL * saSigma;
var pVal = PRESSSL * saDelta;
var viscVal = 0.0226968*Math.pow( tempVal, 1.5 ) / ((tempVal)+198.72) / 1000000.0;
var soundVal = Math.sqrt( 1.4*1716.56*(tempVal) );
var machVal = v/soundVal
var qVal = 0.7*pVal*machVal*machVal
var reynolds = v*rl*rhoVal/viscVal
var cfturb = 0.455/Math.pow((Math.log(reynolds)/Math.log(10)),2.58)
var cflam = 1.328/Math.sqrt(reynolds)
document.forms[2].temp.value = tempVal
document.forms[2].rho.value =  rhoVal
document.forms[2].press.value =  pVal
document.forms[2].ssound.value =  soundVal
document.forms[2].visc.value =  viscVal
document.forms[2].mach.value =  machVal
document.forms[2].q.value =  qVal
document.forms[2].cpstar.value =  (Math.pow((1/1.2 + machVal*machVal/6.0),3.5)-1)/(0.7*machVal*machVal)
document.forms[2].cpmin.value =  -1.0/(0.7*machVal*machVal)
document.forms[2].reno.value = reynolds
document.forms[2].cfl.value = cflam
document.forms[2].cft.value = cfturb
if (origUnits == "metric") {
setMUnits();
}
roundAll();
}
// Rounding
function roundAll(){
document.forms[1].alt.value = truncNum(document.forms[1].alt.value,9)
document.forms[1].speed.value = truncNum(document.forms[1].speed.value,7)
document.forms[1].rlength.value = truncNum(document.forms[1].rlength.value,7)
document.forms[2].temp.value =truncNum(document.forms[2].temp.value,7)
document.forms[2].rho.value = truncNum(document.forms[2].rho.value,7)
document.forms[2].press.value = truncNum(document.forms[2].press.value,7)
document.forms[2].ssound.value = truncNum(document.forms[2].ssound.value ,8)
document.forms[2].visc.value = truncNum(document.forms[2].visc.value,10)
document.forms[2].mach.value = truncNum(document.forms[2].mach.value,6)
document.forms[2].q.value = truncNum(document.forms[2].q.value,7)
document.forms[2].cpstar.value = truncNum(document.forms[2].cpstar.value,6)
document.forms[2].cpmin.value = truncNum(document.forms[2].cpmin.value,6)
document.forms[2].reno.value = truncNum(document.forms[2].reno.value,9)
document.forms[2].cfl.value = truncNum(document.forms[2].cfl.value,7)
document.forms[2].cft.value = truncNum(document.forms[2].cft.value,7)
return;
}
function truncNum(inputVal, rsize) {
var instr = " " + inputVal
var inputlength = instr.length
if (inputlength<=rsize+1) return instr.substring(1, inputlength);
var epos = strpos(instr, "e")
if ( epos > rsize+1) {
var instr1 = instr.substring(1,rsize+1) + instr.substring(epos,inputlength);
return instr1;
}
var rounded = instr.substring(1, rsize+1);
return rounded;
}
function strpos(str, ch) {
for (var i = 0; i < str.length; i++)
if (str.substring(i, i+1) == ch) return i;
return -1;
}
// End -->
</SCRIPT>
<FORM name = "units">
Select unit system:
<INPUT TYPE="radio" VALUE="radio" NAME="unitbut" CHECKED="true" onClick="setEUnits()">English
<INPUT TYPE="radio" VALUE="radio" NAME="unitbut"  onClick="setMUnits()">Metric
</FORM>
<p>
<HR>
<H3>Inputs</H3>
<FORM name="inputs">
<table>
<tr>
<td>Altitude</td>
<td><INPUT NAME="alt" TYPE=text VALUE="0.0" SIZE=15></td>
<td><INPUT NAME="hunits" TYPE=text SIZE=6 VALUE="ft"></td>
</tr>
<tr>
<td>Speed</td>
<td><INPUT NAME="speed" TYPE="text"  VALUE="1.0" SIZE="15"></td>
<td><INPUT NAME="vunits" TYPE="text" SIZE="6" VALUE="ft/sec"></td>
</tr>
<tr>
<td>Reference Length</td>
<td><INPUT NAME="rlength" TYPE="text"  VALUE="1.0"  SIZE="15"></td>
<td><INPUT NAME="lunits" TYPE="text" SIZE="6" VALUE="ft"></td>
</tr>
</table>
<BR>
<BR>
<INPUT NAME="name" TYPE="button" VALUE="Compute" onClick="Compute()">
<INPUT NAME="name" TYPE="button" VALUE="Reset" onClick="ResetForm()">
</FORM>
<HR SIZE="4">
<H3>Results</H3>
<FORM name = "results">
<table>
<tr>
<td>Temperature</td>
<td><INPUT NAME="temp" TYPE="text" SIZE="15"></td>
<td><INPUT NAME="tunits" TYPE="text" SIZE="8" VALUE="�R"></td>
</tr>
<tr>
<td>Density</td>
<td><INPUT NAME="rho" TYPE="text" SIZE="15"></td>
<td><INPUT NAME="runits" TYPE="text" SIZE="8" VALUE="sl/ft^3"></td>
</tr>
<tr>
<td>Pressure</td>
<td><INPUT NAME="press" TYPE="text" SIZE="15"></td>
<td><INPUT NAME="punits" TYPE="text" SIZE="8" VALUE="lb/ft^2"></td>
</tr>
<tr><td>Speed of Sound</td>
<td><INPUT NAME="ssound" TYPE="text" SIZE="15"></td>
<td><INPUT NAME="sunits" TYPE="text" SIZE="8" VALUE="ft/sec"></td>
</tr>
<tr>
<td>Viscosity</td>
<td><INPUT NAME="visc" TYPE="text" SIZE="15"></td>
<td><INPUT NAME="muunits" TYPE="text" SIZE="11" VALUE="lb sec/ft^2"></td>
<tr></tr>
</tr>
<tr>
<td>Mach Number</td>
<td><INPUT NAME="mach" TYPE="text" SIZE="15"></td>
</tr>
<tr>
<td>Dynamic Pressure</td>
<td><INPUT NAME="q" TYPE="text" SIZE="15"></td>
<td><INPUT NAME="qunits" TYPE="text" SIZE="8" VALUE="lb/ft^2"></td>
</tr>
<tr>
<td>Critical Cp</td>
<td><INPUT NAME="cpstar" TYPE="text" SIZE="15"></td>
</tr>
<tr>
<td>Vacuum Cp</td>
<td><INPUT NAME="cpmin" TYPE="text" SIZE="15"></td>
<tr>
</tr>
</tr>
<tr>
<td>Reynolds Number</td>
<td><INPUT NAME="reno" TYPE="text" SIZE="15"></td>
</tr>
<tr>
<td>Laminar Cf</td>
<td><INPUT NAME="cfl" TYPE="text" SIZE="15"></td>
</tr>
<tr>
<td>Turbulent Cf</td>
<td><INPUT NAME="cft" TYPE="text" SIZE="15"></td>
</tr>
</table>
</FORM>