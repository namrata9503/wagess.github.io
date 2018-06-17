<?php
session_start();
if(isset($_SESSION['user_id']))
{
    $uid=$_SESSION['user_id'];
    $servername = "localhost";
    $usernam = "root";
    $passwor = "";
    $dbname = "angular";
    
    // Create connection
    $conn =  mysqli_connect($servername, $usernam,$passwor,$dbname);
    mysqli_select_db($conn, $dbname);


    $select_data=mysqli_query($conn,"select * from user where id='{$uid}'");
    $cnt=mysqli_num_rows($select_data);
    if($cnt==1)
    {
        $row = mysqli_fetch_array($select_data);
       $name=$row['name'];
    // echo "success";
    }
    else
    {
        header('Location:login.html');
    }
   
   }
?>


<html>
    <head>
        <title>HOME DATA</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-lg-12">
                <div class="row">
                    <h1>welcome.. <strong>ADMIN.........</strong>
                    <?php echo $name; ?></h1>
                    <a href="logout.php">Logout</a>
                   
                   
                </div>

            </div>
        </div>
        <script src="display.js"> </script> 

    </body>
</html>