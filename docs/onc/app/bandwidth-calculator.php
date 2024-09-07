<form name="bandwidth">

  <p><input type="text" name="original" size="20" value=1024> <select size="1" name="units">
    <option value="Bytes">Bytes</option>
    <option value="Kb">Kb</option>
    <option value="Mb">Mb</option>
    <option value="Gb">Gb</option>
  </select> <input type="button" value="Calculate" name="B1" onClick="calculate()"></p>
</form>

<p>

<script>

/*
Bandwidth calculator (credit must stay enclosed)
By javascriptkit.com
For this and over 400+ JavaScripts,
Visit http://www.javascriptkit.com
*/

var bytevalue=0
function calculate(){
var invalue=document.bandwidth.original.value
var selectunit=document.bandwidth.units.options[document.bandwidth.units.selectedIndex].value
if (selectunit=="Bytes")
bytevalue=invalue
else if (selectunit=="Kb")
bytevalue=invalue*1024
else if (selectunit=="Mb")
bytevalue=invalue*1024*1024
else if (selectunit=="Gb")
bytevalue=invalue*1024*1024*1024

alert (invalue+" "+selectunit+" is equal to:\n\n- "+bytevalue+" Bytes\n- "+Math.round(bytevalue/1024)+" Kb\n- "+Math.round(bytevalue/1024/1024)+" Mb\n- "+Math.round(bytevalue/1024/1024/1024)+" Gb\n")
}

</script>

<p align="center">This free script provided by<br />
<a href="http://javascriptkit.com">JavaScript
Kit</a></p>