<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>		
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/js/modal.js"></script>
    <title>login page</title>
    <style>
        body{
           background-image:url("img/hospital.jpg");
           background-repeat:no-repeat;
           background-attachment:fixed;
           background-size:cover;
        }
        .login{
            width:370px;
            height:min-content;
            padding:20px;
            border-radius:12px;
            background:gray;
            margin-left: 35%;
            margin-top: 7%;
        }
    </style>
</head>
<body >

<?php 
error_reporting('E_All');
include('connection.php');

if(isset($_POST['login'])){
   $username = $_POST['username'];
   $password = $_POST['password'];

echo $sql ="select * from tbluser where username='".$username."' and password='".$password."' ";
$res = mysql_query($sql);
$row=mysql_fetch_array($res);
echo $cnt = mysql_num_rows($res);
$_SESSION['username'] = $row['username'];
echo $cnt = mysql_num_rows($res);
   if($cnt >0){
       // echo "login successfully";
       echo"<script>alert('login successfully')</script>";
       echo"<script>window.location.href='r3.php'</script>";
    }
   else{
        //echo "User name password not match..";
        echo"<script>alert('user name password not match..')</script>";
    }
}
?>

    <div class="login" >
        <h1 class="text center" style="text-align:center">login form</h1>
        <form class="from-control" method="post">

    <div class="row">
        <label class="from-label col-md-5" for="email" style="margin-top: 5%;">User Name</label>
        <input class="from-control input-sm col-md-7" type="text" id="username" name="username" placeholder="enter your email address"style="margin-top: 5%;"required>
    </div> 

    <div class="row">
        <lable class="from-label  col-md-5" for="password" style="margin-top: 5%;">password</lable>
        <input class="from-control  col-md-7" type="password" id="password" name="password" placeholder="enter your password" style="margin-top: 5%;" required>    
    </div> 
        
    <div class="row">
        <input class="btn btn-success text-center" style="margin-left: 30%;
        margin-top: 6%;" type="submit" value="login" name="login" id="login">
    
       <button class="btn btn-primary text-center" value="register" name="register" id="register"  style="margin-top:6%;"> <a href="user.php" target="_blank"><font color="white"> NEW REGISTER</font></a><button> 
    </div>
    </form>
    </div>
</body>
</html>