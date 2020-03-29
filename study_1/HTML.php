<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?=HTML">HTML</a></li>
            <li><a href="index.php?=CSS">CSS</a></li>
            <li><a href="index.php?=JavaScript">JavaScript</a></li>
        </ol>
        <h2>
            <?php
            echo $_GET['id'];
            ?>
        </h2>
        <h1>function</h1>
        <?php
        $str = "Lorem ipsum dolor sit amet consectetur adipisicing
        elit. Dolore, explicabo quibusdam suscipit 
        
        assumenda voluptas dicta deserunt iure cupiditate 
        id corrupti eaque. Quaerat eum illum ex nihil illo
        adipisci officiis quo!";
        echo $str;
        ?>
        <h2>strlen()</h2>
        <?php
        echo strlen($str)
        ?>
        <h2>nl2br</h2>
        <?php
        echo nl2br($str)
        ?>
    </body>
</html>