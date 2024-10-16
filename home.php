<?php if($_settings->userdata('id') < 1): ?>
<style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 80%;
        height: 100%;
    }
</style>
<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="uploads/carousel/1.png" alt="1" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="uploads/carousel/2.png" alt="2" width="1100" height="500">
        </div>
        <div class="carousel-item">
            <img src="uploads/carousel/3.png" alt="3" width="1100" height="500">
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<div class="card card-outline card-dark shadow rounder-lg" style="background-color:#f5f5f5;">

        <div class="col-lg-12 py-5">

            <div class="card-body rounded-0">
                    <div class="container-fluid">
                        <h2 class="text-center"><b>Welcome to Sable</b></h2>
                        <div class="card border border-warning rounder-lg" style="background-color:#ad7dbf;">
                  
<div class="row">                    

                    <div class="col-sm-6">   
                    <div class="welcome-content">
                        <?php include("welcome.html") ?>                       
                    </div>
</div>
</div>
<div class="col-sm-3">
<div class="card border border-warning rounder-lg" style="background-color:#ad7dbf;">


    <form>
        <script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_Oz3eG4bqCsQ9ln" async></script>
    </form>
</div>
    </div>
</div>

                </div>
            </div>
        </div>
        <?php endif; ?>

        <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 3): ?>              
        <div class="card card-outline card-dark shadow rounded-0">
            <div class="card-body rounded-0">
                <div class="container-fluid">
                    <h2 class="text-center"><b>Join our Community</b></h2>
                    <hr>
                    <div class="welcome-content">
                        <?php include("community.html") ?>                       
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
    
    
        <br>
        <div class="clear-fix mb-3"></div>
        <h3 class="text-center"><b>Products</b></h3>
        <center><hr class="w-25"></center>
        <div class="row" id="product_list">
            <?php 
            $products = $conn->query("SELECT p.*, v.shop_name as vendor, c.name as `category` FROM `product_list` p inner join vendor_list v on p.vendor_id = v.id inner join category_list c on p.category_id = c.id where p.delete_flag = 0 and p.`status` =1 order by RAND() limit 4");
            while($row = $products->fetch_assoc()):
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 product-item">
                <a href="./?page=products/view_product&id=<?= $row['id'] ?>" class="card shadow rounded-0 text-reset text-decoration-none">
                <div class="product-img-holder position-relative">
                    <img src="<?= validate_image($row['image_path']) ?>" alt="Product-image" class="img-top product-img bg-gradient-gray">
                </div>
                    <div class="card-body border-top border-gray">
                        <h5 class="card-title text-truncate w-100"><?= $row['name'] ?></h5>
                        <div class="d-flex w-100">
                            <div class="col-auto px-0"><small class="text-muted">Vendor: </small></div>
                            <div class="col-auto px-0 flex-shrink-1 flex-grow-1"><p class="text-truncate m-0"><small class="text-muted"><?= $row['vendor'] ?></small></p></div>
                        </div>
                        <div class="d-flex">
                            <div class="col-auto px-0"><small class="text-muted">Category: </small></div>
                            <div class="col-auto px-0 flex-shrink-1 flex-grow-1"><p class="text-truncate m-0"><small class="text-muted"><?= $row['category'] ?></small></p></div>
                        </div>
                        <div class="d-flex">
                            <div class="col-auto px-0"><small class="text-muted">Price: </small></div>
                            <div class="col-auto px-0 flex-shrink-1 flex-grow-1"><p class="m-0 pl-3"><small class="text-primary"><?= format_num($row['price']) ?></small></p></div>
                        </div>
                        <p class="card-text truncate-3 w-100"><?= strip_tags(html_entity_decode($row['description'])) ?></p>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="clear-fix mb-2"></div>
        <div class="text-center">
            <a href="./?page=products" class="btn btn-large btn-primary rounded-pill col-lg-3 col-md-5 col-sm-12">Explore More Products</a>
        </div>
    </div>
</div>