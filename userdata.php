
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
function DeleteEntry(iduser) {
	//alert(iduser);
			
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
        <h1 class="text center" style="text-align:center"><font color="black">userdata Form</font></h1>
       
    </div>
    <?php if($getiduser ==''){ ?>  
    <table class="table table-bordered"> 
        <tr>
            <th>sr</th>
            <th>user </th>
            <th>password</th>
            <th>confirm pwd</th>
            <th>email</th>
            <th colspan="2">Option</th>
            
        </tr>
     <?php   $sq = "select * from tbluser";
    $rsq = mysql_query($sq);
    $i=1;
    while($rwq = mysql_fetch_array($rsq)){
?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><a href="user.php?iduser=<?php echo $rwq['iduser']; ?>" target="_blank"><?php echo $rwq['username']; ?></a></td>
            <td><?php echo $rwq['password']; ?></td>
            <td> <?php echo $rwq['confirmpassword']; ?></td>
            <td><?php echo $rwq['emailid']; ?></td>
             <td><a href="user.php?iduser=<?php echo $rwq['iduser']; ?>" target="_blank"><span class="glyphicon glyphicon-pencil"></span></a></td>
			<td><form method="post" action="deleteuser.php?iduser=<?php echo $rwq['iduser']; ?>">
			<button type="submit" id="delete_<?php echo $rwq['iduser']; ?>" name="delete_<?php echo $rwq['iduser']; ?>" class="btn btn-danger" onclick="return DeleteEntry('<?php echo $rwq['iduser']; ?>');">Delete</button>
            </td></form>
        </tr>
        <?php $i++; } ?>
</table> 
 <?php  } ?>
</body>
</html>