<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="stylesheet" <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>		
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/js/modal.js"></script>
<title> Registration Page </title>
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
<style> 
/*.login{
            width:500px;
            height:300px;
            padding:40px;
            border-radius:12px;
            background:gray;
            margin-left: 40%;
            margin-top: 4%;
        }*/
 Body {
  background-image: url('img/H1.jpg');  
  font-family: Calibri, Helvetica, sans-serif;
 
}
button { 
       background-color: #4CAF50; 
       width: 100%;
        color: black; 
        padding: 15px; 
        margin: 10px; 
        border: none; 
        cursor: pointer; 
         } 
 form { 
        border: 3px solid #f1f1f1; 
    } 
 input[type=text], input[type=password] { 
        width: 90%; 
        margin: 8px 0;
        padding: 3px 3px; 
        display: inline-block; 
        border: 2px solid green; 
        box-sizing: border-box; 
    }
 button:hover { 
        opacity: 0.7; 
    } 
  .cancelbtn { 
        width: auto; 
        padding: 10px 18px;
        margin: 10px 5px;
    } 
      
   
/* .container { 
        padding: 25px; 
        
        margin: 15px 10px;
        width: 300px;
        
    } */
</style> 
</head>
<?php
include('connection.php');
include('navbar.php');





-

$getiduser = $_GET['iduser'];

if(isset($_POST['save'])){
    echo "---".$username = $_POST['username'];
    echo "---".$password = $_POST['password'];
    echo "---".$confirmpassword = $_POST['confirmpassword'];
    echo "---".$emailid = $_POST['emailid'];
    if($getiduser !=''){
     echo   $sql = "update tbluser set username='".$username."',password='".$password."',confirmpassword='".$confirmpassword."',emailid='".$emailid."' where iduser='".$getiduser."'";
    }else{
  echo  $sql="insert into tbluser(username,password,confirmpassword,emailid)
    values('".$username."','".$password."','".$confirmpassword."','".$emailid."')";
    }
    $res = mysql_query($sql);
    echo"<script>alert('record saved successfully')</script>";
       echo"<script>window.location.href='login.php'</script>";

}

    echo $sqq = "select * from tbluser where iduser='".$getiduser."'";
     $rsqq = mysql_query($sqq);
    $rwqq = mysql_fetch_array($rsqq);
?> 
<body img src="nature.jpg" alt="nature" width="300" height="200">  
   
    <center> <h1> User Registration Form </h1> </center><br><br>
    <form method="post" name="userform" id="userform" action=""  >
        <div  style="margin-left:30%" > 
        <div class="col-md-12">
            <div class="col-md-2"> 
            <label>Username : </label> </div>
            <div class="col-md-4">
            <input type="text" placeholder="Enter Username" name="username"  value="<?php echo $rwqq['username']; ?>" required>
            </div>
            </div>
            <div class="col-md-12">
            <div class="col-md-2"> 
            <label>Password : </label></div>
            <div class="col-md-4"> 
            <input type="password" placeholder="Enter Password" name="password" value="<?php echo $rwqq['password']; ?>" required>
</div>
</div>
            <div class="col-md-12">
            <div class="col-md-2">
            <label> confirm Password : </label></div>
            <div class="col-md-4">
            <input type="password" placeholder="Enter confirm Password" name="confirmpassword" value="<?php echo $rwqq['confirmpassword']; ?>" required><br>
</div>
</div>
            <div class="col-md-12">
            <div class="col-md-2">
            <label> Email ID : </label></div>
            <div class="col-md-4"> 
            <input type="text" placeholder="Email" name="emailid" value="<?php echo $rwqq['emailid']; ?>" required>
</div>
</div>            

            <div class="col-md-12 ">
            
               
            <button class="col-md-offset-2 col-md-2"  type="submit" id="save" name="save" >Submit</button><br></div>
           

          
            
           
            
        </div> 
    </form>
    <?php if($getiduser !=''){ ?>  
    <table class="table table-bordered"> 
        <tr>
            <th>sr</th>
            <th>user </th>
            <th>password</th>
            <th>confirm pwd</th>
            <th>email</th>
            <th colspan="2">Option</th>
            
        </tr>
<?php
    $sq = "select * from tbluser";
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
			<button  style="margin-left:10px" type="submit" id="delete_<?php echo $rwq['iduser']; ?>" name="delete_<?php echo $rwq['iduser']; ?>" class="btn btn-danger" onclick="return DeleteEntry('<?php echo $rwq['iduser']; ?>');">Delete</button>
            </td></form>
        </tr>
        <?php $i++; } ?>
</table> 
<?php } ?>
</body>   
</html>






















































































































































