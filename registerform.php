<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register_form.css">
</head>
<body>
    <div class="form-container">

    <form action="registerform.php" method="post">
    <h3 class="title">register</h3>
        <label>Username:</label>
        <input type="name" name="name" placeholder="Enter your name" class="box" required>
        
        <?php /*
            if (isset($_POST['submit'])) {
                if (isset($_POST['name'])) {
                    $name = $_POST['name'];
                }
                else {
                    $name = '';
                }
                $error = array();

                if ($name == "") {
                    $error['name'] = "Name cannot be empty";
                }
                elseif (strlen($name) > 30) {
                    $error['name'] = "Name cannot more than 30 character";
                } 
                elseif (!preg_match("/^[A-Za-z @,'.-\/]{1,30}$/", $name)) { 
                    $error['name'] = "Name can contain only uppercase and lowercase alphabet, space, alias [@], comma [,], single-quote [‘], dot [.], dash [-] and slash [/].";
                }

                if (!empty($error)) {
                    echo "<ul>";
                    foreach($error as $e) {
                        echo "<li>$e</li>";
                    }
                    echo "</ul>";
                }*/
        ?> 
        <label>Email:</label>
        <input type="email" name="usermail" placeholder="Enter your email" class="box" required>
        <?php /*
            if (isset($_POST['submit'])) {
                if (isset($_POST['usermail'])) {
                    $usermail = $_POST['usermail'];
                }
                else {
                    $usermail = '';
                }
                $error = array();

                if ($usermail == "") {
                    $error['usermail'] = "Email cannot be empty";
                }
                elseif (!preg_match("/^[A-Za-z @,'.-\/]{1,30}$/", $usermail)) { 
                    $error['name'] = "Name can contain only uppercase and lowercase alphabet, space, alias [@], comma [,], single-quote [‘], dot [.], dash [-] and slash [/].";
                }

                if (!empty($error)) {
                    echo "<ul>";
                    foreach($error as $e) {
                        echo "<li>$e</li>";
                    }
                    echo "</ul>";
                }*/
        ?>

        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your password" class="box" required>
        <label>Confirm Password:</label>
        <input type="password" name="cpassword" placeholder="Confirm your password" class="box" required>
        <input type="submit" value="Register" class="form-btn" name="submit">
        <p>Already have an account? <a href="loginform.php">Login here</a></p>
    </form>

    </div>
</body>
</html>