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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>

        <div class='w3-black'>
            <div class='w3-container w3-content w3-padding-64' style=max-width:900px>
                <h1 class='w3-wide w3-center'>Add Event</h1>
                <div class="w3-row-padding">

                    <hr>
                    <form class="w3-container w3-card-4" method="POST" action="addEvent.php">
                        <table>
                            <fieldset>
                                <h2 style="font-family: times new romens">Event Details</h2>
                                <?php
                                if (isset($_POST['confirmAdd'])) {
                                    $id = $_POST['eventID'];
                                    $name = $_POST['eventName'];
                                    $desc = $_POST['description'];
                                    $date = $_POST['date'];
                                    $venue = $_POST['venue'];
                                    $errorInput = array();

                                    if ($id == "") {
                                        $errorInput['id'] = "<b>Event ID</b> are <b>required</b>.";
                                    } elseif (strlen($id) > 4) {
                                        $errorInput['id'] = "<b>Event ID</b> not more than <b>5</b> character.";
                                    }

                                    if ($name == "") {
                                        $errorInput['name'] = "<b>Event name</b> are <b>required</b>.";
                                    }

                                    if ($desc == "") {
                                        $errorInput['decs'] = "<b>Description</b> are <b>required</b>.";
                                    } elseif (strlen($desc) > 40) {
                                        $error['decs'] = "The <b>description not</b> more than <b>40</b> characters.";
                                    }

                                    if (empty($date)) {
                                        $errorInput['date'] = "<b>Date</b> are <b>required</b>.";
                                    }

                                    if ($venue == "") {
                                        $errorInput['venue'] = "<b>Venue</b> are <b>required</b>.";
                                    }

                                    if (!empty($errorInput)) {
                                        echo "<div style='background-color:#FBE3E4; color:#A92226; width:400px; border: 2px solid #FBC2C4; margin-left:10px'>";
                                        foreach ($errorInput as $error) {
                                            echo "<li>$error</li>";
                                        }
                                        echo "</ul>";
                                        echo "</div>";
                                    } 
                                    else{
                                        echo "<p style='background-color:lightblue; color:navy; width:300px; border: 2px solid navy;'>Event is added <b>successfully</b>!--</p>";
                                        echo "<a href='AdminEvent.php' style='float:left'>Click here to view record</a>";
                                        echo "<br>";
                                    }
                                }
                                ?>

                                <div class="w3-half">
                                    <div class="w3-section">  
                                        <label>Event ID</label>
                                        <input class="w3-input" type="text" name="eventID">
                                    </div>
                                    <div class="w3-section">  
                                        <label>Name of Event</label>
                                        <input class="w3-input" type="text" name="eventName">
                                    </div>
                                    <label for="category">Category</label>
                                    <div class="w3-section">      
                                        <select id="category" class="form-control" name="category">
                                            <option selected>--Select One--</option>
                                            <option>Dances</option>
                                            <option>Cheerleading</option>
                                            <option>Traditional Dance</option>
                                            <option>Latin</option>

                                        </select>
                                    </div>
                                    <div class="w3-section">      
                                        <label>Description</label>
                                        <input class="w3-input" type="textarea" name="description">
                                    </div>

                                    <div class="w3-section">      
                                        <label>Date</label>
                                        <input class="w3-input" type="date" name="date">
                                    </div>

                                    <div class="w3-section">  
                                        <label>Venue</label>
                                        <input class="w3-input" type="text" name="venue">
                                    </div>
                                    <br>
                                    <input type="submit" class="btn btn-primary" name="confirmAdd" value="Add">
                                    <input type="reset" class="btn btn-primary" name="reset" value="Reset" onclick="window.location.reload()">
                                </div>
                            </fieldset>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
