<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <style type="text/css">
div {
    background-color: lightblue;
}
  </style>



  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

 



</head>
<body>

   <div>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

 <label> Name:</label> <input type="text" id="name" value="" name="name">

 <label>Last day you had sex:</label> <input type="text" id="datepicker" value="" name="sex">
 <script>
 var d = new Date();
var n = d.toLocaleDateString();
document.getElementById("datepicker").value = n;
</script>






 <label>Year you were born</label>
<select id="year" name="DOBYear">
  <option> - Year - </option>
  
  <option value="2000">2000</option>
  <option value="1999">1999</option>
  <option value="1998">1998</option>
  <option value="1997">1997</option>
  <option value="1996">1996</option>
  <option value="1995">1995</option>
  <option value="1994">1994</option>
  <option value="1993">1993</option>
  <option value="1992">1992</option>
  <option value="1991">1991</option>
  <option value="1990">1990</option>
  <option value="1989">1989</option>
  <option value="1988">1988</option>
  <option value="1987">1987</option>
  <option value="1986">1986</option>
  <option value="1985">1985</option>
  <option value="1984">1984</option>
  <option value="1983">1983</option>
  <option value="1982">1982</option>
  <option value="1981">1981</option>
  <option value="1980">1980</option>
  <option value="1979">1979</option>
  <option value="1978">1978</option>
  <option value="1977">1977</option>
  <option value="1976">1976</option>
  <option value="1975">1975</option>
  <option value="1974">1974</option>
  <option value="1973">1973</option>
  <option value="1972">1972</option>
  <option value="1971">1971</option>
  <option value="1970">1970</option>
  <option value="1969">1969</option>
  <option value="1968">1968</option>
  <option value="1967">1967</option>
  <option value="1966">1966</option>
  <option value="1965">1965</option>
  <option value="1964">1964</option>
  <option value="1963">1963</option>
  <option value="1962">1962</option>
  <option value="1961">1961</option>
 
  
</select>






<input type="submit" value="See result">
</form>

   
</div>





<?php
echo "<h2>You are an motherfucker:</h2>";
echo $name;
echo "<br>";
echo "<h2>became an idiot on:</h2>";
echo $sex;
echo "<br>";
echo "<h2>and you are curced since :</h2>";
echo $DOBYear;
?>






 
</body>
</html>