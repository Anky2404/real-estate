<!DOCTYPE html>
<html lang="en">
@include('backend.includes.head')

<body>

@include('backend.includes.header')

        <div class="dashboard-right">
            <div class="dashboard-title">
                <h2>Clients List</h2>
            </div>
            <div class="ads-table">
                <table>
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Registration Date</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count = 0;
                    foreach($user_list as $key => $value){ ?> 
                        <tr>
                            <td><?= ++$count .'.'; ?></td>
                            <td><?= $value['username']; ?></td>
                            <td><?= $value['email']; ?></td>
                            <td><?= $value['address']; ?></td>
                            <td><?= $value['created_at']; ?></td>
                         <td>
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