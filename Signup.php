<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

    $mysqli = new mysqli("localhost", "root", "Somebody1ceToldMe", "UserDatabase");
    
    #var_dump($_POST);
    if(isset($_POST['agree'])) {
        $fn = $_POST['firstName'];
        $ln = $_POST['lastName'];
        $em = $_POST['Email'];
        $mysqli->query("INSERT INTO Users (FirstName, LastName, Email) VALUES('$fn', '$ln', '$em')");
    }
    ?>
    <form Method="POST">
    <h4>First Name: <input type="text" name="firstName" placeholder="Bob" required><h4>
    <h4>Last Name: <input type="text" name="lastName" placeholder="Belcher" required></h4>
    <h4>Email: <input type="text" name="Email" placeholder="bob@bobsburger.com" required></h4>
    <p><input type="checkbox" name="agree" required> Do you agree to having your form data stored on our server? </p>
    <input type="submit" value="Send">
    </form>
</body>
</html>
