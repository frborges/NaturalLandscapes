<form action="POST" name="myform">
        <table border="1" bgcolor="#FFFFFF">
          <tr> 
            <td align="center" colspan="2"> 
              <script
           language="JavaScript"><!--
function CarLoanCalculator()
{
	form = document.myform
	LoanAmount= form.LoanAmount.value
		
	DownPayment= "0"
	AnnualInterestRate = form.InterestRate.value/100
	Years= form.NumberOfYears.value
		MonthRate=AnnualInterestRate/12
	NumPayments=Years*12
	Prin=LoanAmount-DownPayment
	
	MonthPayment=Math.floor((Prin*MonthRate)/(1-Math.pow((1+MonthRate),(-1*NumPayments)))*100)/100
		form.NumberOfPayments.value=NumPayments
	form.MonthlyPayment.value=MonthPayment
}
        // --></script>
              <font color="#000000"
            size="2" face="arial narrow"><b>Car Loan Calculator</b> <br>
              Enter Your Details &amp; Click the Calculate Button</font></td>
          </tr>
          <tr> 
            <td> 
              <table border="0" cellpadding="2">
                <tr> 
                  <td align="right"><font color="#000000"
                    size="2" face="arial narrow">Car Loan Amount $ </font></td>
                  <td><font color="#000000" size="2"
                   face="arial narrow"> 
                    <input type="text"
                    size="10" name="LoanAmount" value="30000"
                    onBlur="CarLoanCalculator()" onChange="CarLoanCalculator()">
                    <br>
                    </font></td>
                </tr>
                <tr> 
                  <td align="right"><font color="#000000"
                    size="2" face="arial narrow">Annual Interest Rate </font></td>
                  <td><font color="#000000" size="2"
                   face="arial narrow"> 
                    <input type="text"
                    size="3" name="InterestRate" value="7.0"
                   onBlur="CarLoanCalculator()" onChange="CarLoanCalculator()">
                    % <br>
                    </font></td>
                </tr>
                <tr> 
                  <td align="right"><font color="#000000"
                   size="2" face="arial narrow">Term of Car Loan </font></td>
                  <td><font color="#000000" size="2"
                   face="arial narrow"> 
                    <input type="text"
                    size="3" name="NumberOfYears" value="4"
                    onBlur="CarLoanCalculator()" onChange="CarLoanCalculator()">
                    Years<br>
                    </font></td>
                  <td><font color="#000000" size="2"
                    face="arial narrow"> 
                    <input type="button"
                    name="morgcal" value="Calculate"
                   language="JavaScript" onClick="CarLoanCalculator()">
                    </font></td>
                </tr>
                <tr> 
                  <td colspan="3"><font color="#000000"></font></td>
                </tr>
              </table>
            </td>
          </tr>
          <tr> 
            <td> 
              <table border="0" cellpadding="2">
                <tr> 
                  <td align="right"><font color="#000000"
                    size="2" face="arial narrow"> Number of Car Payments </font></td>
                  <td><font color="#000000" size="2"
                    face="arial narrow"> 
                    <input type="text"
                    size="7" name="NumberOfPayments">
                    <br>
                    </font></td>
                </tr>
                <tr> 
                  <td align="right"><font color="#000000"
                    size="2" face="arial narrow">Monthly Payment $ </font></td>
                  <td><font color="#000000" size="2"
                    face="arial narrow"> 
                    <input type="text"
                   size="7" name="MonthlyPayment">
                    <br>
                    </font></td>
                </tr>
                <tr> 
                  <td align="center" colspan="2">&nbsp;</td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
        <div align="center"></div>
      </form>
      