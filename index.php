<?php

$title = "welcome page";
require_once "./includes/header.php"
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="text-center text-dark">
                <h1 class="text-uppercase fw-bold">welcome to <span class="text-primary">auth</span> in php</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non sunt, neque natus itaque cum facere aliquid optio dolorum. Iste, libero.</p>
                <a href="./login.php" class="btn btn-primary text-uppercase">login here</a>
                <a href="./register.php" class="btn btn-outline-primary text-uppercase">register here</a>
            </div>
        </div>
    </div>
</div>

<?php require_once "./includes/footer.php" ?>