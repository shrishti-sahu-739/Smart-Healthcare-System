

<?php
$conn=mysqli_connect("localhost","root","","minor");
if($conn){
       echo"Connected";
}
   else{
       echo"Failed";
   }
   
   $Name=$_POST['name'];
   
   $Email=$_POST['email'];

   $Doctor=$_POST['doctor'];
   
   $Date_Time=$_POST['datetime'];

$data= "INSERT INTO appointment VALUES('$Name','$Email','$Doctor','$Date_Time')";
$check= mysqli_query($conn,$data);
if($check){
       echo"Data sended";
}
else{
       echo"Data not send";
}

?>