<?php
$db_server ='localhost';
$db_username='root';
$db_password='password';
$database='radius';
$con=mysqli_connect($db_server,$db_username,$db_password,$database);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect database " . mysqli_connect_error();
}
?>
