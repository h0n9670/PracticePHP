<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
            if(isset($_GET['id'])){//isset 값의 유무를 판단
            echo $_GET['id'];
            }else{
            echo "Welcome";
            }
             ?>
        </title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php
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
                ?>
        </ol>
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])){ ?>
        <a href="update.php?id=<?=$_GET['id'] ?>">update</a>
        <form action="delete_process.php" method="post">
            <input="hidden" name="id" value="<?=$_GET['id']?>">
            <input type="submit" value="delete">
        </form>
        <?php } ?>
        <h2>
            <?php
            if(isset($_GET['id'])){//isset 값의 유무를 판단
                echo $_GET['id'];
            }else{
                echo "Welcome";
            }
             ?>
        </h2>
        <?php
            function print_description(){
                if(isset($_GET['id'])){
                    echo file_get_contents("data/".$_GET['id']);
                }else{
                    echo "Helllo, PHP";
                }
            }
        ?>
    </body>
</html>