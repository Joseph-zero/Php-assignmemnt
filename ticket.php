<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    </head>
    <style>
        .ticket{
            margin: 100px;
            font-size: 20px;
        }
        #title{
            padding: 20px;
            text-align: center;
        }
    </style>
    <body>
        <div style="background-image: url('hardwood_floor.jpg');">
            <div>
                <button style="float: right;margin-top:5px;margin-right:5px" type="button" class="btn btn-primary btn-sm">Login</button>
            </div>
            <div>

                <h1>Taruc Dancing Society</h1>
            </div>
        </div>

        <!--        <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                <a class="nav-link" href="#">Features</a>
                                <a class="nav-link" href="#">Pricing</a>
                                <a class="nav-link disabled">Disabled</a>
                            </div>
                        </div>
                    </div>
                </nav>-->

        <?php require ("nav.php") ?> 


        <div style="background-color: black;color: white; background-attachment: fixed">
            <br>            
            <br>

            <div style="color:black;background-image:url('6.jpg');height: 100px;background-attachment: fixed">
                <h1 id="title">BUY TICKET</h1>
            </div>    

            <br>
            <br>

            <div class="ticket">
                <h4 style="text-decoration:underline">Please fill in the form</h4>
                <br>
                <form method="POST" action="validationBook.php">
                    <table style="color: white">
                        <tr>
                            <td>Name :</td>
                            <td colspan="3"><input type="text" name="name" placeholder="Name" maxlenght="30" required></td>
                        </tr>                        
                        <tr>
                            <td>Phone :</td>
                            <td colspan="3"><input type="text" name="phone" placeholder="01x-xxxxxxx" required></td>
                        </tr>
                        <tr>
                            <td>Event :</td>
                            <td><input type="radio" name="event" value="xx">xxxxx</td>
                            <td><input type="radio" name="event" value="xx">xxxxx</td>
                        </tr>                        
                        <tr>
                            <td>Email :</td>
                            <td colspan="2"><input type="text" name="emial" placeholder="xxx@gmail.com"></td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name="buy" value="buy">
                                <input type="reset" name="Reset" value="reset">
                            </td>
                        </tr>
                    </table> 
                    <input type="hidden" name="event" value="CS">
                </form>
            </div>
            <br>
            <br>

        </div>



        <?php require("Footer.php") ?>

        <!-- carousel's javascirpt-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- footer design's javascirpt-->
        <script src="https://kit.fontawesome.com/c6d5d86863.js" crossorigin="anonymous"></script>
    </body>
</html>