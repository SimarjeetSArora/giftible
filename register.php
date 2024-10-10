<?php require_once('./config.php') ?>
 <?php require_once('inc/header.php') ?>
 <?php require_once('inc/topBarNav.php') ?>

 
 <div class="container my-5">
    <h2 class="text-center mb-4">Register</h2>
    <div class="row">
        <div class="col-6 col-md-4 mb-4">
        <a href="<?= base_url.'./user_register.php' ?>">
            <div class="register-tile-button btn-blue">
                <img src="uploads/login/user.png" class="img-fluid" alt="User">
                <div class="overlay">
                    <span>User</span>
                </div>
            </div>
        </a>
        </div>
        <div class="col-6 col-md-4 mb-4">
        <a href="<?= base_url.'./spable/register.php' ?>">
            <div class="register-tile-button btn-teal">
                <img src="uploads/login/spable.png" class="img-fluid" alt="Specially Abled">
                <div class="overlay">
                    <span>Specially Abled</span>
                </div>
            </div>
        </a>
        </div>
        <div class="col-6 col-md-4 mb-4">
        <a href="<?= base_url.'./vendor/register.php' ?>">
            <div class="register-tile-button btn-beige">
                <img src="uploads/login/ngo.png" class="img-fluid" alt="NGO">
                <div class="overlay">
                    <span>NGO</span>
                </div>
            </div>
        </a>
        </div>
    </div>
</div>
<!-- Bootstrap JS and dependencies -->

<div>
<?php require_once('inc/footer.php') ?>
</div>
</body>