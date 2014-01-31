<?php 

include_once('examDAO.php');

$exam_id = $_GET['exam_id'];


$result = examDAO::getQuestion($exam_id);
$validate = examDAO::validateAnswer($exam_id);

$answer_row = mysql_fetch_array($validate);
	$answer = $answer_row['answer'];
$row = mysql_fetch_array($result);
	$question = $row['question'];
	$a = $row['a'];
	$b = $row['b'];
	$c = $row['c'];
	$d = $row['d'];


echo $question . "<br>";
echo "<input type = 'radio' id = 'btn1' name = 'choice' value = " . $a . " />" . "  " . $a . "<br>";
echo "<input type = 'radio' id = 'btn2' name = 'choice' value = " . $b . " />" . "  " . $b . "<br>";
echo "<input type = 'radio' id = 'btn3' name = 'choice' value = " . $c . " />" . "  " . $c . "<br>";
echo "<input type = 'radio' id = 'btn4' name = 'choice' value = " . $d . " />" . "  " . $d . "<br>";
echo "<input type = 'hidden' id = 'answer' name = 'answer' value = " . $answer . " />";
?>

