?<?php
//Database connection

$host = "localhost";
$username = "root";
$password = "";
$database = "testingSQL";

$sql = mysqli_connect($host, $username, $password, $database) or die('Could not connect');



//Select specific columns from DB
$query = mysqli_query($sql, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($query))
{
  $title = $row['title'];
  $content = $row['content'];
}



 ?>
