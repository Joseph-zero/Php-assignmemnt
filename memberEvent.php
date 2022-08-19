<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="responsive.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <style>
        table, td, th {
            border: 1px solid grey;
        }
   
        @media only screen and (max-width: 600px) {

            footer{
                display: none;
            }
        }
    </style>
    <?php require ("nav.php") ?> 

    <div>
        <a href="searchEvent.php" class="w3-bar-item w3-button w3-right"><i class="fa fa-search" style='color:white;'></i></a>
    </div>

    <?php
    $dbc = new mysqli("localhost", "root", "", "events");
    $query = "SELECT * FROM events";
    ?>

    <form method="POST" action="verification.php">
        <div class='w3-black'  class="m-4">

            <div class='w3-container w3-content w3-padding-64' style=max-width:900px>
                <h2 class='w3-wide w3-center'>Lists of Events and Activities</h2>
                <p class='w3-opacity w3-center'><i>Click and find out more!</i></p><br>

                <hr>
                <br>
                <div class="w3-responsive w3-card-4">
                    <table class="table table-primary">
                        <thead>
                            <tr style="width:100%" class="table-dark">
                                <th width="5%">ID</th>
                                <th width="20%">Events</th>
                                <th width="10%">Category</th>
                                <th width="25%">Description</th>
                                <th width="15%">  Date  </th>
                                <th width="15%">Venue</th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <?php
                        echo "<tbody>";
                        if ($result = $dbc->query($query)) {
                            while ($row = $result->fetch_object()) {
                                printf("<tr>"
                                        . "<td>%s</td>"
                                        . "<td>%s</td>"
                                        . "<td>%s</td>"
                                        . "<td>%s</td>"
                                        . "<td>%s</td>"
                                        . "<td>%s</td>"
                                        . "<td><input type='submit' class='btn btn-outline-dark' name='book' value='Book'></td>"//book maybe put as an array
                                        . "</tr>", $row->eventID, $row->eventName, $row->category, $row->description,
                                        $row->event_date, $row->venue);
                            }
                        }
                        ?>
                        </tbody>
                    </table>
                    <br><br>
                    <input type='submit' class="btn btn-primary" name='manage' value='Manage Events' style="float: right">
                    <br><br><p style="float: right">**For Admin Only**</p>
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
