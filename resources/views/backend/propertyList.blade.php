<!DOCTYPE html>
<html lang="en">
@include('backend.includes.head')

<body>

@include('backend.includes.header')

        <div class="dashboard-right">
            <div class="dashboard-title">
                <h2>Properties List</h2>
            </div>
            <div class="ads-table">
                <table>
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>PropertyImage</th>
                            <th>PropertyName</th>
                            <th>PropertyRent</th>
                            <th>Bedrooms</th>
                            <th>Bathrooms</th>
                            <th>Garage</th>
                            <th>Parkings</th>
                            <th>Wifi Service</th>
                            <th>PropertyLocation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $count = 0;
                    foreach($properties as $key => $value){ ?> 
                        <tr>
                            <td><?= ++$count.'.'; ?></td>
                            <td><img src="/<?= $value['image']; ?>" alt="avatar" height="100px" width="10px" ></td>
                            <td><?= $value['property_name']; ?></td>
                            <td>£<?= $value['rent']; ?></td>
                            <td><?= $value->details ? $value->details->no_of_bedrooms : 'N/A' ?></td>
                            <td><?= $value->details ? $value->details->no_of_bathrooms : 'N/A' ?></td>
                            <td><?= $value->details ? $value->details->no_of_garages : 'N/A' ?></td>
                            <td><?= $value->details ? $value->details->no_of_parkings : 'N/A' ?></td>
                            <td><?= $value->details && $value->details->available_wifi ? 'Available' : 'Not Available' ?></td>
                            <td><?= $value['location']; ?></td>
                            <td><a href="/admin/propertyEdit/<?= $value['id']; ?>" class="btn btn-submit">Edit</a></td>
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