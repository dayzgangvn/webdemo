<?php
$servername = 'sql211.epizy.com';
$dbname = '	epiz_31954521_bactaichuan';
$username = 'epiz_31954521';
$password = '76zVlB9CfVDCLN';
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect($servername, $username, $password, $database); 
if (!$conn) {
    die("Connection failed: ");
}
echo "Connected successfully";
mysqli_close($conn);

// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
$username = trim($_POST['username']);
$phone = trim($_POST['phone']);
$fb_link = trim($_POST['fb_link']);


if (empty($username)) {
array_push($errors, "Username is required"); 
}
if (empty($fb_link)) {
array_push($errors, "fb_link is required"); 
}
if (empty($phone)) {
array_push($errors, "phone is required"); 
}

// Kiểm tra username hoặc sdt có bị trùng hay không
$sql = "SELECT * FROM bactaichuan WHERE username = '$username' OR phone = '$phone'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc sdt đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="register.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO bactaichuan (username, phone, fb_link) VALUES ('$username','$phone','$fb_link')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="index.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Tên đăng nhập: ".$_POST['username']."<br/>";
echo "phone: " .$_POST['phone']."<br/>";
echo "fb_link đăng nhập: ".$_POST['fb_link']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
}
}
}
?>