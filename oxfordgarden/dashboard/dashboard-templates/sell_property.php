<?php 
    include 'includes/header.php';
?>
<div class="container-fluid">
    <h1 class="mt-4">Sell Property</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../dashboard/">Dashboard</a></li>
        <li class="breadcrumb-item active">Sell Property</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <p>Sell Property</p>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="includes/process.php" method="POST">
                        <?php
                            $last_property_id = get_properties_last_id();
                            $last_property_id++;
                            $property_id = date('Ymd').$last_property_id;
                        ?>
                        
                        <div class="form-group">
                            <label class="small mb-1" for="inputEmailAddress">Property ID</label>
                            <input class="form-control form-control-sm" name="property_id" id="inputEmailAddress" value="<?php echo $property_id;?>" type="text" readonly required/>
                        </div>
                    
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Property Title</label>
                                    <input class="form-control" name="property_title" id="inputLastName" type="text" placeholder="i.e. 5 bedroom flat, at goshen, premier layout"  required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Property Description</label>
                                    <input class="form-control" name="property_description" id="inputLastName" type="text" placeholder="Please describe the property in detail"  required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">What is the full address location of this property</label>
                                    <input class="form-control" name="property_address" id="inputLastName" type="text" placeholder="Enter Address"  required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">In what country is this proprty</label>
                                    <input class="form-control" name="property_country" id="inputLastName" type="text" placeholder="Enter Country"  required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">In what state is this property</label>
                                    <input class="form-control" name="property_state" id="inputLastName" type="text" placeholder="Enter State"  required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">In what city is this property</label>
                                    <input class="form-control" name="property_city" id="inputLastName" type="text" placeholder="Enter City"  required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">How much are you listing this property for</label>
                                    <input class="form-control" name="property_price" id="inputLastName" type="text" placeholder="Enter Price"  required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputState">Property Category</label>
                                    <select id="inputState" class="form-control text-sm" name="property_category" required>
                                        <option selected>Select Property Category...</option>
                                        <option value="House">House</option>
                                        <option value="Apartment">Apartment</option>
                                        <option value="Land">Land</option>
                                        <option value="Office">Office</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">What are listing the property for</label>
                                    <select id="inputState" class="form-control text-sm" name="transaction_type" required>
                                        <option value="Rent" selected>Rent</option>
                                        <option value="Sale">Sale</option>
                                        <option value="Lease">Lease</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Number of Beds</label>
                                    <select id="inputState" class="form-control text-sm" name="no_of_beds" required>
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6+">6+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Number of bathrooms</label>
                                    <select id="inputState" class="form-control text-sm" name="no_of_bathrooms" required>
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6+">6+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Number of parking spaces</label>
                                    <select id="inputState" class="form-control text-sm" name="no_of_parking_spaces" required>
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6+">6+</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="market_status" id="inputLastName" type="text" value="Available" hidden required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="user_id" id="inputLastName" type="text" value="<?php echo $user_id;?>" hidden/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                            <button type="submit" name="add_property" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>           
    </div>
</div>
<?php include 'includes/footer.php';?>