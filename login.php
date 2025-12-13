

<?php
$conn=mysqli_connect("localhost","root","","minor");
if($conn){
       echo"Connected";
}
   else{
       echo"Failed";
   }
   
   $username=$_POST['uname'];
   
   $password=$_POST['psw'];

   $contact=$_POST['contact'];
   
   $email=$_POST['email'];

$data= "INSERT INTO form VALUES('$username','$password','$contact','$email')";
$check= mysqli_query($conn,$data);
if($check){
       echo"Data sended";
}
else{
       echo"Data not send";
}

?>

