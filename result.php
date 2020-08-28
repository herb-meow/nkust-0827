<html>
<head>
<meta charset='utf-8'>
<title>BMI計算結果</title>
</head>
<body>
<h2>您的BMI計算如下：</h2>
<?php 
	$height = $_POST["height"];
	$weight = $_POST["weight"];
	$bmi = $weight/(($height/100)*($height/100));
	echo "身高：$height 公分<br/>";
	echo "體重：$weight 公斤<br/>";
	echo "BMI：$bmi<br/>";
?>
</body>
</html>