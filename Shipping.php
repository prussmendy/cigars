<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php include "header.php" ; ?>

        <meta charset="UTF-8">
        <title>Customer Information</title>
        <h2>Shipping Information</h2>
        <?php
        
        // put your code here
        ?>
        <form method="post" action="clientShippingInfo.php">
            <div class="shippingForm">
                <label for="name"><b>Name:</b></label>
            <input type="text" name="name" id="name" placeholder='Enter Your Name' >
            <label for="Address"><b>Address:</b></label>
            <input type="textarea" name="address" id="address" placeholder='Enter Your Address'><br><br>
             <label for="city"><b>City:</b></label>
            <input type="text" name="city" id="city" placeholder='Enter City'>
            <label for="state"><b>State:</b></label>
            <select name="state" id="state">
  <option value="" selected="selected">Select a State</option>
  <option value="AL">Alabama</option>
  <option value="AK">Alaska</option>
  <option value="AZ">Arizona</option>
  <option value="AR">Arkansas</option>
  <option value="CA">California</option>
  <option value="CO">Colorado</option>
  <option value="CT">Connecticut</option>
  <option value="DE">Delaware</option>
  <option value="DC">District Of Columbia</option>
  <option value="FL">Florida</option>
  <option value="GA">Georgia</option>
  <option value="HI">Hawaii</option>
  <option value="ID">Idaho</option>
  <option value="IL">Illinois</option>
  <option value="IN">Indiana</option>
  <option value="IA">Iowa</option>
  <option value="KS">Kansas</option>
  <option value="KY">Kentucky</option>
  <option value="LA">Louisiana</option>
  <option value="ME">Maine</option>
  <option value="MD">Maryland</option>
  <option value="MA">Massachusetts</option>
  <option value="MI">Michigan</option>
  <option value="MN">Minnesota</option>
  <option value="MS">Mississippi</option>
  <option value="MO">Missouri</option>
  <option value="MT">Montana</option>
  <option value="NE">Nebraska</option>
  <option value="NV">Nevada</option>
  <option value="NH">New Hampshire</option>
  <option value="NJ">New Jersey</option>
  <option value="NM">New Mexico</option>
  <option value="NY">New York</option>
  <option value="NC">North Carolina</option>
  <option value="ND">North Dakota</option>
  <option value="OH">Ohio</option>
  <option value="OK">Oklahoma</option>
  <option value="OR">Oregon</option>
  <option value="PA">Pennsylvania</option>
  <option value="RI">Rhode Island</option>
  <option value="SC">South Carolina</option>
  <option value="SD">South Dakota</option>
  <option value="TN">Tennessee</option>
  <option value="TX">Texas</option>
  <option value="UT">Utah</option>
  <option value="VT">Vermont</option>
  <option value="VA">Virginia</option>
  <option value="WA">Washington</option>
  <option value="WV">West Virginia</option>
  <option value="WI">Wisconsin</option>
  <option value="WY">Wyoming</option>
</select><br><br>
<label for='zip'><b>Zip Code:</b></label>
            <input type="text" name="zip" id="zip" placeholder='Enter Zip Code' event handling><br><br>
            Do you want us to contact you with occasional promotions?
            <input type="checkbox" name="contact" id="contact"><br><br>
            Paypal or Credit Card:
            <input type="radio" id="Paypal" name="paymentMethod" value="Paypal">
            <label for="Paypal">Paypal</label>
            <input type="radio" id="CreditCard" name="paymentMethod" value="CreditCard">
            <label for="Paypal">Credit Card</label><br><br>
            <input type="submit" id="submit" name="submit" value="Submit">
        </form>
            
<?php include "footer.php"; ?>

