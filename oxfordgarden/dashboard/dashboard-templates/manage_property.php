<?php 
    include 'includes/header.php';
?>
<style>
    .property-card{
        background:#eeeeee;
    }

    .property-card p{
        font-size: 13px;
    }
</style>
<div class="container-fluid">
    <h1 class="mt-4">Manage Property</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../dashboard/">Dashboard</a></li>
        <li class="breadcrumb-item active">Manage Property</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <p>Manage Property</p>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="">
                        <?php
                            if($user_type == '001'){
                                $response = get_all_properties();
                            }else{
                                $response = get_properties_by_user($user_id);
                            }
                            if($response){
                            while ($db=mysqli_fetch_row($response)){
                                $property_id = $db[1];
                                $property_title =  $db[2];
                                $property_price = $db[8];
                                $property_address = $db[4];
                                $posted_date = $db[15];
                                $description = $db[3];

                                $property_image = get_property_images($property_id);
                                while ($image=mysqli_fetch_row($property_image)){
                                    $image_url = $image[2];
                                }
                        ?>
                            <div class="row mb-3 property-card">
                                <div class="col-md-2 w-100">
                                    <img src="uploads/<?php echo $image_url;?>" alt="" style="width:100% !important; height:100%;">
                                </div>
                                <div class="col-md-10 px-2 pt-2">
                                    <p class="txt-sm"><u>Property Ref: <?php echo $property_id;?></u> 
                                        <?php
                                            $is_promoted = is_promoted($property_id);
                                            if($user_type == '001' && $is_promoted == 0){
                                        ?>
                                            <span>
                                                <a href="../dashboard/?show=promote&id=<?php echo $property_id;?>" class="btn btn-primary btn-xs ml-2 txt-sm py-1">Promote</a>
                                            </span> 
                                        <?php
                                            }else{
                                                if($is_promoted == 1){
                                        ?>
                                            <span>
                                                <label class="btn btn-success btn-xs ml-2 txt-sm py-1">Promotion Active</label>
                                            </span>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </p>
                                    <h5><?php echo $property_title;?> @#<?php echo $property_price;?></h4>
                                    <p><?php echo $property_address;?>   Posted: <?php echo $posted_date;?></p>
                                    <p class="pr-5">
                                        <?php echo $description;?>
                                    </p>
                                </div>
                            </div>
                        <?php
                            }
                        }else{
                            echo '<p class="p-2">You have no properties to display</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <a href="../dashboard/?show=sell_property" class="btn btn-primary btn-sm">Add Property</a>
        </div>           
    </div>
</div>
<?php include 'includes/footer.php';?>