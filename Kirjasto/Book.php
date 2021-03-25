<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>

        <meta charset="uts-8">
        <meta name="viewport" content="width=device-width, initial-scale =1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>

            <?php 
       if (isset($_SESSION['login_user']) && $_SESSION['login_user']){
           echo '<div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
              <div class="bg-dark p-4">
                <p class="text-white"><a href="logout.php">Đăng xuất</a></p>
                <span class="text-white"><a href="Minunkirjasto.php">Tủ sách của tôi</a></span>
              </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
          </div>
           ';

          echo '

          <div class="container">
            <hr>
            <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card">
            <header class="card-header">
                <h4 class="card-title mt-2">Thêm sách mới</h4>
            </header>
            <article class="card-body">

          <form class="text-center border border-light p-5" method="GET" action="BookSql.php">

            <div class="form-group">
                <label>Tên Sách *</label>
                <input type="text" name="book" class="form-control" placeholder="Tên Sách" min="8">
            </div>
            
            <div class="form-group">
                <label>Tên tác giả *</label>
                <input type="text" name="author" class="form-control" placeholder="Tên tác giả" min="8">
            </div>


                <div class="form-group input-group">
                    
                    <select class="form-control" name="categoty">
                        <option value="" disabled selected>Thể loại sách</option>
                        <option value="học ngoại ngữ">Học ngoại ngữ</option>
                        <option value="mẹ và bé">Mẹ và bé</option>
                        <option value="tiểu thuyết">Tiểu thuyết</option>
                        <option value="Tôn giáo">Tôn giáo</option>
                        <option value="trinh thám">Trinh thám</option>
                    </select>
                </div> 

            <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupFileAddon01">Hình sàch</span>
                </div>
                <div class="custom-file">
                  <input type="file" name="Picture" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                  <label class="custom-file-label" for="inputGroupFile01">Chọn file ảnh</label>
                </div>
              </div>

            <div class="form-group">
                <label>Nội dung *</label>
                <input type="text" name="content" class="form-control" style="width: 400px; height: 200px;" placeholder="Hãy kể một chút về cuốn sách của bạn" min="8">
            </div>
                <!-- Sign in button -->
                <button class="btn btn-info btn-block my-4" type="submit" name= "save">Đăng sách</button>

          ';
       }
       else{
           echo 'Bạn chưa đăng nhập. Bấm vào <a href="Login.php">đây</a> đăng nhập ';
       }
       ?>

        </form>
    </body>
</html>

