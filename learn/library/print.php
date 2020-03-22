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