<html>
<title>multiple of 3</title>

<h2>multiple of 3</h2>
<p> 
<script>
	function fucMultof3(){
    
    var temp = document.getElementById("txtnum").value;
    var res = parseInt(temp) * 3;
     document.getElementById("txtResult").innerHTML= res;
    
    }
</script>

<body>

<label>จำนวน:</label>
  <input type="number" id="txtnum">
<p>
<div id="txtResult">
</div>
<input type="submit" value="Submit" onclick="fucMultof3();">
</body>
</html>
