<?php include '../../app/config/config.php';?>
<?php include '../../app/config/connect.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dark Panel</title>
    
    <!-- CSS -->
    <link href="<?php echo WEB_PATH; ?>/assets/css/signup-login.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEB_PATH; ?>/assets/css/font.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="<?php echo WEB_PATH; ?>/assets/css/bootstrap-v5.0.2.css" rel="stylesheet"></head>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<main>
<div class="wrap">
    <div class="container d-flex justify-content-center">
        <div class="wrap col-12">
        <h1 class="mb-4 text-center">Signup</h1>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>
            </div>
            <div class="mb-3">
                <label for="repeatPassword" class="form-label">Repeat Password</label>
                <input type="password" class="form-control" id="repeatPassword">
                <div id="passwordHelpBlock" class="form-text">
                    Passwords must be the same  
                </div>
            </div>
            <button type="submit" class="greenBtn">Signup</button>
            <br>
            <div class="otherPage">
                <a href="<?php echo WEB_PATH; ?>/app/pages/login.php">Already have an account? Go to login.</a>
            </div>
        </form>
        </div>        
    </div>
</div>
</main>
<footer>
    <!-- <div class="copyright">© 2022 Copyright of Laurentiu Ioan Cozma</div> -->
</footer>
<!-- Ajax jQuery -->
<script src="<?php echo WEB_PATH; ?>/assets/js/jQuery-v3.6.0.js"></script>

<!-- Bootstrap JS -->
<script src="<?php echo WEB_PATH; ?>/assets/js/bootstrap-v5.0.2.js"></script>

<!-- ChartJs -->
<script src="<?php echo WEB_PATH; ?>/assets/js/chartJs-v3.9.1.js"></script>
<!-- <script src="<?php echo WEB_PATH; ?>/assets/js/functions.js"></script> -->

</body>
</html>