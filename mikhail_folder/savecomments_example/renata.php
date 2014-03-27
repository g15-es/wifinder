
<div id="center_region">
	<h1>Dog profile: Renata</h1>
	<p>Here is Renata.</p>
	<h2>Comments</h2>
	<?php
	if( file_exists('renata_comments.txt') ) {
		readfile('renata_comments.txt');
	}
	else {
		print '<p>There are no comments yet.</p>';
	}
	?>
	<h2>Add a comment</h2>
	<form action="save_renata_comment.php" method="post">
		<p>
			<textarea rows="3" cols="30" name="comment"></textarea>
		</p>
		<p>
			<button type="submit">Save</button>
		</p>
	</form>
	<p><a href="index.php">Back to the dog list</a></p>
</div>
