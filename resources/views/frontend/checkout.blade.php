<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
    <link rel="stylesheet" href="styles.css">
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    padding: 20px;
}

.checkout-container {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
    margin: 0 auto;
}

h2 {
    text-align: center;
    color: #333;
}

fieldset {
    border: 1px solid #ccc;
    padding: 15px;
    margin-bottom: 15px;
    border-radius: 8px;
}

legend {
    font-weight: bold;
    font-size: 18px;
}

label {
    font-size: 14px;
    margin-bottom: 8px;
    display: block;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="checkbox"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ddd;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #28a745;
    color: white;
    font-size: 16px;
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
    <div class="checkout-container">
        <h2>Checkout</h2>
        
        <form action="/submit-order" method="POST">
            @csrf
            <fieldset>
                <legend>Customer Information</legend>
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="customer_name" required><br><br>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required><br><br>

                <input type="hidden" name="paid_amount" value="<?= $output->rent; ?>"  />
                
                <input type="hidden" name="property_name" value="<?= $output->property_name; ?>"  />
            </fieldset>
    
            <fieldset>
                <legend>Order Summary</legend>
                <p>Property Name: <?= $output->property_name; ?> </p>
                <p>Paid Amount:  £<?= $output->rent; ?></p>
            </fieldset>

            <button type="submit">Place Order</button>
        </form>
    </div>
</body>
</html>
