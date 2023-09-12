<?php
 require_once("../config.php"); 
 $dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
if($dbc){
   if(isset($_POST['send'])) {
        $nm=$_POST['name'];
        $em=$_POST['email'];
        $sub=$_POST['subject'];
        $msg=$_POST['message'];

        $query = "insert into contact(name,email_id,subject,message) values ('$nm','$em','$sub','$msg')";
        $data=mysqli_query($dbc,$query);
        header('location:./contact-us.php');
        // echo $nm.'=>'.$em.'=>'.$sub.'=>'.$sg;
   }
} else {
    echo 'has some error';
}











// $nm=$_GET['name'];
// $em=$_GET['email'];
// $sub=$_GET['subject'];
// $msg=$_GET['message'];

// $query="INSERT INTO `CONTACT` VALUES ('$nm','$em','$sub','$msg')";
// $data=mysqli_query($dbc,$query);

//  if ($data){
//      echo thank you.....
//  }

?>