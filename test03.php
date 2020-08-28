<h2 style="color:green"><center>張恩人樂透預測</center></h2>
<hr>
<button type="button"><a href="index.php">離開</a></button>
<hr>
<?php
 $count = 0; //目前沒有0個數字
 while ($count < 6) { 
      $t = rand(1,49); //取得一個隨機數
      if(in_array($t, $lotto)) continue; //檢查是否重複
      $lotto[] = $t ; 
      $count ++; //確認放一個球進去
  }
  sort($lotto);
  foreach($lotto as $no){
  	echo $no . " ";
 }

 echo "<br>特別號:";

    $specil = rand(1, 49);
    while (in_array($specil, $lotto))
 	  $specil = rand(1, 49);
       echo $specil ;
?>
<hr>
<iframe width="560" height="315" src="https://www.youtube.com/embed/Bavte5CIJmc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>
<p>唉，沒中，沒有欠你耶</p>