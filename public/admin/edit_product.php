<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="../css/admin/add_product.css" type="text/css">
</head>

<body>
    <nav>
        <div style="display: flex;">
            <label style="font-size: 30px; font-weight: 600;"><a href="../client/home.html" style="color: black;">NextStyle</a></label>
        </div>
        
        <div>
            <a href="../client/login.html">
                <button class="button-59" role="button" style="height: 30px;">LogOut</button>
            </a>
            
        </div>
    </nav>

    <div style="display: flex; flex-direction: column; margin: 50px; align-items: center;">
        <div style="padding: 30px;">
            <label style="font-size: 26px; font-weight: 600;">Edit Product</label>
        </div>

        <div
            style="display: flex; flex-direction: column; background-color: rgb(202, 202, 202); width: 50%; padding: 20px; align-items:start;">
            <form>
                <label style="font-size: 20px;font-weight: 300; padding: 10px;">Enter Product Name</label>
                <input type="text" placeholder="Enter Product Name" class="textbox" name="product Name" id="ProductName"
                    required>

                <label style="font-size: 20px;font-weight: 300; padding: 10px;">Enter Product Quantity</label>
                <input type="number" placeholder="Enter Product Quantity" class="textbox" name="Quantity" id="Quantity" required>

                <label style="font-size: 20px;font-weight: 300; padding: 10px;">Enter Unit Price</label>
                <input type="number" placeholder="Enter Product Price" class="textbox" name="Price" id="Price" required>

                <div style="padding: 10px; width: 100%; display: flex; justify-content: center;">
                    <button class="button-59" role="button">Update</button>
                </div>                
            </form>
        </div>
    </div>
</body>
</html>