<?php

    function pay(){

        if(isset($_GET['tpric'])){
            $tprice = $_GET['tpric'];
            $uid = $_GET['uid'];
        }

        ?>
        
            <form action="../../src/controllers/insertorders.php?uid=<?php echo $uid?>&tprc=<?php echo $tprice ?>" method="post" name="pay">
                <div class="payment-method">
                    <h3>Select Payment Method:</h3>
                    <label><input type="radio" name="payment" value="Cash On Delivery" checked required> Cash on Delivery</label>
                    <label><input type="radio" name="payment" value="card" required> Card Option</label>
                </div>            
                <div class="total-amount">
                    <h3>Total Amount:</h3>
                    <p>$ <?php echo $tprice?></p> 
                </div>
                        
                <button type="submit">submit</button>

            </form>
        
        
        
        
        <?php
    }





?>