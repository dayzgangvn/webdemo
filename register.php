<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bác Tài Chuẩn</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel = "icon" type = "image/jpg" href = "images/icon.jpg">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <script src="js/jquery-3.6.0.min.js"></script>
	    <script src="js/script.js"></script>
    </head>
    <body data-spy="scroll" data-target="#navbarSupportedContent" data-offset="50">
        <nav class="navbar sticky-top navbar-expand-xl navbar-dark bg-info animate__animated animate__fadeInLeftBig  p-3 ">
            <a class="navbar-brand" href="index.php">BacTaiChuan.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Thông tin khóa học</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Giảng viên</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="register.php">Đăng ký</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section4">Hỗ trợ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <!-- form dk -->
        <section class="my-5 text-dark">
            <div class="py-5">
                <h2 class="text-center display-4 ">
                Đăng ký ngay 
                </h2>
                <p class="text-center"> Đăng ký ngay để trò chuyện trực tiếp cùng giảng viên</P>
            </div class=" p-3 col-lg-4 col-md-4 col-12">
                <form method="post" action="register.php" class="form">
                    <div class="form-group">       
                        <h2>Họ và Tên</h2>
                        <input placeholder="Họ và tên của bạn" maxlenght="20" type="text" name="username" autocomplete="off" class="form-control" value="" required>
                    </div>
                    <div class="form-group">       
                        <h2>Số điện thoại (Zalo)</h2>
                        <input placeholder="Số điện thoại" maxlength="12"  type="Number" name="phone" autocomplete="off" class="form-control" value="" required>
                    </div>
                    <div class="form-group">       
                        <h2>Link facebook</h2>
                        <input placeholder="https://www.facebook.com/BeoBeo278/" size="100" type="text" name="fb_link" autocomplete="off" class="form-control" value="" required>
                    </div>
                    <div class="p-3 d-flex justify-content-center">
                        <button type="submit" class="btn-lg btn-success d-flex align-items-center" name="dangky" value="Đăng Ký">Submit</button>
                    </div>
                    <?php require 'xuly.php';?>
                </form>
            </div>    

            <!-- footer -->
            <section class="sticky-bottom" >   
            <h3 class="p-3 bg-secondary text-white text-center">Đăng ký ngay để nhận được tư vấn miễn phí từ chúng tôi</h3>
            <div id="section4" class="container">           
                <div class="row align-items-center text-center">
                    <div class="col p-3 d-none d-lg-block">
                        <a href="https://www.facebook.com/Giaoviendaylaioto">
                            <img alt="https://www.facebook.com/Giaoviendaylaioto" src="images/fb.jpg"
                            width="90" height="90">
                            <span>Nhắn tin Facebook</span>
                        </a>
                    </div>
                    <div class="col p-3 d-none d-lg-block">
                        <a href="https://chat.zalo.me/?phone=0986540859">
                            <img alt="0986540859" src="images/zalo.jpg"
                            width="90" height="90">
                            <span>Nhắn tin Zalo</span>
                        </a>
                    </div>
                    <div class="col p-3 ">
                        <a href="#">
                            <img alt="0986540859" src="images/phone.jpg"
                            width="90" height="90">
                            <span>0986540859</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <script>
        $(document).ready(function(){
            $('.btn').tooltip({title: "<h1><strong>HTML</strong> inside <code>the</code> <em>tooltip</em></h1>", html: true, placement: "bottom"}); 
        });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>