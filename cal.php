
 <!DOCTYPE html>
<html>
<head>
<title></title>
<script>
function showResult(id,url)
{
    var xmlhttp;
    if (window.XMLHttpRequest)
      {
      xmlhttp=new XMLHttpRequest();
      }
    else
      {
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    var f1 = parseInt(document.getElementById('f1').value);
    var f2 = parseInt(document.getElementById('f2').value);
    var result;

    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
        document.getElementById("id").innerHTML=xmlhttp.responseText;
        }
      }
    if("+"==document.getElementById("options").value)
    {
    result=f1+f2;
    document.getElementById("res").value=result;
    }
else if("-"==document.getElementById("options").value)
    {
    result=f1-f2;
   document.getElementById("res").value=result;
   }
   else if("*"==document.getElementById("options").value)
    {
    result=f1*f2;
    document.getElementById("res").value=result;
   }
else
    {
    result=f1/f2;
    document.getElementById("res").value=result;
   }
    xmlhttp.open("GET",url,true);
   xmlhttp.send();

}
</script>
</head>
<body>
<form name=form1 method=get>
Val 1 <input type="text" name="f1" id="f1" /> <br />
Val 2 <input type="text" name="f2" id="f2" /> <br />
Result <input type="text" name="res" id="res" /> <br />
<select id="options">
  <option>+</option>
  <option>-</option>
  <option>*</option>
  <option>/</option>
</select>
<input type=button value="Result" name=result onClick="showResult('ajaxDiv','cal.php')">
</form>
</body>
</html>