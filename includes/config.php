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
$query = mysqli_query($conn, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($query))
{
  $title = $row['title'];
  $content = $row['content'];
}

if(isset($_POST['save']))
{
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO employee (first_name,last_name,city_name,email)
	 VALUES ('$first_name','$last_name','$city_name','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}



 ?>
