<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
       <?php 
       if (isset($_SESSION['login_user']) && $_SESSION['login_user']){
           echo ' <a href="logout.php">Logout</a>';
           echo '<a href="Book.php">Thêm sách mới</a>';
          echo "<table border='2'>
            <tr>
                <Th> Tên Sách</Th>
                <th> Tác giả</Th>
                <th> Thể loại</Th>
                <th> Hình</th>
                <th> Nội dung</th>
                <th> Vị trí</th>
                <th> Tình trạng</th>
            </tr>
    
        </table>";
       }
       else{
           echo 'Bạn chưa đăng nhập. Bấm vào <a href="Login.php">đây</a> đăng nhập ';
       }
       ?>
    </body>
</html>