<?php
include('connection.php');
echo $iduser = $_GET['iduser'];
if(isset($_POST['delete_'.$iduser])){
	echo "<br>sqlexp--".$sqlexp = "delete from tbluser where iduser = '".$iduser."'";
$resexp = mysql_query($sqlexp);
echo  "<script>window.location.href='userdata.php'</script>";

}
?>