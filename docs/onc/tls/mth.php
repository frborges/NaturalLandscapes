<script type="text/javascript">
function conv(){
var tt = document.getElementById('mins').value;
var hours = tt/60;
document.getElementById('result').style.display = 'block';
document.getElementById('result').innerHTML = tt+" Minutes = "+hours+"  Hours";
}
</script>
<input type=text id='mins'>
<input type=button onclick='conv()' value='Submit'>
<div id='result' style='display: none;'></div>
<div align=center style="font-size: 10px;color: #dadada;" id="dumdiv">
</div>