<?php include '../../app/config/config.php';?>
<?php include '../../app/config/connect.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dark Panel</title>
    
    <!-- CSS -->
    <link href="<?php echo WEB; ?>/assets/css/style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEB; ?>/assets/css/users.css" rel="stylesheet" type="text/css">
    <link href="<?php echo WEB; ?>/assets/css/font.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="<?php echo WEB; ?>/assets/css/bootstrap-v5.0.2.css" rel="stylesheet"></head>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<main>
<!-- Side-navbar -->
<div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="side_navbar">
  <ul class="nav d-flex flex-column">
    <a class="active-menu d-lg-flex d-none justify-content-lg-between align-items-center" id="menu-btn" onclick="toggle()">
        Menu <i class="fas fa-bars"></i>
    </a>
    <a class="d-flex justify-content-between align-items-center menu-buttons" href="">
        Home<i class="fa-solid fa-home"></i>
    </a>
    <a class="d-flex justify-content-between align-items-center menu-buttons" href="">          
        Settings<i class="fa-solid fa-gears"></i>
    </a>
    <a class="d-flex justify-content-between align-items-center menu-buttons" href="">          
        Signout<i class="fa-solid fa-gears"></i>
    </a>
  </ul>
</div>

<!-- Content -->
<div class="content active-cont">
    <div class="d-flex">
        <a class="mobile-active-menu d-flex d-lg-none mt-auto mb-auto" id="mobil-menu-btn" onclick="toggle()">
            <i class="fas fa-bars"></i>
        </a>
        <h1 class="mb-0">Data Table</h1>
    </div>    
    <div class="container d-flex justify-content-between">
        <div class="left-btns d-flex align-items-center">
            <select class="form-select" name="proportions" id="">
                <option value="all proportions" class="prop">All proportions</option>
                <option value="">new option</option>
                <option value="">new option</option>
                <option value="">new option</option>
            </select>
            <select class="form-select" name="time" id="">
                <option value="today">Today</option>
                <option value="week">This week</option>
                <option value="month">This month</option>
                <option value="year">This year</option>
            </select>   
        </div>
        <div class="right-btns d-flex align-items-center">
            <button class="greenBtn">+ ADD USER</button>
            <select class="form-select" aria-label="multiple select example">
                <option value="export">Export</option>
                <option value="">new option</option>
                <option value="">new option</option>
            </select>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th><input type="checkbox"></th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>
                <th scope="col">Price</th>
                <th scope="col">
                    <div class="edit-delete d-flex">
                        <i class="fas fa-pen fa-xs"></i>
                        <i class="fas fa-trash fa-xs"></i>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="checkbox"></td>
                <td>user1</td>
                <td>user1@gmail.com</td>
                <td>description</td>
                <td>mm/dd/yyyy</td>
                <td>status</td>
                <td>$$$</td>
                <td>
                    <div class="edit-delete d-flex">
                        <i class="fas fa-pen fa-xs"></i>
                        <i class="fas fa-trash fa-xs"></i>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>user2</td>
                <td>user2@gmail.com</td>
                <td>description</td>
                <td>mm/dd/yyyy</td>
                <td>status</td>
                <td>$$$</td>
                <td>
                    <div class="edit-delete d-flex">
                        <i class="fas fa-pen fa-xs"></i>
                        <i class="fas fa-trash fa-xs"></i>
                    </div>
                </td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>user3</td>
                <td>user3@gmail.com</td>
                <td>description</td>
                <td>mm/dd/yyyy</td>
                <td>status</td>
                <td>$$$</td>
                <td>
                    <div class="edit-delete d-flex">
                        <i class="fas fa-pen fa-xs"></i>
                        <i class="fas fa-trash fa-xs"></i>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>    
    
    <!-- Dont forget to create the filter, it shoulde be a button, which opens a window with a few options to check -->
</div>
</main>
<footer>
    <!-- <div class="copyright">© 2022 Copyright of Laurentiu Ioan Cozma</div> -->
</footer>
<!-- Ajax jQuery -->
<script src="<?php echo WEB; ?>/assets/js/jQuery-v3.6.0.js"></script>

<!-- Bootstrap JS -->
<script src="<?php echo WEB; ?>/assets/js/bootstrap-v5.0.2.js"></script>

<!-- ChartJs -->
<script src="<?php echo WEB; ?>/assets/js/chartJs-v3.9.1.js"></script>
<script src="<?php echo WEB; ?>/assets/js/functions.js"></script>

</body>
</html>