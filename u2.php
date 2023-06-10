<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration</title>
	<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>		
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/js/modal.js"></script>
	<script>
function isNumber(e) {
   if (e.keyCode > 31 && (e.keyCode < 48 || e.keyCode > 57)) {
        return false;
    }
    return true;
}
</script>
	<style>
	body {
           background-image:url("img/gym.jpg");
           background-repeat:no-repeat;
           background-attachment:fixed;
           background-size:cover;
 }
        .login{
            width:370px;
            height:min-content;
            padding:40px;
            border-radius:12px;
            background:gray;
            margin-left: 35%;
            margin-top: 4%;
        }
    </style>


</head>
<body>
<?php 
error_reporting('E_All');
include('connection.php');
include('navbar.php');
 $iduser = $_GET['iduser'];
 $s = "select * from tblregister where iduser='".$iduser."'";
$r = mysql_query($s);
$rw = mysql_fetch_array($r);

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $address = $_POST['address'];
   $mobileno =$_POST['mobileno']; 
   $gender=$_POST['gender'];
   $membership=$_POST['membership'];
   if($iduser !=''){
       $qry = "update tblregister set name='".$name."',address='".$address."',mobileno='".$mobileno."',gender='".$gender."',membership='".$membership."' where iduser='".$iduser."'";
   }else{
    $qry = "insert into tblregister(name,address,mobileno,gender,membership)values('".$name."','".$address."','".$mobileno."','".$gender."','".$membership."')";
   }
   $res = mysql_query($qry);
	 mysql_insert_id();

    echo "<script>alert('Register successfully')</script>";
    echo "<script>window.location.href='registrationdata.php'</script>";
	}
?> 

    <div class="login">
        <h1 class="text center" style="text-align:center"><font color="black">Member Registration </font></h1>
        <form class="from-control"action="#" method="post">
		
            <div class="row">
			   <label class="form-lable col-md-5"><font color="black">Name:</font></label>
               <input class="form-control input-sm col-md-7" type="text" name="name" id="name" value="<?php echo $rw['name']; ?>" placeholder=" Name">
			</div>
			
            <div class="row">
			   <label class="form-lable col-md-5" ><font color="black">Address:</font></label>
               <input class="form-control input-sm col-md-7" type="text" name="address" id="address"value="<?php echo $rw['address']; ?>"  placeholder="Address">
			</div>
			
            <div class="row">
			   <label class="form-lable col-md-5" ><font color="black">Mobileno:</font></label>
               <input class="form-control input-sm col-md-7" type="text" name="mobileno" id="mobileno" value="<?php echo $rw['mobileno']; ?>"  maxlength="10" onkeypress="return isNumber(event)" placeholder="Mobileno">
			</div>
			
            <div class="row">
               <label class="form-lable col-md-3" ><font color="black">Gender:</font></label>
               <lable class="radio-inline">Male</lable> 
               <input class="" type="radio" id="gender" name="gender" value="male"<?php if($rw['gender']== 'male'){echo "checked";} ?> >
               <lable class="radio-inline">female</lable> 
               <input class="" type="radio" id="gender" name="gender" value="female"<?php if($rw['gender']== 'female'){echo "checked";} ?> > 
               <lable class="radio-inline">Other</lable> 
               <input class="" type="radio" id="gender" name="gender"value="other"<?php if($rw['gender']== 'other'){echo "checked";} ?> > 
			</div>
			
            <div class="row">
			   <label class="form-lable col-md-5"><font color="black">Membership:</font></label><br>
               <select class="form-lable input-sm col-md-12"  value="<?php echo $rw['membership']; ?>" name="membership" id="membership" >
                  <option value="select">select</option>
                  <option value="month"<?php if($rw['membership']=='month'){echo "selected";} ?>>month</option>
                  <option value="year"<?php if($rw['membership']=='year'){echo "selected";} ?>>year</option>
            </select>
			</div>
			
			<div class="row">
            <input class="btn btn-success text-center" style="margin-left: 45% ;
             margin-top: 6%;" type="submit" value="submit" name="submit" id="submit"></input>
        </div>
          
        </form>
    </div>
    
</body>
</html>