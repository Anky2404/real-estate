<!DOCTYPE html>
<html lang="en">

@include('backend.includes.head')

<body>

@include('backend.includes.header')

        <div class="dashboard-right">
            <div class="dashboard-title">
                <h2>Edit Properties</h2>
            </div>
            <div class="ads-form">
            
                    <?php if(isset($error_msg)) { ?>

                    <p style="color:red"><?php echo $error_msg; ?></p>

                    <?php } ?>
                    <?php if(isset($success_msg)) { ?>

                    <p style="color:green"><?php echo $success_msg; ?></p>

                    <?php } ?>

                    <form action="/backend/propertyEdit" method="post" enctype="multipart/form-data">
                        <?php if(count($errors) > 0) { ?>
                            <?php foreach($errors->all() as $key => $val) { ?>
                                <div class="input-box">
                                    <p style="color:red"><?php echo $val; ?></p>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    
                        <input type="hidden" name="id" value="<?= $property_data->id ?>">
                    
                        <div class="input-grid">
                            <div class="form-input">
                                <label for="property_name">Property Name</label>
                                <input type="text" name="property_name" placeholder="Enter Property Name" value="<?= $property_data->property_name ?>" required>
                            </div>
                    
                            <div class="form-input">
                                <label for="area">Property Area (Sq Ft)</label>
                                <input type="text" name="area" placeholder="Enter Sq Ft" value="<?= $property_data->details->area ?>" required>
                            </div>
                        </div>
                    
                        <div class="input-grid">
                            <div class="form-input">
                                <label for="no_of_bedrooms">No Of Bedrooms</label>
                                <input type="number" name="no_of_bedrooms" placeholder="Enter No of Bedrooms" value="<?= $property_data->details->no_of_bedrooms ?>" required>
                            </div>
                    
                            <div class="form-input">
                                <label for="no_of_garages">No Of Garage</label>
                                <input type="number" name="no_of_garages" placeholder="Enter No of Garages" value="<?= $property_data->details->no_of_garages ?>" required>
                            </div>
                        </div>
                    
                        <div class="input-grid">
                            <div class="form-input">
                                <label for="no_of_parkings">No Of Parkings</label>
                                <input type="number" name="no_of_parkings" placeholder="Enter No of Parkings" value="<?= $property_data->details->no_of_parkings ?>" required>
                            </div>
                    
                            <div class="form-input">
                                <label for="no_of_bathrooms">No Of Bathrooms</label>
                                <input type="number" name="no_of_bathrooms" placeholder="Enter No of Bathrooms" value="<?= $property_data->details->no_of_bathrooms ?>" required>
                            </div>
                        </div>
                    
                        <div class="input-grid">
                            <div class="form-input">
                                <label for="rent">Property Rent</label>
                                <input type="number" name="rent" placeholder="Enter Rent" value="<?= $property_data->rent ?>" required>
                            </div>
                    
                            <div class="form-input">
                                <label for="location">Property Location</label>
                                <input type="text" name="location" placeholder="Enter Property Location" value="<?= $property_data->location ?>" required>
                            </div>
                        </div>
                    
                        <div class="form-input">
                            <label for="wifi_service">Wi-Fi Service</label>
                            <select id="wifi_service" name="wifi_service" required>
                                <option value="" disabled>Select Wi-Fi Availability</option>
                                <option value="1" <?= $property_data->details->available_wifi == 1 ? 'selected' : '' ?>>Available</option>
                                <option value="0" <?= $property_data->details->available_wifi == 0 ? 'selected' : '' ?>>Not Available</option>
                            </select>
                        </div>
                        <div class="input-grid">
                        <div class="form-input">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" placeholder="Enter Property Description"><?= $property_data->description ?></textarea>
                        </div>
                    
                        <div class="form-input">
                            <label for="image">Property Image</label>
                            <img src="/<?= $property_data->image ?>" height="250px" alt="Property Image"/>
                            <input type="file" name="image" placeholder="Change Property Image">
                        </div>
                        </div>
                        <div class="submit">
                            <button class="btn-submit" type="submit">Submit</button>
                        </div>
                    
                        @csrf
                    </form>
                    
            </div>
        </div>
    </div>

</body>

</html>