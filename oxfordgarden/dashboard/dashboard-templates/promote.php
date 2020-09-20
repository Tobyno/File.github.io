<?php 
    include 'includes/header.php';
?>
<div class="container-fluid">
    <h1 class="mt-4">Promote Property</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../dashboard/">Dashboard</a></li>
        <li class="breadcrumb-item active">Promote Property</li>
    </ol>
    <div class="row">
        <div class="col-md-6 mx-auto">
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
                            <input class="form-control form-control-sm" name="property_id" id="inputEmailAddress" value="<?php echo $_GET['id'];?>" type="text" readonly required/>
                        </div>
                    
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Promotion Start Date</label>
                                    <input class="form-control" name="start_date" id="inputLastName" type="text" value="<?php echo date('Y/m/d')?>" required readonly/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Promotion End Date</label>
                                    <input class="form-control" name="end_date" id="inputLastName" type="date" placeholder="Please describe the property in detail"  required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mb-0">
                            <button type="submit" name="promote_property" class="btn btn-primary btn-sm">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 mx-auto">
            <div class="card mb-4">
                <div class="card-body">
                        <?php
                            $response = get_property_by_id($_GET['id']);
                            if($response){
                            while ($db=mysqli_fetch_row($response)){
                                $property_id = $db[1];
                                $property_title =  $db[2];
                                $property_price = $db[8];
                                $property_address = $db[4];
                                $posted_date = $db[15];
                                $description = $db[3];
                        ?>
                            <div class="row mb-3 property-card">
                                <div class="col-md-12 px-2 pt-2">
                                    <p class="txt-sm"><u>Property Ref: <?php echo $property_id;?></u></p>
                                    <h5><?php echo $property_title;?> @#<?php echo $property_price;?></h4>
                                    <p><?php echo $property_address;?>   Posted: <?php echo $posted_date;?></p>
                                    <p class="pr-5">
                                        <?php echo $description;?>
                                    </p>
                                </div>
                                <?php
                                    $property_image = get_property_images($property_id);
                                    while ($image=mysqli_fetch_row($property_image)){
                                        $image_url = $image[2];
                                ?>
                                    <div class="col-6 mb-3" style="width:100%;">
                                        <img src="uploads/<?php echo $image_url;?>" alt="" style="width:100% !important; height:100%;" class="rounded">
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        <?php
                            }
                        }
                        ?>
                </div>
            </div>
        </div>           
    </div>
</div>
<?php include 'includes/footer.php';?>