<!DOCTYPE html>

<html>
<head>
	<title>Hello Happy World</title>
</head>
<body style="background-color:yellow;">
   　<h1 style="color: red"><center>Hello Happy World!</center></h1>
</body>
</html>

<?php
  	echo "Happy Lucky Smile Yeah!<br>\n";

  	echo "<table border=1 width=250>";
  	echo "<tr bgcolor=#cccccc><td>i</td><td>i**2</td><td>i**3</td></tr>";
  for ($i=1; $i <=9; $i++) { 
  	if ($i%2){
            echo "<tr bgcolor=#ccffff>";
  		}else
  	        echo "<tr bgcolor=#ccccff>";
  	 echo "<td>$i</td><td>" . $i**2 .
  	 "</td><td>" . $i**3 .
  	 "</td>";
  	 echo "</tr>";
  }
  	 echo"</table>";

?>
<hr>
<button type="button"><a href="test03.php">張恩人樂透預測</a></button>
<hr>
<html>
<head>
<meta charset='utf-8'>
<title>
  計算您的BMI
</title>
</head>
<body>
  <form action='result.php' method='post'>
    您的身高：<input type='text' name='height' size=5><br/>
    您的體重：<input type='text' name='weight' size=5><br/>
    <input type='submit'>
  </form>
</body>
</html>