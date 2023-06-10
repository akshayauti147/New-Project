<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>		
	
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <title>appointment</title>
    <script>
function DeleteEntry(id) {
	//alert(iduser);
			
				if(confirm('Do You Want To Delete')){
					
					return true;
				}else{
					return false;
				}	
}

</script>
    <style>
    body{
        background-image:url("img/h3.jpg");
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-size:cover;
        
    }
  
    .main{
            width:370px;
            height:min-content;
            padding:20px;
            border-radius:12px;
            background:gray;
            margin-left: 35%;
        }
    
    h1{
        text_align: center;
        padding: 20px;

    }
    </style>
</head>

<?php 
error_reporting('E_All');
include('connection.php');
include('navbar.php');
$id=$_GET['id'];
$sq="select * from tblapointment where id='".$id."'";
$rsq = mysql_query($sq);
$rwq = mysql_fetch_array($rsq);


if(isset($_POST['confirm'])){
   $chooseadoctor = $_POST['chooseadoctor'];
   $patientname = $_POST['patientname'];
   $address = $_POST['address'];
   $mobileno= $_POST['mobileno'];
   $problem = $_POST['problem'];
   $date = $_POST['date'];
   $fee = $_POST['fee'];
   $gender = $_POST['gender'];

   if($id !=''){
     $sql = "update tblapointment set chooseadoctor='".$chooseadoctor."',patientname='".$patientname."',address='".$address."',mobileno='".$mobileno."',problem='".$problem."',date='".$date."',fee='".$fee."',gender='".$gender."' where id='".$id."'";
   }else{
  $sql="insert into tblapointment(chooseadoctor,patientname,address,mobileno,problem,date,fee,gender)
   values('".$chooseadoctor."','".$patientname."','".$address."','".$mobileno."','".$problem."','".$date."','".$fee."','".$gender."')";
   }
   $res = mysql_query($sql);
   echo"<script>alert('Apointment confirm')</script>";
     echo"<script>window.location.href='r3data.php'</script>";

}

?>
<body>
<div class="col-md-offset-2 col-md-8" style="margin-left:32%" >
<h1 class="text center" style="text-align:center; color:white; margin-right:42%; " >Appointment Form</h1>

<form action="" method="post">

<div class="row">
    <label class="col-md-2" for="chooseadoctor" style="color:white">choose a  doctor</label>
    <select class="col-md-4 input-sm"  name="chooseadoctor" id="chooseadoctor" required>
        <option value="select"><style="color:white">select</option>
        <option value="ram" <?php if($rwq['chooseadoctor'] == 'ram'){ echo "selected";}?>>ram</option>
        <option value="akshay" <?php if($rwq['chooseadoctor'] == 'akshay'){ echo "selected";}?>>akshay</option>
        <option value="tanaya" <?php if($rwq['chooseadoctor'] == 'tanaya'){ echo "selected";}?>>tanaya</option>
        <option value="rupali" <?php if($rwq['chooseadoctor'] == 'rupali'){ echo "selected";}?>>rupali</option>
    </select>
	</div><br>
 
<div class="row">
    <label class="col-md-2" for="patientname" style="color:white">patient name
    </label>
    <input class="col-md-4 input-sm" type="text" id="patientname" name="patientname" value="<?php echo $rwq['patientname'];?>" required>    
</div>
<br> 

<div class="row">
    <label class=" col-md-2" for="address" style="color:white"> address </label>
    <input class="col-md-4 input-sm" type="text" id="address" name="address" value="<?php echo $rwq['address'];?>"  required>    
</div>  
<br>  

<div class="row">
    <label class=" col-md-2" for="mobile_no" style="color:white">mobileno  </label>
    <input class="col-md-4 input-sm" type="text" id="mobileno" name="mobileno" maxlength="10" value="<?php echo $rwq['mobileno'];?>"  required>    
</div>  
<br>

<div class="row">
    <label class=" col-md-2" for="problem" style="color:white">problem</label>
    <input class="col-md-4 input-sm" type="text" id="problem" name="problem" value="<?php echo $rwq['problem'];?>" required>    
</div> 
<br>
<div class="row" >
    <label class=" col-md-2" for="date" style="color:white">date</label>
    <input class="col-md-4 input-sm" type="date" id="date" name="date" value="<?php echo date('Y-m-d') ?>" required>    
</div> 
<br>
<div class="row" >
    <label class=" col-md-2" for="fee" style="color:white">fee</label>
    <input class="col-md-4 input-sm" type="fee"id="fee" name="fee" value="<?php echo $rwq['fee']; ?>" required>    
</div>
<div class="row">
    <label class=" col-md-2" style="color:white">gender: </label> 

    <input type="radio" name="gender" id="male" value="male" ><span id="male" <?php if($rwq['gender'] == 'male'){ echo "checked"; } ?> >male</span>
        
    
    <input type="radio" name="gender" id="female" value="female" <?php if($rwq['gender'] == 'female'){ echo "checked"; } ?> >
    <span id="female"> female  </span> 

     
    <input type="radio" name="gender" id="other" value="other" <?php if($rwq['gender'] == 'other'){ echo "checked"; } ?>  >
    <span id="other"> other     </span> 

 </div>  
<div class="row">
    <input class="btn btn-success text-center" style="margin-left: 27%; margin-top: 2%;" type="submit" value="confirm" name="confirm" id="confirm">
   
</div>
 </form>
</div>
</body>
</html>