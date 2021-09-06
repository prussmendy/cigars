<!DOCTYPE html>

    <?php include "header.php"; ?>
        <meta charset="UTF-8">
        <title>Content</title>


<?php
session_start();
$loggedin = $_SESSION['LoggedIn'];
$username = $_COOKIE['username'];
/* echo $loggedin;*/ 

if($loggedin == TRUE){
    
    $display = 'Hello '.$username;
    session_destroy();
}else{
    $display = 'Sorry not recognized';
    ?>  
     <meta http-equiv="refresh" content="2;URL='loginpage.php'" />  
    <?php   
}
?>
        <h5><?php echo $display;?></h5>
<?php include "footer.php"; 