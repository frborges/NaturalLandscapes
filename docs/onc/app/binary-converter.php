<SCRIPT LANGUAGE="JavaScript">
<!-- Original:  Cyanide_7 (leo7278@hotmail.com) -->



<!-- Begin
function toBin(form) {
base = parseInt(form.base.value);
num = parseInt(form.num.value);
form.amount.value = num.toString(base);
}
//  End -->
</script>
</HEAD>


<form name=numform>
<center>
<input type=text name=num size=8> to base
<input type=text name=base size=8 value=2 onBlur="if ((this.value<1)||(this.value>36)){alert('The base must be between 2 and 36.');this.select();this.focus();}">
<input type=button value=" = " onclick="toBin(this.form)">
<input type=text name=amount size=15>
</center>
</form>

