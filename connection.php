<?php 
$connect=mysqli_connect('localhost','root','','appointment');
if($connect) {
    echo "Database connected";

}
else
{
    echo "Error in database connected";
}



?>


