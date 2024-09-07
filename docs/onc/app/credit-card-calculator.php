
<script type="text/javascript" src="creditCardDebtCalculator.js"></script>



<div style="width: 400px;">
<form>
<table border="0" cellspacing="0" cellpadding="0" style="width:80%">
<tbody>
<tr>
<td>Total Credit Card Debt:</td>
<td style="width:150px"><input name="balance" size="12" type="text" style="width:150px"></td>
</tr>
<tr style="background:#eef6f9">
<td>Interest Rate (Annual Percentage):</td>
<td style="width:150px"><input name="interest" size="12" type="text" style="width:150px"></td>
</tr>
<tr>
<td>Current Monthly Payment:</td>
<td style="width:150px"><input name="mnth_pay" size="12" type="text" style="width:150px"></td>
</tr>

<tr>
<td colspan="2" style="text-align:center;padding-top:10px">
<input onclick="calculate(this.form)" type="button" value="Calculate" style="width:220px"> 
<input type="reset" style="width:220px">
</td>
</tr>
<tr>
<td style="padding-top:20px">Months It Will Take To Be Debt Free:</td>
<td style="padding-top:20px"><input name="num_months" size="12" type="text" style="width:150px"></td>
</tr>
<tr style="background:#eef6f9">
<td>Total Amount Payed To Lender:</td>
<td style="width:150px"><input name="total_pay" size="12" type="text" style="width:150px"></td>
</tr>
<tr>

<td>Total Interest Paid To Lender:</td>
<td style="width:150px"><input name="total_int" size="12" type="text" style="width:150px"></td>
</tr>
</tbody>
</table>
</form>
</div>

