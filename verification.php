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
                <h2 class='w3-wide w3-center'>Log-in Section</h2>
                <p class='w3-opacity w3-center'><i>Please select and log-in for further details</i></p><br>

                <form method="POST" action="">
                    <div style="text-align: center;">
                        <input type="submit" class="w3-button w3-black w3-padding-large w3-large w3-margin-top" name="login" value="Admin"><br>
                        <input type="submit" class="w3-button w3-black w3-padding-large w3-large w3-margin-top" name="login" value="Member">
                    </div>
                </form>

                <?php
                if (isset($_POST['login'])) {
                    $login = $_POST['login'];

                    if ($login == "Admin" || $login == "Member") {
                        echo "<div class='w3-container w3-padding-64 w3-theme-l5' id='login'>";
                        echo "<div class='w3-row'>";
                        echo "<div class='w3-col m5'>";
                        echo "<div class='w3-padding-16' style='width:250px;'><span class='w3-xlarge w3-border-teal w3-bottombar'>Dancing Society $login Log-in</span></div>";
                        echo "</div>";
                        echo "<div class='w3-col m7'>";
                        echo "<form class='w3-container w3-card-4 w3-padding-16 w3-white' action='/action_page.php' target='_blank'>";
                        echo "<div class='w3-section'>";
                        echo "<label>Username : </label>";
                        echo "<input class='w3-input' type='text' name='username' required>";
                        echo "</div>";
                        echo "<div class='w3-section'>";
                        echo "<label>Password : </label>";
                        echo "<input class='w3-input' type='password' name='password' required>";
                        echo "</div>";
                        echo "<button type='submit' class='w3-button w3-right w3-theme'>Login</button>";
                        echo "</form>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    echo "<a href='memberEvent.php' style='float:right; color:white;'>Back to Previous Page</a>";
                }
                ?>
            </div>
        </div>
                </body>
                </html>
