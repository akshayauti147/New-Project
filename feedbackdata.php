
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userdata</title>
    <link  rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="bower_components/bootstrap/js/modal.js"></script>
	

</head>
<body>
<?php 
error_reporting('E_All');
include('connection.php');
include('navbar.php');


?>
    <div class="feedback">
        <h1 class="text center" style="text-align:center"><font color="black">FEEDBACK DATA</font><h1>
        <form class="from-control" action="#" method="post" ></form>
       
   
    </div>
   
    <table class="table table-bordered"> 
        <tr>
            <th>id</th>
            <th>username </th>
            <th>address</th>
            <th>age</th>
            <th>mobileno</th>
            <th>email</th>
            <th>feedback</th>
            
            
        </tr>
     <?php   $sq = "select * from tblfeedback";
    $rsq = mysql_query($sq);
    $i=1;
    while($rwq = mysql_fetch_array($rsq)){
?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $rwq['username']; ?></a></td>
            <td><?php echo $rwq['address']; ?></td>
            <td> <?php echo $rwq['age']; ?></td>
            <td><?php echo $rwq['mobileno']; ?></td>
            <td><?php echo $rwq['email']; ?></td>
            <td><?php echo $rwq['feedback']; ?></td>
            
        </tr>
        <?php $i++; } ?>
</table> 
 
</body>
</html>
