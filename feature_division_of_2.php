<html>
<title>division of 2 number</title>

<h2>division of 2 number</h2>
<p>
<script>
        function fucDivisionof2(){
    var temp = document.getElementById("txtnum").value;
	var res = parseInt(temp);
    if(res != 0){
     var resl = res/2;
      document.getElementById("txtResult").innerHTML= resl;
    }else{
    document.getElementById("txtResult").innerHTML= "กรุณาเลขตัวเลขที่ไม่เป็น 0";
    }
    }
</script>

<body>

<label>จำนวน:</label>
  <input type="number" id="txtnum">
<p>
<div id="txtResult">
</div>
<input type="submit" value="Submit" onclick="fucDivisionof2();">
</body>
</html>
