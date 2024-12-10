<!DOCTYPE html>
<html lang="en">

@include('backend.includes.head')

<body>

@include('backend.includes.header')

        <div class="dashboard-right">
            <div class="dashboard-title">
                <h2>Add Properties</h2>
            </div>
            <div class="ads-form">
            
                    <?php if(isset($error_msg)) { ?>

                    <p style="color:red"><?php echo $error_msg; ?></p>

                    <?php } ?>
                    <?php if(isset($success_msg)) { ?>

                    <p style="color:green"><?php echo $success_msg; ?></p>

                    <?php } ?>

                    <form action="/backend/propertyAdd" method="post" enctype="multipart/form-data">

                        <?php if(count($errors) > 0) { ?>
                            <?php foreach($errors->all() as $key => $val){ ?>
                                <div class="input-box">
                                    <p style="color:red"><?php echo $val; ?></p>
                                </div>
                            <?php } ?>
                        <?php } ?>
                        
                        <div class="input-grid">
                            <div class="form-input">
                                <label for="property_name">Property Name</label>
                                <input type="text" id="property_name" name="property_name" placeholder="Enter Property Name" required>
                            </div>
                            <div class="form-input">
                                <label for="area">Property Area (Sq Ft)</label>
                                <input type="text" id="area" name="area" placeholder="Enter SQ.FT" required>
                            </div>
                        </div>
                        
                        <div class="input-grid">
                            <div class="form-input">
                                <label for="image">Property Image</label>
                                <input type="file" id="image" name="image" placeholder="Enter Image" required>
                            </div>
                            <div class="form-input">
                                <label for="no_of_bathrooms">No Of Bathrooms</label>
                                <input type="number" id="no_of_bathrooms" name="no_of_bathrooms" placeholder="Enter No of Bathrooms" required>
                            </div>
                        </div>    
                        
                        <div class="input-grid">
                            <div class="form-input">
                                <label for="no_of_bedrooms">No Of Bedrooms</label>
                                <input type="number" id="no_of_bedrooms" name="no_of_bedrooms" placeholder="Enter No of Bedrooms" required>
                            </div>
                            <div class="form-input">
                                <label for="no_of_garages">No Of Garage</label>
                                <input type="number" id="no_of_garages" name="no_of_garages" placeholder="Enter No of Garage" required>
                            </div>
                        </div>
                        
                        <div class="input-grid">
                            <div class="form-input">
                                <label for="no_of_parkings">No Of Parkings</label>
                                <input type="number" id="no_of_parkings" name="no_of_parkings" placeholder="Enter No of Parkings" required>
                            </div>
                            <div class="form-input">
                                <label for="location">Property Location</label>
                                <input type="text" id="location" name="location" placeholder="Property Location" required>
                            </div>
                        </div>
                        
                        <div class="input-grid">
                            <div class="form-input">
                                <label for="property_rent">Property Rent</label>
                                <input type="number" id="property_rent" name="property_rent" placeholder="Enter Rent" required>
                            </div>
                            <div class="form-input">
                                <label for="wifi_service">Wi-Fi Service</label>
                                <select id="wifi_service" name="wifi_service" required>
                                    <option value="" disabled selected>Select Wi-Fi Availability</option>
                                    <option value="1">Available</option>
                                    <option value="0">Not Available</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-input">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" placeholder="Enter Property Description"></textarea>
                        </div>
                        
                        <div class="submit">
                            <button class="btn-submit">Submit</button>
                        </div>
                        
                        @csrf
                    </form>
                    
            </div>
        </div>
    </div>

</body>

</html>