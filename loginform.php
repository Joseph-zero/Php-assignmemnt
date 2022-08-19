<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register_form.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="form-container">

        <form action="loginform.php" method="post">
            <h3 class="title">login now</h3>
            <?php

                if (isset($_POST['submit'])) {
                    if (isset($_POST['name'])) {
                        $name = $_POST['name'];
                    }
                    else {
                        $name = '';
                    }
                    $password = $_POST['password'];
                    $error = array();

                    if ($name == "") {
                        $error['name'] = "Name cannot be empty";
                    }
                    elseif (strlen($name) > 30) {
                        $error['name'] = "Name cannot more than 30 character";
                    } 
                    elseif (!preg_match("/^[A-Za-z @,'.-\/]{1,30}$/", $name)) { //{1,30) range
                        $error['name'] = "Name can contain only uppercase and lowercase alphabet, space, alias [@], comma [,], single-quote [‘], dot [.], dash [-] and slash [/].";
                    }

                    if ($password == "") {
                        $error['password '] = "Password cannot be empty";
                    }

                    if (!empty($error)) {
                        foreach($error as $e) {
                            echo '<span class="error-msg">'.$e.'</span>';
                        }
                        
                    }
                    
                }
            ?>

            <label>Username:</label>
            <input type="email" name="usermail" placeholder="Enter your email" class="box" >
            <label>Password:</label>
            <input type="password" name="password" placeholder="Enter your password" class="box" >
            <input type="submit" value="Login now" class="form-btn" name="submit">
            <p>Do not have an account? <a href="registerform.php">Register Here</a></p>
        </form>
    </div>

</body>
</html>