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