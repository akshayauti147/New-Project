<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>		
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/js/modal.js"></script>

    <style>
        body{
           background-image:url("img/h2.jpg");
           background-repeat:no-repeat;
           background-attachment:fixed;
           background-size:cover;
           background color:gray;
        }
        .feedback{
            width:370px;
            height:min-content;
            padding:20px;
            border-radius:15px;
            background:gray;
            margin-left: 35%;
            margin-top: 1%;
        }
        .button { 
       background-color: #4CAF50; 
       width: 100%;
        color: black; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer; 
         } 
         .h1{
            margin-left:5%; 
         }
       
    </style>
</head>        
   
<body>

<?php 
  error_reporting('E_All');
  include('connection.php');
  include('navbar.php');
  
  
  if(isset($_POST['submit'])){
     
     $username = $_POST['username'];
     $address = $_POST['address'];
     $age= $_POST['age'];
     $mobileno= $_POST['mobileno'];
     $email= $_POST['email'];
     $feedback= $_POST['feedback'];
    
     echo $qry = "insert into tblfeedback(username,address,age,mobileno,email,feedback)values
     ('".$username."','".$address."','".$age."','".$mobileno."','".$email."','".$feedback."')";
     $res = mysql_query($qry);
     echo mysql_insert_id();
  
  }
  
  ?>

            <!--h1>Contact with us</h1-->

    <div class="feedback" >
        <h1 class="text center" >Feedback form</h1>
        <form class="from-control" method="post">


   
    <div class="row">
        <label class="from-label col-md-5" for="email" style="margin-top: 5%;">username</label>
        <input class="from-control input-sm col-md-7" type="text" id="username" name="username" placeholder="name"style="margin-top: 5%;"required>
        </div> 
        
        <div class="row">
        <label class="from-label col-md-5" for="email" style="margin-top: 5%;">address</label>
        <input class="from-control input-sm col-md-7" type="text" id="address" name="address" placeholder="address" style="margin-top: 5%;"required>
        </div> 

        <div class="row">
        <label class="from-label col-md-5" for="email" style="margin-top: 5%;">age</label>
        <input class="from-control input-sm col-md-7" type="text" id="age" name="age" placeholder="age" style="margin-top: 5%;"required>
        </div> 
        
        <div class="row">
        <label class="from-label col-md-5" for="email" style="margin-top: 5%;">mobileno</label>
        <input class="from-control input-sm col-md-7" type="text" id="mobileno" name="mobileno" placeholder="mobileno" style="margin-top: 5%;"required>
        </div>  

    <div class="row">
        <label class="from-label col-md-5" for="email" style="margin-top: 5%;">email</label>
        <input class="from-control input-sm col-md-7" type="text" id="email" name="email" placeholder="email" style="margin-top: 5%;"required>
        </div>  
        
    <div class="row">
        <label class="from-label col-md-5" for="email" style="margin-top: 5%;">feedback</label>
        <input class="from-control input-sm col-md-7" type="text" id="feedback" name="feedback" placeholder="write here your feedback"style="margin-top: 5%;"required>
        </div>  
        
       

        <div class="row">
        <input class="btn btn-success text-center" style="margin-left: 35%;
        margin-top: 6%;" type="submit" value="submit" name="submit" id="submit">

     </div>  
</body>
</html>           