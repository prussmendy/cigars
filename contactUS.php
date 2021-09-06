<?php
include "header.php";?>

	<title>Contact Us</title>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">    
         
        </div>
      </div>
    </nav>
    <div class="container">	
    	
        <form method="post" action="mail.php">
	      <div class="form-group">
		      <label>Name</label>
		      <input type="text" name="name" class="form-control">
	      </div>
	      <div class="form-group">
	      	<label>Email</label>
	      	<input type="text" name="email" class="form-control">
	      </div>
	      <div class="form-group">
	      	<label>Message</label>
	      	<textarea name="message" class="form-control"></textarea>
	      </div>
	      <br>
	      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
     <?php include "footer.php"; ?>
