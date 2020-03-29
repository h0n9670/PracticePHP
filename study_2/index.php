<?php
$conn = mysqli_connect("localhost","kyo",'123456',"opentutorials");

function print_list(){
    global $conn;
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $list ='';
    while($row = mysqli_fetch_array($result)){
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">
        {$row['title']}</a></li>";
    }
    echo $list;
}
function print_title_description($kind){
    if(isset($_GET['id'])){
        global $conn;
        $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        echo $row[$kind];
    }else{
        echo "Welcome";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
        <?php
        print_title_description('title');
        ?>
        </title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php
            print_list();
            ?>
        </ol>
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])){ ?>
        <a href="update.php?id=<?=$_GET['id'] ?>">update</a>
        <form action="delete_process.php" method="POST">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit" value="delete">
        </form>
        <?php } ?>
        <h2>
            <?php
            print_title_description('title');
            ?>
        </h2>
        <?php
        print_title_description('description');
        ?>
</body>
</html>