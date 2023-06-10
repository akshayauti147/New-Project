<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Akshay</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedbackdata</title>
    <link  rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    
<style>
  body{
    //background-image:url('img/hospital.jpg');
    background-repeat:no-repeat;
    background-attachment: fixed;
    background-size: cover;
    width:"300";
    height:"500";
</style>
  </head>
  <body>
<div>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">doctor</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Registration 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="user.php">Registration</a></li>
          <li><a href="userdata.php">Registration Data</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Appointment 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="r3.php">Apointment</a></li>
          <li><a href="r3data.php">Apointmentdata</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Feedback
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Feedback.php">Feedback</a></li>
          <li><a href="Feedbackdata.php">Feedbackdata</a></li>
        </ul>
      </li>
           
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['username']; ?></a></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
          
      
        </div>
       
      
      
      </nav>
      
    </div>
  </div>
  
</body>
</html