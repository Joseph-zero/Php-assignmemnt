<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="contactUs.css">
    <link rel="stylesheet" href="style1.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">   
</head>

<header>
    <?php require ("nav.php") ?>
</header>

<body>
    <div class="contact">
        <h1 class="title">Contact Us</h1>

        <h2 class="headline">Society Info</h2>
        <div class="card w-50">
            <div class="address">
                <div class="addressName">Official / Street Address</div>
                <div class="row">
                    <div class="col-md-auto">
                        <span>Kampus Utama</span><br>
                        <span>Jalan Genting Kelang</span><br>
                        <span>53300 Kuala Lumpur</span>
                    </div>
                    <div class="col-sm-4">
                        <a href="https://www.google.com.my/maps/place/Tunku+Abdul+Rahman+University+College+(TAR+UC)/@3.2155627,101.7259186,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc3843bfb6a031:0x2dc5e067aae3ab84!8m2!3d3.2155573!4d101.7281073">
                        <img class="location" src="./img/google_maps.png" alt="Location" width="50" height="48">
                        </a>
                    </div>
                </div>   
            </div>
            <div class="address">
                <div class="addressName">Phone Number</div>
                <span><b>Tel:</b> 410-566-3087 <span>
            </div>
        </div>
        
        <h2 class="headline">Society Contacts</h2>
        <div class="card w-50">
            <div class="address">
                <div class="addressName">Advisor</div>
                    <div class="row">
                        <div class="col-sm-3">
                            <span>Mr. Malik</span>
                        </div>
                        <div class="col-md-auto">
                            <span><b>Tel:</b> 012-4567899<br><b>Email:</b> abc@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="address">
                    <div class="addressName">President</div>
                    <div class="row">
                        <div class="col-sm-3">
                            <span>Nathan Chong</span>
                        </div>
                        <div class="col-md-auto">
                            <span><b>Tel:</b> 012-4567899<br><b>Email:</b> abc@gmail.com</span>
                        </div>
                    </div>
                    
                </div>
                <div class="address">
                    <div class="addressName">Vice President</div>
                    <div class="row">
                        <div class="col-sm-3">
                            <span>Lim Jin Won</span>
                        </div>
                        <div class="col-md-auto">
                            <span><b>Tel:</b> 012-4567899<br><b>Email:</b> abc@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="address">
                    <div class="addressName">Secretary</div>                   
                    <div class="row">
                        <div class="col-sm-3">
                            <span>How Chong Keat</span>
                        </div>
                        <div class="col-md-auto">
                            <span><b>Tel:</b> 012-4567899<br><b>Email:</b> abc@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="address">
                    <div class="addressName">Treasurer</div>
                    <div class="row">
                        <div class="col-sm-3">
                            <span>Jane Lee Hung Ching</span>
                        </div>
                        <div class="col-md-auto">
                            <span><b>Tel:</b> 012-4567899<br><b>Email:</b> abc@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!--
        <div class="info">
            <div class="address">
                <div class="addressName">
                    <span>Official / Street Address
                    <a href="https://www.google.com.my/maps/place/Tunku+Abdul+Rahman+University+College+(TAR+UC)/@3.2155627,101.7259186,17z/data=!3m1!4b1!4m5!3m4!1s0x31cc3843bfb6a031:0x2dc5e067aae3ab84!8m2!3d3.2155573!4d101.7281073">
                        <img class="location" src="google_maps.png" alt="Location" width="50" height="48">
                    </a>
                    </span>
                </div>
                <span>Kampus Utama</span><br>
                <span>Jalan Genting Kelang</span><br>
                <span>53300 Kuala Lumpur</span>
                
            </div>
            <div class="address">
                <div class="addressName">Phone Number</div>
                <span>Tel: 410-566-3087 <span>
            </div>
        </div>

        <h2 class="headline">Society Contacts</h2>
        <div class="info">
        <div class="address">
                <div class="addressName">Advisor</div>
                    <div class="row">
                        <div class="col-sm-3">
                            Mr. Malik
                        </div>
                        <div class="col-md-auto">
                            Tel: 012-4567899<br>Email: abc@gmail.com
                        </div>
                    </div>
                </div>
                <div class="address">
                    <div class="addressName">President</div>
                    <div class="row">
                        <div class="col-sm-3">
                            Nathan Chong
                        </div>
                        <div class="col-md-auto">
                            Tel: 012-4567899<br>Email: abc@gmail.com
                        </div>
                    </div>
                    
                </div>
                <div class="address">
                    <div class="addressName">Club Member</div>                  
                    <div class="row">
                        <div class="col-sm-3">
                            Lee Ping
                        </div>
                        <div class="col-md-auto">
                            Tel: 012-4567899<br>Email: abc@gmail.com
                        </div>
                    </div>
                </div>
                <div class="address">
                    <div class="addressName">Vice President</div>
                    <div class="row">
                        <div class="col-sm-3">
                            Lim Jin Won
                        </div>
                        <div class="col-md-auto">
                            Tel: 012-4567899<br>Email: abc@gmail.com
                        </div>
                    </div>
                </div>
                <div class="address">
                    <div class="addressName">Secretary</div>                   
                    <div class="row">
                        <div class="col-sm-3">
                            How Chong Keat
                        </div>
                        <div class="col-md-auto">
                            Tel: 012-4567899<br>Email: abc@gmail.com
                        </div>
                    </div>
                </div>
                <div class="address">
                    <div class="addressName">Treasurer</div>
                    <div class="row">
                        <div class="col-sm-3">
                            Jane Lee Hung Ching
                        </div>
                        <div class="col-md-auto">
                            Tel: 012-4567899<br>Email: abc@gmail.com
                        </div>
                    </div>
                </div>
        </div>
    </div>
-->
    <?php require("Footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- footer design's javascirpt-->
    <script src="https://kit.fontawesome.com/c6d5d86863.js" crossorigin="anonymous"></script>
    
</body>
</html>
