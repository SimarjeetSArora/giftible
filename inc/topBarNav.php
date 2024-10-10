<!-- Navbar -->
<style>
  #login-nav {
    z-index: 1038;
    padding: 0.3em 2.5em !important;
  }    
</style>
 
<div class="banner container-fluid p-0 sticky-top">   
  <div class="custom-bg"> 
  <div class="col-sm-4">   
    <a href="index.php"><img src="uploads/logo.png" width="200px" alt="Giftible"></a>
  </div>
        <div class="col-sm-8">         
            <!-- Left navbar links -->
            <ul class="nav nav-pills">
              <?php if($_settings->userdata('id') > 0 && $_settings->userdata('login_type') == 3): ?>
                <li class="nav-item p-2 w-24"></li>
              <li class="nav-item p-2 w-22">
                <a href="./" class="nav-link border border-warning text-warning px-4 <?= isset($page) && $page =='home' ? "text-light bg-warning active" : "" ?>">
                  <i class="fa-solid fa-house"></i>
                  Home
                </a>
              </li>
              <li class="nav-item p-2 w-22">
                <a href="./?page=products" class="nav-link border border-warning px-4 text-warning <?= isset($page) && $page =='products' ? "text-light bg-warning active" : "" ?>">
                <i class="fas fa-th-large"></i>
                Products</a>
              </li>
              <li class="nav-item p-2 w-22">
                <a href="./?page=about" class="nav-link border border-warning px-4 text-warning <?= isset($page) && $page =='about' ? "text-light bg-warning active" : "" ?>">
                <i class="fa-solid fa-building"></i>
                About Us</a>
              </li>
              
              <li class="nav-item p-2 w-22">
                <?php 
                $cart_count = $conn->query("SELECT sum(quantity) FROM `cart_list` where client_id = '{$_settings->userdata('id')}'")->fetch_array()[0];
                $cart_count = $cart_count > 0 ? $cart_count : 0;
                ?>
                <a href="./?page=orders/cart" class="nav-link border border-warning px-4 text-warning <?= isset($page) && $page =='orders/cart' ? "text-light bg-warning active" : "" ?>">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
                <span class="badge text-warning border border-warning"><?= format_num($cart_count) ?></span></a>
              </li>
              <li class="nav-item p-2 w-22">
                <a href="./?page=profile" class="nav-link border border-warning px-4 text-warning <?= isset($page) && $page =='profile' ? "text-light bg-warning active" : "" ?>">
                <i class="fa-solid fa-user"></i>
                Profile</a>
              </li>
              <li class="nav-item p-2 w-22">
                <a href="<?= base_url.'classes/Login.php?f=logout_client' ?>" class="nav-link border border-warning px-4 text-warning">
                <i class="fa-solid fa-right-from-bracket"></i>
                Logout</a>
              </li>
              <?php else: ?>
              <li class="nav-item p-2 w-25"></li>
              <li class="nav-item p-2 w-22">
                <a href="./" class="nav-link border border-warning text-warning px-4 <?= isset($page) && $page =='home' ? "text-light bg-warning active" : "" ?>">
                  <i class="fa-solid fa-house"></i>
                  Home
                </a>
              </li>
              <li class="nav-item p-2 w-22">
                <a href="./?page=products" class="nav-link border border-warning px-4 text-warning <?= isset($page) && $page =='products' ? "text-light bg-warning active" : "" ?>">
                <i class="fas fa-th-large"></i>
                Products</a>
              </li>
              <li class="nav-item p-2 w-22">
                <a href="./?page=about" class="nav-link border border-warning px-4 text-warning <?= isset($page) && $page =='about' ? "text-light bg-warning active" : "" ?>">
                <i class="fa-solid fa-building"></i>
                About Us</a>
              </li>
              <li class="nav-item p-2 w-22">
                <a href="./?page=login" class="nav-link border border-warning px-4 text-warning <?= isset($page) && $page =='login' ? "text-light bg-warning active" : "" ?>">
                <i class="fa-solid fa-right-to-bracket"></i>
                Login</a>
              </li>
              <li class="nav-item p-2 w-22">
                <a href="./?page=register" class="nav-link border border-warning px-4 text-warning <?= isset($page) && $page =='register' ? "text-light bg-warning active" : "" ?>">
                <i class="fa-solid fa-right-to-bracket"></i>
                Register</a>
              </li>
              <?php endif; ?>
            </ul>
          </div>
          </div>
        </div>
               
      
      <!-- /.navbar -->
      <script>
        $(function(){
          
        })
      </script>