<html>
<title>แปลงอุณหภูมิ</title>

<h2>แปลงอุณหภูมิ</h2>
<p>
<script>
        function fucTemp(){

    var temp = document.getElementById("txtnum").value;
    var res = parseInt(temp) + 273.15;
     document.getElementById("txtResult").innerHTML= res + " Kelvin";

    }
</script>

<body>

<label>Temperature:</label>
  <input type="number" id="txtnum">
  <label>Celcius</label>
<p>
<div id="txtResult">
</div>
<input type="submit" value="Submit" onclick="fucTemp();">
</body>
</html>
