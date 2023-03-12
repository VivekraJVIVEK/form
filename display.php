<?php
include("connection.php");
error_reporting(0);

$query = "SELECT * FROM form";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);
//echo "$total";
$result = mysqli_fetch_assoc($data);
echo $result[fname]." ".$result[lname]." ".$result[gender]." ".$result[email]
." ".$result[phone]." ".$result[address];


if($total !=0 )
{
   $a = 1;
   while ($a <=10) {
     echo "Hello vivek<br>";
     $a++;
   }
}
else {
  echo "No record found";
}
 ?>
