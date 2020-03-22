<?php
require_once('view/top.php');
?>
        <a href="create.php">create</a>
        <?php if(isset($_GET['id'])){ ?>
        <a href="update.php?id=".<?=$_GET['id'] ?>>update</a>
        <?php } ?>
        <form action="update_process.php" method="POST">
            <input type="hidden" name="id" value="<?=$_GET['id']?>">
            <p>
                <input type="text" name="title" placeholder="Title" value=<?php 
                print_title_description('title'); ?>>
            </p>
            <p>
                <textarea name="description" placeholder=
                "Description"><?php print_title_description('description'); ?></textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
<?php
require('view/bottom.php');
?>