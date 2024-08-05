<?php
	require_once('inc/config.php');

	if(isset($_GET['del'])){
                  

$id = $_REQUEST['id'];
//$class= $_GET['class'];
		   

// Create connection
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$sql = "DELETE FROM enquiry_tbl  where `id` = '".$_GET['id']."'";

if ($link->query($sql) === TRUE) {
	header("Location: enquiry-details.php");
} else {
    echo "Error Delete record: " . $link->error;
}
}
	?>