<?php
 require_once("../config.php"); 
 $dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
if($dbc){ echo 'succes';
//    if(isset($_POST['send'])) {
//         $fn=$_POST['fname'];
//         $ln=$_POST['lname'];
//         $eml=$_POST['email'];
//         $con=$_POST['contact'];
//         $des=$_POST['dest'];
//         $tra=$_POST['traveller'];
//         $dt=$_POST['date'];
//         $loc=$_POST['location'];

//         $query = "insert into contact(fname,lname,email,contact,dest,traveller,date,location) values ('$fn','$ln','$eml','$con','$des','$tra','$dt','$loc')";
//         $data=mysqli_query($dbc,$query);
//         header('location:./booking.php');
        // echo $nm.'=>'.$em.'=>'.$sub.'=>'.$sg;
   }
} else {
    echo 'has some error';
}




?>