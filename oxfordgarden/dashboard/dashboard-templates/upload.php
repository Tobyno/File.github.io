<?php 
    include 'includes/header.php';
?>
<div class="container-fluid">
    <h1 class="mt-4">Upload</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="../dashboard/">Dashboard</a></li>
        <li class="breadcrumb-item active">Upload</li>
    </ol>
    <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <div class="row">
        <div class="col-md-6">
            <p>Upload Photo</p>
            <div class="card mb-4">
                <div class="card-body">
                    <form action="includes/process.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="property_id" value="<?php echo $_GET['id'];?>" hidden>
                        <div class="custom-file">
                            <input type="file" name="photo" id="photo" class="custom-file-input">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                            <button type="submit" name="upload_file" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>            
        <div class="col-md-6">
            <p>Images For property ID: <b><?php echo $_GET['id'];?></b></p>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <?php
                            $response = get_property_images($_GET['id']);
                            if($response){
                               while ($db=mysqli_fetch_row($response)){
                                $image = $db[2];
                        ?>
                                <div class="col-md-6 mb-4">
                                    <img src="uploads/<?php echo $image;?>" alt="" style="width:100%; height:160px; border-radius:6px;">
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
</div>
<?php include 'includes/footer.php';?>