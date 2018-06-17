<?php
 $servername = "localhost";
 $usernam = "root";
 $passwor = "";
 $dbname = "angular";
 
 // Create connection
 $conn =  mysqli_connect($servername, $usernam);
 mysqli_select_db($conn, $dbname);
 //echo $dbname. "  " ;
 // Check connection
// if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }
    
    extract($_POST);

if(isset($_POST['submit'])){
    $sql="insert into user(name,username,password,salary) values
    ('$name','$username','$password',$sal)";
    $query=mysqli_query($conn,$sql);
    //echo "success";
   header('location:Register.html');
   // echo "<script>alert( 'Debug Objects:');</script>";

        //    echo "Registered Successfully..!!!";

}
//echo  $password;

?>