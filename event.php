<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <style>
        @media only screen and (max-width: 600px) {

            footer{
                display: none;
            }
        }
    </style>
    <body>

        <?php require ("nav.php") ?> 

        <form method="POST" action="memberEvent.php">
            <div class='w3-black'>
                <div class='w3-container w3-content w3-padding-64' style=max-width:800px>
                    <h2 class='w3-wide w3-center'>Events</h2>
                    <p class='w3-opacity w3-center'><i>Click and find out more!</i></p><br>

                    <div class="w3-row-padding w3-padding-32" style="margin:0 -16px">
                        <div class="w3-third w3-margin-bottom">
                            <img src="./img/k-pop2.png" alt="dances" style="width:100%" class="w3-hover-opacity">
                            <div class="w3-container w3-white">
                                <p><b>Dances</b></p>
                                <button class="w3-button w3-black w3-margin-bottom" name="view" value="dances">View</button>
                            </div>
                        </div>

                        <div class="w3-third w3-margin-bottom">
                            <img src="./img/cheer5.png" alt="Cheerleading" style="width:100%" class="w3-hover-opacity">
                            <div class="w3-container w3-white">
                                <p><b>Cheerleading</b></p>
                                <button class="w3-button w3-black w3-margin-bottom" name="view" value="cheerleading">View</button>
                            </div>
                        </div>

                        <div class="w3-third w3-margin-bottom">
                            <img src="./img/cultureD.png" alt="Traditional Dance" style="width:100%" class="w3-hover-opacity">
                            <div class="w3-container w3-white">
                                <p><b>Traditional Dance</b></p>
                                <button class="w3-button w3-black w3-margin-bottom" name="view" value="traditional">View</button>
                            </div>
                        </div>

                        <div class="w3-third w3-margin-bottom">
                            <img src="./img/latin1.png" alt="Latin" style="width:100%" class="w3-hover-opacity">
                            <div class="w3-container w3-white">
                                <p><b>Latin</b></p>
                                <button class="w3-button w3-black w3-margin-bottom" name="view" value="latin">View</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <?php require("Footer.php") ?>

        <!-- carousel's javascirpt-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- footer design's javascirpt-->
        <script src="https://kit.fontawesome.com/c6d5d86863.js" crossorigin="anonymous"></script>
    </body>
</html>
