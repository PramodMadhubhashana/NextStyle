<?php

    function pay(){

        if(isset($_GET['tpric'])){
            $tprice = $_GET['tpric'];
            $uid = $_GET['uid'];
        }

        ?>
        
            <form action="../../src/models/insertorders.php?uid=<?php echo $uid?>" method="post" name="pay">
                <div class="payment-method">
                    <h3>Select Payment Method:</h3>
                    <label><input type="radio" name="payment" value="cod" checked> Cash on Delivery</label>
                    <label><input type="radio" name="payment" value="card"> Card Option</label>
                </div>

                
                <div class="card-details" style="display: none;">
                    <h3>Enter Card Details:</h3>
                    <div class="form-group">
                        <label for="card-holder">Card Holder Name:</label>
                        <input type="text" id="card-holder" placeholder="Enter card holder name" required >
                    </div>
                    <div class="form-group">
                        <label for="card-number">Card Number:</label>
                        <input type="text" id="card-number" placeholder="Enter card number" required>
                    </div>
                    <div class="form-group">
                        <label for="expiry-date">Expiry Date:</label>
                        <input type="text" id="expiry-date" placeholder="MM/YY" required>
                    </div>
                    <div class="form-group">
                        <label for="cvv">CVV:</label>
                        <input type="text" id="cvv" placeholder="CVV" required>
                    </div>
                </div>
            

            
                <div class="total-amount">
                    <h3>Total Amount:</h3>
                    <p>$ <?php echo $tprice?></p> 
                </div>
                            
                <button id="pay-button" type="submit"><a href="../../src/controllers/insertorders.php?uid=< echo $uid?>&tprc=<?php echo $tprice?>" style="text-decoration: none; color: black;">Pay Now</a></button>
            </form>
        
        
        
        
        <?php
    }





?>