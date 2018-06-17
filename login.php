<?php





if(isset($_POST['username']) && isset($_POST['password'])){
    $servername = "localhost";
    $usernam = "root";
    $passwor = "";
    $dbname = "angular";
    
    // Create connection
    $conn =  mysqli_connect($servername, $usernam,$passwor,$dbname);
    mysqli_select_db($conn, $dbname);
   // echo $dbname. "  " ;
    $username=$_POST['username'];
    $password=$_POST['password'];

    $select_data=mysqli_query($conn,"select * from user where username='$username' and password='$password'");
    $cnt=mysqli_num_rows($select_data);
    if($cnt==1)
    {
        $row = mysqli_fetch_array($select_data);
        $id=$row['id'];
        session_start();

     $_SESSION['user_id']= $id;
     echo "success";
    }
    else
    {
     echo "fail";
    }
   
   }


?>