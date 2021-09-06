<!DOCTYPE html>
   
    <?php include "header.php"; ?>
        <meta charset="UTF-8">
        <title>Welcome</title>
<?php
session_start();
$uname = $_POST['uname'];
$pswd = $_POST['pswd'];
require('DBTest.php');
$sql= "SELECT * FROM authorizedusers WHERE username = '$uname' AND pswd = '$pswd' ";
$result = mysqli_query($mysqli,$sql);
$check = mysqli_fetch_array($result);
//$result = mysqli_query($mysqli,$query);
//$count = count($result);
//$result = $mysqli->query($query);
//$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

//mysqli_free_result($result);
	// Close Connection
	//mysqli_close($mysqli);
//$unamearray = array('Mendy');
//$pswdarray = array('a');*/

if(isset($_POST['uname'])&& isset($_POST['pswd'])){
   //if (in_array($uname,$unamearray) && in_array($pswd,$pswdarray))
    //foreach($posts as $x => $value){
        if (isset($check)){
       setcookie('username', $uname, time()+(3600));
      $_SESSION['LoggedIn'] = TRUE; 
     /* $_SESSION['uname'] = $uname;
      echo  $_SESSION['name'];
       echo $_SESSION['LoggedIn'];*/
      
   }
else{
   $_SESSION['LoggedIn'] = FALSE;
}

}
//}
 ?>
        <p><a id="Gaurded"href="contentPage.php">Gaurded Content</a></p>
<?php include "footer.php"; 
mysqli_close($mysqli);?>
