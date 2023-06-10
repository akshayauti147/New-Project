
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
	<script>
function DeleteEntry(id) {
	//alert(id);
			
				if(confirm('Do You Want To Delete')){
					
					return true;
				}else{
					return false;
				}	
}

</script>
</head>
<body style=background-color:powderblue;>
<?php 
error_reporting('E_All');
include('connection.php');
include('navbar.php');


?>
    <div class="login">
        <h1 class="text center" style="text-align:center"><font color="black">apointmentdata Form</font></h1>
       
    </div>
    <?php if($getid ==''){ ?>  
    <table class="table table-bordered" > 
        <tr>
            <th>sr</th>
            <th>chooseadoctor</th>
            <th>patientname</th>
            <th>address</th>
            <th>mobileno</th>
            <th>problem</th>
            <th>date</th>
            <th>fee</th>
            <th>gender</th>
            <th colspan="2">Option</th>
            
        </tr>
     <?php   $sq = "select * from tblapointment";
    $rsq = mysql_query($sq);
    $i=1;
    while($rwq = mysql_fetch_array($rsq)){
?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><a href="r3.php?id=<?php echo $rwq['id']; ?>" target="_blank"><?php echo $rwq['chooseadoctor']; ?></a></td>
            <td><?php echo $rwq['patientname']; ?></td>
            <td> <?php echo $rwq['address']; ?></td>
            <td><?php echo $rwq['mobileno']; ?></td>
            <td><?php echo $rwq['problem']; ?></td>
            <td><?php echo $rwq['date']; ?></td>
            <td><?php echo $rwq['fee']; ?></td>
            <td><?php echo $rwq['gender']; ?></td>
             <td><a href="r3.php?id=<?php echo $rwq['id']; ?>" target="_blank"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><form method="post" action="deleter3.php?id=<?php echo $rwq['id']; ?>">
			<button type="submit" id="delete_<?php echo $rwq['id']; ?>" name="delete_<?php echo $rwq['id']; ?>" class="btn btn-danger" onclick="return DeleteEntry('<?php echo $rwq['id']; ?>');">Delete</button>
            </td></form>
        </tr>
        <?php $i++; } ?>
</table> 
 <?php  } ?>
</body>
</html>