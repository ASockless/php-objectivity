<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manage The Database</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
    require_once "functions.php";
    $mysqli = new mysqli("localhost", "root", "Somebody1ceToldMe", "UserDatabase");
    for($i = 0; ){
        echo fetch_row($mysqli->query("SELECT * FROM Users"))[0][0];
    }
    ?>
</body>
</html>