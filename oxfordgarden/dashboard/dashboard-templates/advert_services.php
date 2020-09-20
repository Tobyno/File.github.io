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
    
    p{
        line-height:13px !important;
    }
</style>
<div class="container-fluid">
    <h1 class="mt-4">Sponsored Properties</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../dashboard/">Dashboard</a></li>
        <li class="breadcrumb-item active">Sponsored Properties</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <?php
                if(isset($_SESSION['msg'])){
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
            ?>
            <p>Active Promotions</p>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row w-100">
                        <?php
                            $active_promotions = get_active_promotions();
                            while ($promotions=mysqli_fetch_row($active_promotions)){
                                $p_property_id = $promotions[1];
                                $p_promotion_status = $promotions[4];
                                $p_promotion_end = $promotions[3];
                                $response = get_property_by_id($p_property_id);
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
                                        <div class="col-md-3">
                                            <div class="card">
                                                <img src="uploads/<?php echo $image_url;?>" alt="" style="width:100%; max-height:150px;">
                                                <div class="card-body">
                                                    <div class="txt-sm">Promotion Status: <label class="text-success"><?php echo $p_promotion_status;?></label></div>
                                                    <div class="txt-sm">Promotion Ends: <label class="text-success"><?php echo $p_promotion_end;?></label></div>
                                                    <div class="txt-sm"><u>Property Ref: <?php echo $property_id;?></u></div>
                                                    <h5 class="txt-md"><?php echo $property_title;?> @#<?php echo $property_price;?></h4>
                                                    <p class="txt-sm"><?php echo $property_address;?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <a href="../dashboard/?show=manage_property" class="btn btn-primary btn-sm">Add To Promotions</a>
        </div>           
    </div>
</div>
<?php include 'includes/footer.php';?>