<?php

    require_once '../../src/models/cart.php';   

    function cart($username, $proId, $qty, $name, $price){
    
        $cart = insertOrUpdateCart($username, $proId, $qty, $name, $price);

        if($cart){
            ob_start();
            sleep(2);
            echo "<script>window.location.href='/public/client/cart.php';</script>";
            exit; 
        }
        else {
            ob_start();
            sleep(2);
            echo "<script>window.location.href='/public/client/home.php';</script>";
            exit; 
        }
    }

    function cartList($userId){

        require_once '../../src/models/itemlist.php';
        
        $cartList = getcartList($userId);
        $index = 0 ;
        foreach ($cartList as $item){            
            ?>           
                <div class="item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQX4YsGROeiDVdLcw87Y2uaVJnfgMrT3ZJ1yA&usqp=CAU"
                        alt="Product Image">
                    <div class="item-details">
                        <h3><?php echo $item['Name']?></h3>
                        <p>Price: $ <?php echo $item['Price'] ?></p>
                        <div class="quantity-selector">
                            <button class="quantity-button minus">-</button>
                            <input type="number" class="quantity-input" value=<?php echo $item['quantity'] ?>>
                            <button class="quantity-button plus">+</button>
                        </div>
                    </div>                    
                        <div class="item-actions">
                            <a href="../../src/controllers/removeitem.php?uid=<?php echo $userId?>&indx=<?php echo $index?>">
                                <button>Remove</button>
                            </a>
                        </div>
                </div>            
            <?php
            $index++;
        } 
        
    }
?>