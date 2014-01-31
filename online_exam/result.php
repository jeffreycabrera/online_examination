<?php 
$result = $_GET['score'];

echo "	<div style = 'margin-top: 50px'>
		<h1> Your Score is " . $result . "</h1>
		</div>";

if($result <= 7){
	echo "<div style = 'margin-top: 50px'><h1 style = 'color: red'> Failed! </h1></div>";
}
else if($result > 7 && $result <= 8){
	echo "<div style = 'margin-top: 50px'><h1 style = 'color: blue'> Fair! </h1></div>";
}
else if($result > 8 && $result <= 9){
	echo "<div style = 'margin-top: 50px'><h1 style = 'color: blue'> Good! </h1></div>";
}else{
	echo "<div style = 'margin-top: 50px'><h1 style = 'color: red'> Excellent! </h1></div>";
}
?>

<html>
<head>
  <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <link href="css/boot-business.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body style="background-image:url('img/background.jpg')">
 
</body>
</html>