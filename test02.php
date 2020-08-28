<?php

  $names = array("小明", "小華", "小盟", "小美");
  $heights = array(1.74, 1.56, 1.68, 1.58);
  $weights = array(70, 56, 86, 43);
   
   for($i=0; $i<count($names); $i++){
    echo "姓名:" . $names[$i] . "<br>";
  $height = $heights[$i]; 
  $weight = $weights[$i];
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
  if($weight>=200){
  	echo "<br>成就達成:兄弟齊心兩百公斤";
  }
    echo "<br>";
   }
?>