if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
    <!-- chualoi -->
    $errors = [];
    <!-- kiemtra -->
    if( emty(trim($_POST['user']))){
        $errors['user']['require'] = 'Họ tên không được để trống';
    }else{
        if (strlen(trim($_POST['user']))<5 ) {
            $errors['user']['min'] = 'Họ tên phải lớn hơn 5 ký tự';
        }
    }   

    if( emty(trim($_POST['phone']))){
        $errors['phone']['require'] = 'Số điện thoại không được để trống';
    }else{
        if (strlen(trim($_POST['phone']))>12 ) {
            $errors['phone']['max'] = 'Họ tên phải bé hơn 12 ký tự';
        }
    }

    if( emty(trim($_POST['link_fb']))){
        $errors['link_fb']['require'] = 'Link facebook không được để trống';
    }else{
        if (strlen(trim($_POST['link_fb']))<5 ) {
            $errors['link_fb']['min'] = 'Link facebook phải lớn hơn 5 ký tự';
        }
    }   
<?php
?>