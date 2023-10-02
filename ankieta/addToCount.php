<?php

$link = new mysqli('localhost', 'root', '', 'pytanie');

if ($link) {
	$result = mysqli_query($con,"SELECT * FROM pytanie WHERE id=" + $_POST['id']);
	var_dump($result);
	// if ($_POST['answA'] != NULL) {
	// 	$data = "UPDATE `pytanie` SET `countA`=" + "WHERE id=" + $_POST['id'];
	// } else if ($_POST['answB'] != NULL) {
	// 	$data = "UPDATE `pytanie` SET `countB`=";
	// } else if ($_POST['answC'] != NULL) {
	// 	$data = "UPDATE `pytanie` SET `countC`=";
	// } else if ($_POST['answD'] != NULL) {
	// 	$data = "UPDATE `pytanie` SET `countD`=";
	// }

	// mysqli_query($link, $$data);
	mysqli_close($link);
};
?>


