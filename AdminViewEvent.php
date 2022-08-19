<!DOCTYPE html>

<!--Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template-->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <style>
        table, td, th {
            border: 1px solid grey;
        }
    </style>
    <body>
        <?php
        $dbc = new mysqli("localhost", "root", "", "events");
        $query = "SELECT * FROM events";
        ?>

        <form method="POST" action="AdminEvent.php">
            <div class='w3-black' class="m-4">

                <div class='w3-container w3-content w3-padding-64'style=max-width:900px >
                    <h2 class='w3-wide w3-center'>Lists of Events and Activities</h2>
                    <p class='w3-opacity w3-center'><i>Click and manage your action.</i></p><br>

                    <hr>
                    <br>
                    <div class="w3-responsive w3-card-4">
                        <table class="table table-primary">
                            <thead>
                                <tr class="table-dark">
                                    <th>ID</th>
                                    <th>Events</th>
                                    <th>Category</th>
                                    <th>Description</th>
                                    <th>  Date  </th>
                                    <th>Venue</th>
                                </tr>
                            </thead>
                            <?php
                            if (isset($_POST['show'])) {
                                $eventId = $_POST['show'];
                            }

                            echo "<tbody>";
                            if ($result = $dbc->query($query)) {
                                while ($row = $result->fetch_object()) {
                                    if ($row->eventID == $eventId) {
                                        printf("<tr>"
                                                . "<td>%s</td>"
                                                . "<td>%s</td>"
                                                . "<td>%s</td>"
                                                . "<td>%s</td>"
                                                . "<td>%s</td>"
                                                . "<td>%s</td>"
                                                . "</tr>", $row->eventID, $row->eventName, $row->category, $row->description,
                                                $row->event_date, $row->venue);
                                    }
                                }
                            }
                            ?>

                        </table>
                        <br><br>
                        <a href="editEvent.php" class="btn btn-primary">Edit</a>
                        <input type="submit" class="btn btn-primary" name="delete" value="Delete" onclick="myFunction()">
                        <a href="AdminEvent.php" style="float:right; color:white;">Back to Previous</a>
                    </div>
                </div>
            </div>
        </form>
        <script>
            function myFunction() {
                confirm("Confirm to delete this Event?");
            }
        </script>
    </body>
</html>
