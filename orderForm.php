<!DOCTYPE html>
   <?php include "header.php"; ?>
    <?php require('DBTest.php'); ?>
 <meta charset="UTF-8">
        <title>Order Form</title>
        <h2>Make an Order</h2>
<form method="post" action="OrderDisplay.php">
            <div class="orderForm">
       
        <label for="cigar"><b>Cigar:</b></label>     
<?php
 
echo '<select name ="cigar" id="cigar">
    <option>Select</option>';
 
$query = "SELECT * FROM items";
$result = mysqli_query($mysqli, $query);
while ($row = mysqli_fetch_array($result)) {
echo '<option>'.$row['Description'].'</option>';
}
 
echo '</select>';
 
?>
        <label for="qty"><b>Quantity:</b></label>
            <input type="number" name="qty" id="qty" placeholder='Amount'>
         
         
            <input type="submit" id="submit" name="submit" value="Submit">
         
                  

            </form>
        
        <?php include "footer.php"; ?>
