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
        <link rel="stylesheet" href="formResponsive.css">

    </head>
    <body>
        <?php require ("nav.php") ?> 

        <div class='w3-black'>
            <div class='w3-container w3-content w3-padding-64' style=max-width:900px>
                <h1 class='w3-wide w3-center'>Search Event</h1>
                <p class='w3-opacity w3-center'><i>Type and Search your events</i></p><br>
                <div class="w3-row-padding">

                    <hr>
                    <div class="w3-half" class="resp">
                        <form class="w3-container w3-card-4">
                            <div class="w3-section" style="margin-left:45%">  
                                <label>Name of Event</label><br>
                                <input type="text" name="searchEvent" size="50"> 
                                <br><br>
                                <input type="submit" class="btn btn-primary" name="searchEvent" value="Search">
                            </div>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        ?>
        <?php require("Footer.php") ?>

        <!-- carousel's javascirpt-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <!-- footer design's javascirpt-->
        <script src="https://kit.fontawesome.com/c6d5d86863.js" crossorigin="anonymous"></script>
    </body>
</html>
