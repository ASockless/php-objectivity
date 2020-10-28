<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HomePage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>

     <?php
    include("php/classes/Book.php");
    include("php/classes/Movie.php");
    error_reporting(E_ALL);
    ini_set("display_error", 1);
    #defining objects
    $book_1984 = new Book;
    $book_charchoc = new Book;

    $movie_dr_who = new Movie;
    
    #giving atributes to objects
    $book_1984->setAttributes("1984", 149, 43, "George Orwell", 1949, "1984-Cover.png");
    $book_charchoc->setAttributes("Charlie and the Chocolate Factory", 169, 12, "Roald Dahl", 1964, "Charlie.jpg");
    $movie_dr_who->setAttributes("Dr Who", 300, 8, "drwho.jpg");

    $mysqli = new mysqli("localhost", "root", "Somebody1ceToldMe", "UserDatabase");
    
    ?>

</head>
<body>
    <div class="wrapper">    
        <div class="title-medium">
            <h1>Products</h1>
        </div>
        <div class=prod-bg>
            <div class="products">
                <?php
                    function fetch_row($quary){
                        while ($a = $quary->fetch_row()) {
                            $list[] = $a;
                        } 
                        return $list;
                    }
                    
                    #var_dump(fetch_row($mysqli->query("SELECT * FROM Users")));
                    echo fetch_row($mysqli->query("SELECT * FROM Users"))[0][0];
                    
                ?>  
            </div>
        </div>
    </div>
</body>
</html>
