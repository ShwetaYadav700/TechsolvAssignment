<?php



$username="root";
$password="";
$server='localhost';
$db = 'contactform';

$conn=mysqli_connect($server,$username,$password,$db);
if($conn){
   // echo "connection successful";
   ?>
   <script>
   alert('connection successful');
   </script>

   <?php
}else{
    echo "no connection";
}
?>