<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link rel="stylesheet" href="styles.css">
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

.order-list-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 60%;
    margin: 0 auto;
}

h2 {
    text-align: center;
    color: #333;
}

.order-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.order-table th,
.order-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.order-table th {
    background-color: #f8f8f8;
}

.order-summary {
    margin-top: 20px;
    text-align: right;
}

.order-summary p {
    font-size: 18px;
}

.order-actions {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

button {
    padding: 10px 20px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}

    </style>
</head>
<body>

    <div class="order-list-container">
        <h2>Your Orders</h2>
        
        <table class="order-table">
            <thead>
                <tr>
                    <th>OrderNo</th>
                    <th>Customer Name</th>
                    <th>Property Name</th>
                    <th>Paid Amount</th>
                    <th>Order At</th>
                </tr>
            </thead>
            <tbody>
             <?php foreach($order as $key => $value){ ?>
                <tr>
                    <td><?= $value['order_number'] ?></td>
                    <td><?= $value['customer_name'] ?></td>
                    <td><?= $value['property_name'] ?></td>
                    <td>£<?= $value['paid_amount'] ?></td>
                    <td><?= $value['created_at'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

</body>
</html>
