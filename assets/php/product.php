<!doctype html>
<!-- http://ec2-44-202-10-232.compute-1.amazonaws.com/assets/php/product.php -->

<?php
include 'header.php';
include_once '.env.php';
include_once 'functions/phpFunctions.php';

$action = $_GET['id'];
$con = connectDB(PRODUCT_DB);
$data = getProductData($action, $con);

$product_name = $data[0]["product_name"];
$product_desc = $data[0]["product_desc"];
$product_price = $data[0]["product_price"];

$product_image = $data[0]["product_image"];
$product_image2 = $data[0]["product_image2"];
$product_image3 = $data[0]["product_image3"];

$product_qty = $data[0]["product_qty"];
?>
<div class = "row mt-5 px-5 justify-content-center">
<div class = "col-3 justify-content-center">
    <p>
        <a href="products.php">
        <i class="fa fa-arrow-left" aria-hidden="true">
        </i>
        Go back</p>
    </a>
</div>
</div>
	    <div class="container" style="display: flex;">
            <div class = "col-2">
            </div>
            <div class = "col-3 my-5">
                <div class = "cardk">
                    <img src="<?php echo $product_image ?>" width="100%" class="productImage">
                <div class = "row">
                    <div class = "col-4">
                        <img src="<?php echo $product_image?>" width="100%" class="productImage">
                    </div>
                    <div class = "col-4">
                        <img src="<?php echo $product_image2?>" width="100%" class="productImage">
                    </div>
                    <div class = "col-4">
                        <img src="<?php echo $product_image3?>" width="100%" class="productImage">
                    </div>
                </div>
            </div>
            </div>
            <div class = "col-5 my-auto">
                <h3><?php echo $product_name?></h3>
    		    <p><?php echo $product_desc?></p>
                <div class = "row mt-1 mx-auto justify-content-center">
                    <h3>$<?php echo $product_price?></h3>
                </div>
                <div class = "row mt-1 mx-auto justify-content-center">
                    <p><?php echo $product_qty?> In Stock </p>
                </div>
                <div class = "row mt-1 mx-auto justify-content-center">
                    <a class="btn btn-warning" href="cart.php?prod=<?php echo $action?>">Add to Cart</a>
                </div>
                <div class = "row mt-3 mx-auto">
                </div>
            </div>
            <div class = "col-2">
            </div>
        </div>
<?php include 'footer.php'; ?>
