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

$sql = "DELETE FROM project_certificate_tbl  where `id` = '".$_GET['id']."'";

if ($link->query($sql) === TRUE) {
	header("Location: projects-details.php");
} else {
    echo "Error Delete record: " . $link->error;
}
}
	?>