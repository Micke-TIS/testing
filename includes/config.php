<?php
//Database connection

$servername='localhost';
$username='root';
$password='';
$dbname = "testingSQL";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}


//Select specific columns from DB
$conn = mysqli_query($sql, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($query))
{
  $title = $row['title'];
  $content = $row['content'];
}



 ?>
