<head>


<title>Speedy Wi-Finder!</title>


</head>

<div id="center_region">

<h1>Speedy Wi-Finder =D</a></h1>
<p>Welcome to Speedy Wi-Finder!</p>
<iframe src="https://mapsengine.google.com/map/embed?mid=z3nHAC44VeY4.ksxvZ_i0A_q0" width="640" height="480"></iframe>

<h2>Comments:<h2>

<?php
if( file_exists('save_comment.txt') ) {
readfile('save_comment.txt');
}
else {
print '<p>There are no comments yet.</p>';
}
?>

<h2>Add a comment</h2>
<form action="save_comment.php" method="post">
<p>
<textarea rows="3" cols="30" name="comment"></textarea>
</p>
<p>
<button type="submit">Save</button>
</p>
</form>

<button type="submit" form = "reviewForm">Click Me!</button>

</div>
