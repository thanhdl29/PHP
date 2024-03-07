<?php

$file = "img/";
$image = $file.basename($_FILES['hinhanh']['name']);
//isset: kiểm tra có tồn tại hay không
if (isset($_POST['btn'])) {
    if(isset($_FILES['hinhanh'])){
        if($_FILES['hinhanh']['size'] == 0){
            echo "Bạn chưa chọn file";
        }elseif($_FILES['hinhanh']['size']>2000000){
            echo "File quá dung lượng";
        }elseif(file_exists($image)){
            echo "File đã tồn tại";
        }
        else{
            move_uploaded_file($_FILES['hinhanh']['tmp_name'], './img/'.$_FILES['hinhanh']['name']);
            echo "Up file thành công";
        }

    }else{
        echo "upload file bị lỗi";
    }
}
?>
