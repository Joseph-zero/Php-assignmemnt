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
    <style>
        .flex-container {
            display: flex;
            flex-wrap: wrap;
        }
        .flex-container > div {
            width: auto;
            margin: auto;
            margin-bottom: 100px;
            margin-top: 40px;
        }
        #title{
            text-align: center;
        }
        .nabar {
            width: 100%;
            text-align: center;
            position: absolute;
            background-color: #333;
        }

        .dropdown .dropbtn {
            border:none;
            outline: none;
            color: white;
            padding: 5px 5px;
            background-color: inherit;
        }

        .nabar a:hover, .dropdown:hover .dropbtn {
            width: 100%;
            background-color: red;
        }

        .dropdown-content {
            display: none;
            min-width: 100px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: white;
            padding: 10px 5px;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .dropdown-content a:hover {
            font-size: 14px;
            background-color: #ddd;
            color:red;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    <body>
       <?php require ("nav.php") ?> 


        <div style="background-color: black;color: white; background-attachment: fixed">
            <br>            
            <br>

            <div style="color:black;background-image:url('./img/6.jpg');height: 100px;background-attachment: fixed">
                <h1 id="title">The Movement of Art</h1>
                <p id="title">enjoying the essence of dance as a kind of art</p>
            </div>     

            <br>
            <br>

            <div class="nabar">
                <div class="dropdown">
                    <button class="dropbtn">-CHOOSE AN EVENT-
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="#">Culture is Style</a>
                        <a href="bookEvent2.php">Dance Together</a>
                        <a href="bookEvent3.php">Dance Workout</a>                        
                        <a href="bookEvent4.php">Ethereal</a>
                        <a href="bookEvent5.php">Sport Day Cheering</a>
                    </div>
                </div> 
            </div>

            <br>
            <br>
            <br>
            <br>

            <div class="flex-container">
                <div style="background-color: darkred;width: 60%;padding: 30px 30px">
                    <table>
                        <tr>
                            <th style = 'text-align: center' colspan = '2'><h1>Dance Workout</h1></th>
                        </tr>
                        <tr>
                            <td colspan='2'><h5>To gain new knowledge and experience</h5></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>: Dances</td>
                        </tr>
                        <tr>
                            <td>Event Date</td>
                            <td>: 28 Aug 2022</td>
                        </tr>
                        <tr>
                            <td>Venue</td>
                            <td>: Sport Complex</td>
                        </tr>
                    </table>
                </div>

                <div>
                    <form method="POST" action="validationBook.php">
                        <table>
                            <tr>
                                <th colspan='2'>
                                    <h3>Book Event</h3>
                                </th>
                            </tr>
                            <tr>
                                <td>User Name :</td>
                                <td><input type="text" name="name" placeholder="Name" maxlenght="30" required></td>
                            </tr>                        
                            <tr>
                                <td colspan=2><input type="text" name="numberOfMember" placeholder="Number of member" required style="width: 300px;margin-top: 15px"></td>
                            </tr>
                            <tr>
                                <td colspan=2>
                                    <textarea name="remark" style="width: 300px" placeholder="User Remark.."></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="book" value="book now">
                                </td>
                                <td>
                                    <input type="reset" name="Reset" value="reset">
                                </td>
                            </tr>
                        </table> 
                        <input type="hidden" name="event" value="DW">
                    </form>
                </div>
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