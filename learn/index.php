<?php
require_once('view/top.php');
?>
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
<?php
require('view/bottom.php');
?>