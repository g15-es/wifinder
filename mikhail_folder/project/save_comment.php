<?php
//Get the user's comment.
$comment = $_POST['comment'];
//Append it to the comments file.
$f = fopen('comments.txt', 'a');
fwrite($f, "<p>$comment</p><hr>");
fclose($f);
//Jump back to Renata's page.
header('location:project_comments.php');
?>