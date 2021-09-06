   <?php include "header.php"; ?>
    <?php require('DBTest.php'); ?>
 <meta charset="UTF-8">
        <title>Order Details</title>
        
<?php 
 $cigar = $_POST['cigar'];
 $amount = $_POST['qty'];
 $cigarID = "select Item_ID from items where Description = '".$cigar."'";
 $price = "select price from items where Description = '".$cigar."'";
$result = mysqli_query($mysqli, $cigarID);
$row = mysqli_fetch_array($result);
$result1 = mysqli_query($mysqli, $price);
$row1 = mysqli_fetch_array($result1);
$quotedPrice = $row1['price'] * $amount;      
$inventory = "select inventory from items where Description = '".$cigar."'";
$result2 = mysqli_query($mysqli, $inventory);
$row2 = mysqli_fetch_array($result2);
$write = "INSERT INTO order_details (Item_ID,QTY,QuotedPrice)Values('".$row['Item_ID']."',".$amount.",".$quotedPrice.")";
$newInventory = $row2['inventory'] - $amount;
$updateInventory = "UPDATE items SET Inventory = '".$newInventory."' where Description = '".$cigar."'";

if ($amount <= $newInventory){
$action = mysqli_query($mysqli, $write);
$action1 = mysqli_query($mysqli, $updateInventory);
        echo "<div>
        <h4><b>Thank you for your Order:</b></h4>    
        <h5><b>Cigar:</b> ".$cigar." <br>
            <b>Quantity:</b> ".$amount." <br>
            <b>Price:</b> ".$quotedPrice."<br>
        </h5>
        </div>"; 

}else{
    echo "Insufficient Inventory"; ?>
     <meta http-equiv="refresh" content="2;URL='orderForm.php'" /> <?php
}


?>
         <?php include "footer.php"; ?>



  







