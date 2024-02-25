<?php

    require_once '../../src/models/admin/admintabledata.php';

    function productTableData(){


        $rowdata = tabledat();

        ?>         
            <caption style="font-size: 20px; font-weight: 400; padding-bottom: 50px;">Order List</caption>
            <thead>
                <th>Item Number</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Action</th>
            </thead>                    
        <?php
        
        
        while($row = $rowdata->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['proId'] . "</td>";
            echo "<td>" . $row['proName'] . "</td>";
            echo "<td>" . $row['proQty'] . "</td>";
            echo "<td>" . $row['unitPrice'] . "</td>"; 
            echo "<td>"?>
                            <img src="<?php echo $row['img'] ?>" style="width: 50px; height: 50px;"/>    
                        <?php "<td>";
            echo "<td>" ?>
                            <div style="display:flex; gap:20px;">
                                <button style="background-color: rgb(248, 119, 231);">
                                    <a style="text-decoration:none; color:black;" href="../../src/controllers/admin/productDelete.php?proid=<?php echo $row['proId'] ?>">Delete</a>
                                </button>
                                <button style="background-color: rgb(247, 120, 120);">
                                    <a style="text-decoration:none; color:black;" href="../../../public/admin/edit_product.php?proid=<?php echo $row['proId'] ?>">Edit</a>
                                </button>
                            </div>
                        <?php           
            echo "</tr>";
                      
        }        

    }




?>

