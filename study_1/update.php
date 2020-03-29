<?php
function print_title(){
    if(isset($_GET['id'])){//isset 값의 유무를 판단
        echo $_GET['id'];
    }else{
        echo "Welcome";
    }
}
function print_list(){
    $list = scandir('./data'); // 디렉토리에 파일목록을 배열형태로 받아옴
                $i = 0;
                while($i < count($list)){
                    if($list[$i] != '.'){
                        if($list[$i] != '..'){
                            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                        }
                    }
                    $i+=1;
                }
}
function print_description(){
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
    }else{
        echo "Helllo, PHP";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
        <?php
        print_title();
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
        <a href="update.php?id=".<?=$_GET['id'] ?>>update</a>
        <?php } ?>
        <form action="update_process.php" method="POST">
            <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
            <p>
                <input type="text" name="title" placeholder="Title" value=<?php 
                print_title(); ?>>
            </p>
            <p>
                <textarea name="description" placeholder="Description">
                <?php print_description(); ?></textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
    </body>
</html>