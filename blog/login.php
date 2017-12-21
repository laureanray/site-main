<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">   
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
    <title>Administrator</title>
    <script src="../js/jquery.js"></script>
    <script src="../js/script-blog.js"></script>
</head>
<body>
<?php
include "includes/db.php";


if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password']; 
    echo $username;
    $login_query = "SELECT * FROM administrators WHERE admin_username = '$username'";

    $query = mysqli_query($connection, $login_query);

    // FETCH IF USERNAME EXIST

    $return_count = mysqli_num_rows($query);
    if($return_count == 0){
        echo " Username doesnt exist" ;
    }
    else{
        while($row = mysqli_fetch_array($query)){
            $db_admin_id = $row['admin_id'];
            $db_username = $row['admin_username'];
            $db_password = $row['admin_password'];
            $db_fullname = $row['admin_fullname'];
        }

        if($password == $db_password){
            echo "Logged In";
            header("Location: dashboard.php");
        }
        else{
            echo "Incorrect password";
        }
        /// THEN VERIFY 
    }

    if(!$query){
        echo "Query Failed";
    }
}
else if(isset($_POST['back'])){
    header("Location: ./");
}
?>
    <header>
            <div class="loader" id="load">
                    <div class="loadanim">
                        <div class="circle1"></div>
                        <div class="circle2"></div>
                        <div class="circle3"></div>
                        <div class="circle4"></div>
                        <div class="circle5"></div>
                        <div class="circle6"></div>
                        <div class="circle7"></div>
                        <div class="circle8"></div>
                        <div class="circle9"></div>
                        <div class="circle10"></div>
                        <div class="circle11"></div>
                        <div class="circle12"></div>
                    </div>
                    <div class="loadanim2">
                        <div class="re1"></div>
                        <div class="re2"></div>
                        <div class="re3"></div>
                        <div class="re4"></div>
                        <div class="re5"></div>
                        <div class="re6"></div>
                        <div class="re7"></div>
                        <div class="re8"></div>
                        <div class="re9"></div>
                        <div class="re10"></div>
                        <div class="re11"></div>
                        <div class="re12"></div>
                    </div>
                     <!-- <h1 class="ld-txt"> Loading Please Wait     </h1> -->
                 </div>
    </header>
    <section class="login">
        <div class="login-wrapper">
            <h2 class="login-h2">
                Log In
            </h2>
            <form action="" method="POST">
                <input type="text" class="input-field" placeholder="Username" name="username">
                <input type="password" class="input-field" placeholder="Password" name="password">
                <input type="submit" value="Log In" class="btn-normal" name="submit">
                <input type="submit" value="Back" class="btn-normal-black" name="back">
            </form>
        </div>
    </section>
</body>
</html>