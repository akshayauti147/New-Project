<?php
include('connection.php');
echo $id = $_GET['id'];
if(isset($_POST['delete_'.$id])){
	echo "<br>sqlexp--".$sqlexp = "delete from tblapointment where id = '".$id."'";
$resexp = mysql_query($sqlexp);
echo  "<script>window.location.href='r3data.php'</script>";

}
?>