
<script type="text/javascript" src="gasCostCalculator.js"></script>


<form name="gasform" class="gascalc">
<fieldset style="width: 350px;">
<legend><strong>Gas Cost Calculator</strong></legend>
<table>
<tr>
<td width="225"><label class="labl" for="dailymiles">Daily Mileage</label></td>
<td><input type="text" size="5" style="text-align: right;" id="dailymiles"></td>
</tr><tr>
<td><label class="labl" for="gastanksize">Gas Tank Size in Gallons</label></td>
<td><input type="text" size="5" style="text-align: right;" id="gastanksize"></td>
</tr><tr>
<td><label class="labl" for="daysperfillup">Days Between Fillups</label></td>
<td><input type="text" size="5" style="text-align: right;" id="daysperfillup"></td>
</tr><tr>
<td><label class="labl" for="costpergallon">Cost per Gallon (<em>in Dollars</em>)</label></td>
<td><input type="text" size="5" style="text-align: right;" id="costpergallon"></td>
</tr><tr>
<td><input name="calculate" value="Submit" onclick="calculate_mpg_savings(gasform)" type="button">
    
<input name="Reset" class="button" type="reset"></td>
</tr>
</table>
</fieldset>
<br>
<fieldset style="width: 350px;">
<legend><strong>My Gas Cost</strong></legend>
<table>
<tr>
<td width="225"><label class="labl" for="mpg">MPG </label></td>
<td><input type="text" size="10" style="text-align: right;" id="mpg" readonly="readonly"></td>
</tr><tr>
<td><label class="labl" for="monthlycost">Monthly Gas Cost </label></td>
<td><input type="text" size="10" style="text-align: right;" id="monthlycost" readonly="readonly"></td>
</tr><tr>
<td><label class="labl" for="yearlycost">Annual Gas Cost </label></td>
<td><input type="text" size="10" style="text-align: right;" id="yearlycost" readonly="readonly"></td>
</tr>
</table>
</fieldset>
</form>
