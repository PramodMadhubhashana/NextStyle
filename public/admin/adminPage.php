<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin/admin.css" type="text/css">
    
</head>
<body>
    <nav>
        <div style="display: flex;">
            <label style="font-size: 30px; font-weight: 600;"><a href="../client/home.html" style="color: black;">NextStyle</a></label>
        </div> 
        <div>
            <label style="font-size: 20px; font-weight: 600;"><a href="#" style="text-decoration: none; color: black;">Add Products</a></label>
        </div>  
        <div>
            <a href="../client/login.html">
                <button class="button-59" role="button" style="height: 30px;">LogOut</button>
            </a>
        </div>     
    </nav>

    <div style="display: flex; flex-direction: column; margin: 30px;">
        <div style="display: flex; justify-content: center; width: 100%;">
            <label style="font-size: 26px; font-weight: 600;">Dashboard</label>
        </div>
        <div style="display: flex; flex-direction: row; justify-content: center; gap: 100px; padding: 50px;">
            <div class="divcart" onclick="orderList()">
                <label style="font-size: 24px; font-weight: 550;">Order List</label>
                <li><a href="#"><img src="../img/clipboard.png" alt="user" width="24px" height="24px"  style="padding: 10px;"/></a></li>
            </div>
            <div class="divcart" onclick="orders()">
                <label style="font-size: 24px; font-weight: 550;">Orders</label>
                <li><a href="#"><img src="../img/package2.png" alt="user" width="24px" height="24px"  style="padding: 10px;"/></a></li>
            </div>            
        </div>
        <div style="display: flex; flex-direction: column; ">
            <table id="orderList">
                <caption style="font-size: 20px; font-weight: 400; padding-bottom: 50px;">Order List</caption>
                <thead>
                    <th>Item Number</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>A</td>
                        <td>B</td>
                        <td>C</td>
                        <td>a</td>
                        <td>
                            <button onclick="editRow(this)" style="background-color: rgb(248, 119, 231);">Edit</button>
                            <button onclick="deleteRow(this)" style="background-color: rgb(247, 120, 120);">Delete</button>
                          </td>
                    </tr>
                </tbody>
            </table>
            <table id="orders" style="display: none;">
                <caption style="font-size: 20px; font-weight: 400; padding-bottom: 50px;">Orders</caption>
                <thead>
                    <th>Item Number</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Date</th>
                </thead>
                <tbody>
                    <tr>
                        <td>A</td>
                        <td>B</td>
                        <td>C</td>
                        <td>D</td>
                        <td>date</td>
                </tbody>
            </table>
        </div>
    </div>    
</body>
<script src="../js/admin/adminPage.js"></script>
</html>