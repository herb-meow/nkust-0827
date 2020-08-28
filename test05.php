<h2>發財夢計算</h2>
<hr>
<form action='test05.php' method='post'>
     本金:<input type="text" size=10 name= "money" value=1000000>元<br>
     利率:<input type="text" size=10 name= "rate" value=2.4>%<br>
     期數:<input type="text" size=10 name= "years" value=10>年<br>
     <input type="submit" value="計算">
</form>     
<?php
     $money =$_POST["money"];
     $rate = $_POST["rate"]/100;
     $years =$_POST["years"];

     echo "<table border=1 width=250>";

     echo "<tr bgcolor=#ccffcc>"; 
     echo "<td>本金</td><td>".$money."元</td>";
     echo "</tr>";

     echo "<tr bgcolor=#ccffcc>";
     echo "<td>利率</td><td>".$rate* 100 ."%</td>";
     echo "</tr>";

     echo "<tr bgcolor=#ccffcc>";
     echo "<td>期數</td><td>".$years."年</td>";
     echo "</tr>";

     $s_amount = $money* (1 +$rate * $years);
     $c_amount = $money* (1 +$rate) ** $years;
     echo "<tr bgcolor=#ccffcc>";
     echo "<td>單利計算結果</td><td>".(int)$s_amount."元</td>";
     echo "</tr>";

     echo "<tr bgcolor=#ccffcc>";
     echo "<td>復利計算結果</td><td>".(int)$c_amount."元</td>";
     echo "</tr>";

?>