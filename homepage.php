<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        
    </head>
    
    <body>
        <?php require ("nav.php") ?> 
        
        <!-- Carousel -->
        <div class="carouselImage">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin:auto; width: 80%">
                <div class="carousel-inner" style="border-radius: 25px; margin-top: 20px;">
                    <div class="carousel-item active">
                        <img src="./img/pexels1.jpg" class="d-block w-100" alt="First slide" style="width:640px; height:640px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/pexel2.jpg" class="d-block w-100" alt="Second slide" style="width:640px; height:640px; object-fit: cover;">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/pexel3.jpg" class="d-block w-100" alt="Thrid slide" style="width:640px; height:640px; object-fit: cover;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        
        <div class="welcome message" style="background-color: #e6ccff; margin: 30px 0px; padding: 20px 30px; text-align: center;">
            <h2>Welcome to Tarc's Dancing Society</h2>
            <p>Hello, welcome to Tarc Dancing Society website. When dance, the purpose is not to get to a certain place on the floor. It's to enjoy each step along the way. The dance goes on forever. So shall I. So shall we.</p>
            <h5 style="text-align: left;">What you may find interesting:</h5>

            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <p class="card-text">Come and have a look at our fun events.</p>
                        <a href="event.php" class="btn btn-primary">Go to Events</a>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">About Us</h5>
                        <p class="card-text">Before going, look at our story and what do the society brings.</p>
                        <a href="about.php" class="btn btn-primary">Go to About Us</a>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>
        

        <?php require("Footer.php") ?>
        
        <!-- carousel's javascirpt-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- footer design's javascirpt-->
        <script src="https://kit.fontawesome.com/c6d5d86863.js" crossorigin="anonymous"></script>
    </body>
</html>
