<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Keith Jenci -->
<!-- Web Site:  http://www.geocities.com/ResearchTriangle/Campus/3835 -->

<!-- This script and many more are available free online at -->
<!-- The JavaScript Source!! http://javascript.internet.com -->

<!-- Begin
var TIME = 1;
var DISTANCE = 2;
var PACE = 3;
var MILES = 0;
var METERS = 1;
var KILOMETERS = 2;
var TRUE = 1;
var FALSE = 0;

function calcIT() {
min=document.Calc.timeM.value;
sec=document.Calc.timeS.value;
time = (min * 1) + (sec / 60);
distance = document.Calc.distance.value;
minP = document.Calc.paceM.value;
secP = document.Calc.paceS.value;
pace = (minP * 1) + (secP / 60);
result = document.Calc.CalcWhat.options[document.Calc.CalcWhat.selectedIndex].value;
if (result == TIME) {
distConversion(TRUE);
paceConversion(TRUE);
time = distance * pace;
min = document.Calc.timeM.value = Math.floor(time);
document.Calc.timeS.value = Math.round(60 * (time - min));
}
else
if (result == DISTANCE) {
paceConversion(TRUE);
distance = time / pace;
distConversion(FALSE);
document.Calc.distance.value = decimalPlaces(distance, 2);
}
else
if (result == PACE) {
distConversion(TRUE);
pace = time / distance;
paceConversion(FALSE);
minP = Math.floor(pace);
secP = Math.round(60 * (pace - minP));
if (secP == 60) {
minP++;
secP = 0;
}
document.Calc.paceM.value = minP;
document.Calc.paceS.value = secP;
   }
}
function distConversion(toMeters) {
if (document.Calc.optDist[MILES].checked) {
distance = (toMeters) ? (distance * 1609) : (distance / 1609);
}
else
if (document.Calc.optDist[METERS].checked) {}
else
if (document.Calc.optDist[KILOMETERS].checked) {
distance = (toMeters) ? (distance * 1000) : (distance / 1000);
   }
}
function paceConversion(toMeters) {
if (document.Calc.optPace[MILES].checked) {
pace = (toMeters) ? (pace / 1609) : (pace * 1609);
}
else
if (document.Calc.optPace[METERS].checked) {
pace = (toMeters) ? (pace / 400) : (pace * 400);
}
else
if (document.Calc.optPace[KILOMETERS].checked) {
pace = (toMeters) ? (pace / 1000) : (pace * 1000);
   }
}
function decimalPlaces(val, places) {
factor = 1;
for (i = 0; i < places; i++) {
factor *= 10;
}
val *= factor;
val = Math.round(val);
val /= factor;
return val;
}
function checkCalc() {
choice = document.Calc.CalcWhat.selectedIndex;
if (choice == 0) {
alert('Please select what you would like to calculate:  time, distance, or pace.');
}
if (choice == 1) {
document.Calc.timeM.value='';
document.Calc.timeS.value='';
alert('To calculate your time, enter the distance traveled and your pace time per distance interval.');
}
if (choice == 2) {
document.Calc.distance.value='';
alert('To calculate your distance, enter the time elapsed and your pace time per distance interval.');
}
if (choice == 3) {
document.Calc.paceM.value='';
document.Calc.paceS.value='';
alert('To calculate your pace, enter the time elapsed and the distance traveled.');
   }
}
//  End -->
</script>

<center>
<form name="Calc">
<table border=1 cellpadding=10 cellspacing=0>
<tr>
<td>
<center>
<font size=+1><b>Calculate Your:  </b></font>
<select name=CalcWhat onChange="checkCalc();">
<option value=0 selected>- Choose -
<option value=1>Time
<option value=2>Distance
<option value=3>Pace
</select>
</center>
<p>
Time:  <input type=text name=timeM size=9> minutes, <input type=text name=timeS size=9> seconds
<p>
Distance:  <input type=text name=distance size=9><br>
(Measure in: <input type=radio name="optDist" value="miles" checked> Miles
<input type=radio name="optDist" value="kilometers"> Kilometers
<input type=radio name="optDist" value="meters"> Meters)
<p>
Pace time:  <input type=text name=paceM size=9> minutes, <input type=text name=paceS size=9> seconds<br>
(Pace distance: <input type=radio name="optPace" value="miles" checked>Miles
<input type=radio name="optPace" value="400meters">400m
<input type=radio name="optPace" value="kilometers">Kilometers)
</td>
</tr>
<tr>
<td colspan=2 align=center>
<input type=button value="Calculate" onClick="calcIT()">
</td>
</tr>
</table>
</form>
</center>

