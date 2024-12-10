
<!DOCTYPE html>
<html lang="en">

@include('backend.includes.head')

<body>

@include('backend.includes.header')

        <div class="dashboard-right">
            <div class="dashboard-title">
                <h2>Welcome Back To DashBoard</h2>
            </div>
            <div class="ads-wrap">
                <div class="add-box">
                <div class="add-info">
                    <h4>Total Clients</h4>
                    <span><?= $user_count ?></span></div>
                </div>
                <div class="add-box">
                    <div class="add-info">
                        <h4>Total Orders</h4>
                        <span><?= $property_count ?></span></div>
                </div>
                <div class="add-box">
                    <div class="add-info">
                        <h4>Total Inquiries</h4>
                        <span><?= $Inquiry_count ?></span></div>
                </div>
                <div class="add-box">
                <div class="add-info">
                    <h4>Total Properties</h4>
                    <span><?= $order_count ?></span></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>