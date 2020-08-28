<button type="button"><a href="index.php">回首頁</a></button>
<button type="button"><a href="http://localhost/mysite/0827/test07.php?height=1.76&weight=68">小明BMI</a></button>
<button type="button"><a href="http://localhost/mysite/0827/test07.php?height=1.66&weight=43">小華BMI</a></button>
<button type="button"><a href="test03.php">樂透預測</a></button>
<hr>

<?php
  $height = $_GET["height"]; 
  $weight = $_GET["weight"];
  if ($height!=NULL and $weight!=NULL){
  echo "身高：". $height. "公尺<br>";
  echo "體重：". $weight. "公斤<br>";
  $bmi=$weight / $height **2;
  echo "BMI：".$bmi."<br>";
  if($bmi>35){
  	echo "肥豬減肥啦";
  }
    else if($bmi>24){
      echo"你的體重有點太重";
  } else if ($bmi>=18.5) {
  	echo "你的體重標準";
  } else {
  	echo "你的體重過輕";
  }
  if($weight>=200)
  	echo "<br>成就達成:兄弟齊心兩百公斤";
  }
    else{//任一值是空的
     echo "你要在網址列填寫正確的資料才能檢測<br><br>";
     echo "EX:http://localhost/mysite/0827/test07.php?height=身高(公尺)&weight=體重(公斤)
     <br>在身高跟體重輸入你的資料就可以檢測bmi了";
 }
?>