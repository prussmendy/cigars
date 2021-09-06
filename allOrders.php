<?php include "header.php"; ?>    
<?php require('DBTest.php'); ?>
 <meta charset="UTF-8">
        <title>All Orders</title>
        <h2>All Orders</h2>
        <?php 
        $query = "select * from order_details";
        $result = mysqli_query($mysqli,$query);
        //$row = mysqli_fetch_array($result);
        $num = 1;
       // print_r($row);
        while ($row = mysqli_fetch_assoc($result)) {
    echo "<h4>Order #".$num."</h4><h5>Order ID: ".$row['Order_ID']."</h5>
       <h5>Item ID: ".$row['Item_ID']."</h5>
        <h5>Qty: ".$row['Qty']."</h5><h5>Quoted Price: ".$row['QuotedPrice']."</h5><br>";
    $num +=1;
}
        
        ?>
       <?php// include "footer.php"; ?>