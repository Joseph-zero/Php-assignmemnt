<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- external css -->
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="responsive.css">
        <!-- Bootstrap cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    </head>
    <body>
        <?php require ("nav.php") ?> 

        <div style="background-color:black;color: white;">
            <br>
            <div style="margin: 100px">
                <?php
                if (isset($_POST['book'])) {
                     if($_POST['event'] == "CS"){
                        $event = "CS";
                    }elseif($_POST['event'] == "DT"){
                        $event = "DT";
                    }elseif($_POST['event'] == "DW"){
                        $event = "DW";
                    }elseif($_POST['event'] == "ETR"){
                        $event = "ETR";
                    }elseif($_POST['event'] == "SDC"){
                        $event = "SDC";
                    }
                    $name = $_POST['name'];
                    $numberOfMember = $_POST['numberOfMember'];
                    $remark = $_POST['remark'];
                    $error = array();
                }

                if (strlen($name) > 30) {
                    $error['name'] = "The name connot more than 30 character";
                } else if (!preg_match("/^[A-Za-z || @ ||,||'||.||-||]*$/", $name)) {
                    $error['name'] = "Name can contain only uppercase and lowercase alphabet, space, "
                            . "alias [@], comma [,], single-quote [‘], dot [.], dash [-] and slas.";
                }

                if (is_numeric($numberOfMember) != 1) {
                    $error['numberOfMember'] = "The number of join event only can be digit";
                }

                if (!empty($error)) {
                    echo "<br>";
                    echo "<div>";
                    echo "<h1>Sorry...There are some input error</h1>";
                    echo "<ul>";
                    foreach ($error as $e) {
                        echo "<li>$e</li>";
                    }
                    echo "</ul>";
                    echo "<a href='booking.php' style='color:red'>Back</a>";
                    echo "</div>";
                } else {
                    echo "<br>";
                    echo "<h1>Booking Status</h1>";

                    // Create connection
                    $conn = mysqli_connect("localhost", "root", "", "dance society");
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    
                    $id = mt_rand(900000,999999);
                    
                    $sql = "INSERT INTO booking (BookID, Name, Event, NumberOfJoin) VALUES ($id, '$name', '$event', $numberOfMember)";

                    if (mysqli_query($conn, $sql)) {
                        echo "THANKS! YOU ARE SUCESSFUL TO BOOK AN EVENT.";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                    echo "<br>";
                    echo "View Booking :<a href='book_list.php'>Click here!</a>";
                }
                ?>    
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
