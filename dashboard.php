<?php include 'connect.php';?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dark Panel</title>
    <!-- CSS -->
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="font.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></head>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<main>
<div class="sidebar">
    <a href="dashboard.php" class="link-dark text-decoration-none " title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Icon-only">
        <i class="fa-solid fa-circle"></i>
    </a>
    <a href="dashboard.php" class="active" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">          
        <i class="fa-solid fa-home"></i>
    </a>
    <a href="" class="active" aria-current="page" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">          
        <i class="fa-solid fa-gears"></i>
    </a>
</div>
<div class="content">
    <div class="upperContainer">
        <div class="firstContainer">
            <a href="" class="settings"><i class="fas fa-bars"></i></a>
            <form>
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search for anything">
            </form>
        </div>
        <div class="secondContainer">
            <div class="iconsContainer">
                <a href=""><i class="fa-regular fa-message"></i></a>
                <a href=""><i class="fa-regular fa-bell"></i></a>
            </div>            
            <div class="profile">
                <img src="img/avatar.png" alt="profile img" class="profileImg">
            </div>
        </div>  
    </div>    
    <div class="middleUpperContainer">
        <div class="container">
            <div class="firstContainer">
                <h1>Learn New Skills</h1>
                <p>One Simple Price. Unlimited Skills.</p>
            </div>
            <div class="secondContainer">
                <button>+ Explore More</button>
            </div>
        </div>            
    </div>
    <div class="middleBottomContainer row d-flex justify-content-lg-between justify-content-md-around gap-lg-4 gap-md-4 gap-sm-4 gap-4">
        <div class="container col-lg-2 col-md-5 col-sm-12 col-12">
            <div class="firstContainer">
                <img src="img/avatar.png" alt="profile img" class="profileImg">
                <h5>PHP Developer <br><span>124 Videos</span></h5>
            </div>
            <a href ="" class="secondContainer">
                <h6>Learn More</h6>                    
                <i class="fa-regular fa-circle-question"></i>
            </a>
        </div>  
        <div class="container col-lg-2 col-md-5 col-sm-12 col-12">
            <div class="firstContainer">
                <img src="img/avatar.png" alt="profile img" class="profileImg">
                <h5>Python Programming <br><span>234 Videos</span></h5>
            </div>
            <a href ="" class="secondContainer">
                <h6>Learn More</h6>                    
                <i class="fa-regular fa-circle-question"></i>
            </a>
        </div>   
        <div class="container col-lg-2 col-md-5 col-sm-12 col-12">
            <div class="firstContainer">
                <img src="img/avatar.png" alt="profile img" class="profileImg">
                <h5>Figma Design <br><span>87 Videos</span></h5>
            </div>
            <a href =""  class="secondContainer">
                <h6>Learn More</h6>                    
                <i class="fa-regular fa-circle-question"></i>
            </a>
        </div>   
        <div class="container col-lg-2 col-md-5 col-sm-12 col-12">
            <div class="firstContainer">
                <img src="img/avatar.png" alt="profile img" class="profileImg">
                <h5>UI with Sketch <br><span>29 Videos</span></h5>
            </div>
            <a href =""  class="secondContainer">
                <h6>Learn More</h6>                    
                <i class="fa-regular fa-circle-question"></i>
            </a>
        </div>   
        <div class="container col-lg-2 col-md-5 col-sm-12 col-12">
            <div class="firstContainer">
                <img src="img/avatar.png" alt="profile img" class="profileImg">
                <h5>Gruntt <br><span>18 Videos</span></h5>
            </div>
            <a href =""  class="secondContainer">
                <h6>Learn More</h6>                    
                <i class="fa-regular fa-circle-question"></i>
            </a>
        </div>   
    </div>
    
    <div class="bottomContainer row justify-content-between d-lg-flex d-md-inline d-sm-inline d-inline gap-lg-4">
        <div class="learningCotaniner col-12 col-lg-7 col-md-12 col-sm-12">
            <div class="container">
                <h4>Learning Curve</h4>
                <div>
                    <form action="">
                        <label for="compare">Compare with</label>
                        <select name="period" id="compare">
                            <option value="lastmonsth">Last Week</option>
                            <option value="lastmonsth">Last Month</option>
                            <option value="lastmonsth">Last 3 Months</option>
                            <option value="lastmonsth">Last 6 Months</option>
                            <option value="lastmonsth">Last Year</option>
                            <option value="lastmonsth">Last 5 Years</option>
                            <option value="lastmonsth">All time</option>
                        </select>
                    </form>
                    <div>
                        <h5>Change <br><br><span >+12%</span></h5>
                    </div>
                </div>                                        
            </div>             
            <canvas id="myChart" width="400" height="200"></canvas>             
        </div>   
        <div class="transferContainer col-12 col-lg-4 col-md-12 col-sm-12">
            <div class="container row justify-content-between gap-4">
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">1</div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">1</div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">1</div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">1</div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">1</div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">1</div>
            </div>
        </div> 
    </div>
</div>
</main>
<footer>
    <!-- <div class="copyright">© 2022 Copyright of Laurentiu Ioan Cozma</div> -->
</footer>
<!-- Ajax jQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- ChartJs -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>

<script src="functions.js"></script>

</body>
</html>