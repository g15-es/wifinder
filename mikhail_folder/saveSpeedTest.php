<?php
  // The global $_POST variable allow to access the data send with the POST method
  // To access the data send with the GET method, you can use $_GET
$con=mysql_connect("mysql3.000webhost.com","a8003312_team5","eece310","a8003312_data");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $username = htmlspecialchars($_POST['username']);
  $usercomments = htmlspecialchars($_POST['usercomments']);
  $buildings= htmlspecialchars($_POST['buildings']);
  $downloadspeed= htmlspecialchars($_POST['downloadspeed']);
  $uploadspeed= htmlspecialchars($_POST['uploadspeed']);

    print "Your name is ". $username;   
    print "<br />";   
    print "Your comments are:";  
    print "<br />";   
	print $usercomments;
    print "<br />";   
    print "Your building is ". $buildings;
    print "<br />"; 
    print "Your download speed is ". $downloadspeed;
    print "<br />"; 
    print "Your upload speedis ". $uploadspeed;
    print "<br />"; 

/*$sql="INSERT INTO data (id, user, location, comment, upload, download)
VALUES
('$_POST[username]','$_POST[buildings]','$_POST[usercomments]','$_POST[downloadspeed]','$_POST[uploadspeed]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";*/
?>
