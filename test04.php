<?php
  $scores = array(90,90,88,92);

  $totle = array_sum($scores);
  $score = $totle / count($scores);

  echo "總分:".$totle."分<br>";
  echo "平均:".$score."分<br>";
  if($score>=90){
  	echo "等第A";
  }
    else if($score>=80){
      echo"等第B";
  } else if ($score>=70) {
  	echo "等第C";
  } else if ($score>=60) {
  	echo "等第D";
  }else echo "不及格";
  
  
?>