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
         <?php
        $dbc = new mysqli("localhost", "root", "", "events");
        $query = "SELECT * FROM events";
        ?>
        
        <div class='w3-black'>
            <div class='w3-container w3-content w3-padding-64' style=max-width:800px>
                <h1 class='w3-wide w3-center'>Edit Event</h1>
                <div class="w3-row-padding">
                    <hr>
                    <fieldset>
                        <h2 style="font-family: times new romens">Event Details</h2>
                        <div class="w3-half">
                            <form class="w3-container w3-card-4" method="POST" action="AdminEvent.php">
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
                                    <input class="w3-input" type="text" name="venue" >
                                </div>
                                <br>
                                <input type="submit" class="btn btn-primary" name="confirmEdit" value="Edit" onclick="editComplete()">
                            </form>
                                </div>
                                </fieldset>
                    <script>
                        function editComplete(){
                            confirm("Edit Event Details successfully!");
                        }
                    </script>
                        </div>
                </div>
            </div>
        
            <?php
            ?>
        
    </body>
</html>
