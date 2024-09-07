
<HTML>
<HEAD>
	<SCRIPT language="JavaScript">
		/*
		*************************************************
		********* JavaScript Implementation *************
		*************************************************

		Loan Calculator by Sidney Forcier
		sf01@sidneyforcier.com
		
		The formula for calculating loan payments is:
			Pi / (q * (1 - (1 + (i / q))^(-nq)

		Where the variables are as follows:

		 P - The amount of the loan (after down payment)
		 i - The interest expressed as a decimal (e.g. 8% is .08)
		 n - The number of term units (e.g. number of years)
		 q - The number of payments per term unit (e.g. 12 months)

		You can enhance the formulas below by allowing the user to change the number 
		of payments per year if you wish. I have hard-coded the payments to monthly.
		*/
		function CalculatePayments(principal, down_payment, interest, years)
		{
			var x = ((principal - down_payment) * interest / (12 * (1 - Math.pow(1 + (interest / 12), (-years * 12)))));
			return Math.floor(x * 100) / 100
		}
		
		function ShowPayments()
		{
			var x = CalculatePayments(document.jsForm.jsPrincipal.value, document.jsForm.jsDownPayment.value, document.jsForm.jsInterest.value / 100, document.jsForm.jsYears.value);
			if (isNaN(x))
				document.jsForm.jsResult.value = 'Could not compute';
			else
				document.jsForm.jsResult.value = x;
		}
	</script>
</HEAD>
<BODY>
	<form name="jsForm" id="jsForm">
		<table align="center" style="border: 1px solid black; background-color: #eeeeee;" cellspacing="3" cellpadding="2">
		<tr>
			<td colspan="2"><strong>Loan Payment Calculator</strong></td>
		</tr>
		<tr>
			<td>Loan Amount:</td>
			<td><input type="text" name="jsPrincipal" id="jsPrincipal"></td>
		</tr>
		<tr>
			<td>Down Payment:</td>
			<td><input type="text" name="jsDownPayment" id="jsDownPayment"></td>
		</tr>
		<tr>
			<td>Interest Rate:</td>
			<td><input type="text" name="jsInterest" id="jsInterest"></td>
		</tr>
		<tr>
			<td>Number of Years:</td>
			<td><input type="text" name="jsYears" id="jsYears"></td>
		</tr>
		<tr>
			<td>Result:</td>
			<td><input type="text" name="jsResult" id="jsResult" disabled></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="button" onClick="ShowPayments();" value="Calculate Using JScript" id="button1" name="button1"></tr>
		</tr>
		</table>
	</form>
	<br />
	
</HTML>