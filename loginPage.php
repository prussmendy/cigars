<!DOCTYPE html>

    <?php include "header.php"; ?>
        <meta charset="UTF-8">
        <title>Login</title>
        <h2>Please Login</h2>
        <form action="responsePage.php" method="post">
            
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <label for="pswd"><b>Password</b>
    <input type="password" placeholder="Enter Password" name="pswd" required>
    <button type="submit" name="submit">Login</button></label>
    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
        </div>
    
    </form>
        <?php
        ?>
        
<?php include "footer.php"; ?>
