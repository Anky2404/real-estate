<!DOCTYPE html>
<html lang="en">
@include('backend.includes.head')

<body>

@include('backend.includes.header')

        <div class="dashboard-right">
            <div class="dashboard-title">
                <h2>Inquiry List</h2>
            </div>
            <div class="ads-table">
                <table>
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Client Name</th>
                            <th>Client Name</th>
                            <th>Total Amount</th>
                            <th>Created_at</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count = 0;
                    foreach($contact_list as $key => $value){ ?> 
                        <tr>
                            <td><?= ++$count.'.'; ?></td>
                            <td><?= $value['name']; ?></td>
                            <td><?= $value['phone']; ?></td>
                            <td><?= $value['client_demand']; ?></td>
                            <td><?= $value['created_at']; ?></td>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            
            </div>
        </div>
    </div>

</body>

</html>