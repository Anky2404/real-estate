
<!DOCTYPE html>
<html lang="en">
@include('backend.includes.head')

<body>

@include('backend.includes.header')

        <div class="dashboard-right">
            <div class="dashboard-title">
                <h2>Orders List</h2>
            </div>
            <div class="ads-table">
                <table>
                    <thead>
                        <tr>
                            <th>OrderNo</th>
                            <th>Client Name</th>
                            <th>Client Email</th>
                            <th>Client Phone</th>
                            <th>Property Name</th>
                            <th>Paid Amount</th>
                            <th>Order At</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count = 0;
                    foreach($order as $key => $value){ ?> 
                        <tr>
                            <td><?= $value['order_number'] ?></td>
                            <td><?= $value['customer_name'] ?></td>
                            <td><?= $value['email'] ?></td>
                            <td><?= $value['phone'] ?></td>
                            <td><?= $value['property_name'] ?></td>
                            <td>£<?= $value['paid_amount'] ?></td>
                            <td><?= $value['created_at'] ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
            </div>
        </div>
    </div>

</body>

</html>