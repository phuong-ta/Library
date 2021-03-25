<!DOCTYPE html>
<html lang="vi">
    <head>

        <meta charset="uts-8">
        <meta name="viewport" content="width=device-width, initial-scale =1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head><br>
    <body>
        <div class="pos-f-t">
            <div class="collapse" id="navbarToggleExternalContent">
              <div class="bg-dark p-4">
                <span class="text-white"><a href="Acc.php">Đăng ký</a></span><br>
                <span class="text-white"><a href="Login.php">Đăng nhập</a></span><br>
                <span class="text-white"><a href="">Phản hồi</a></span>
              </div>
            </div>
            <nav class="navbar navbar-dark bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </nav>
          </div>
        

        <div class="">
            <br><h2 class="text-center">Tủ sách việt</h2>
            <p class="text-center">Nơi lưu giữ văn hoá Việt tại hải ngoại</p> <br> 

            <table class="table table-bordered table-striped" >
            <thead class="thead-dark">
            <tr>
                <th> Tên Sách</th>
                <th > Tác giả</th>
                <th> Thể loại</th>
                <th > Hình</th>
                <th> Nội dung</th>
                <th> Vị trí</th>
                <th> Tình trạng</th>
                <th>  Mượn sách</th>
                <th> </th>
            </tr>
        </thead>

        <?php

            $conn = mysqli_connect("localhost", "root", "", "test");
            $sql = " SELECT * FROM kirjasto";
            $res = mysqli_query ($conn,$sql);
        ?>


        <tbody>
        <?php while ($row = mysqli_fetch_array ($res)) {
        echo "<tr>". 
        
        "<td>". $row[1]. "</td>".
        "<td>". $row[2]. "</td>".
        "<td>". $row[3]. "</td>".
        "<td>". "<img src='pic/".$row[4]."' >". "</td>".
        "<td>". $row[5]. "</td>".
        "<td>". "</td>".
        "<td>". $row[6]. "</td>".
        "<td>"."<a href='laina.php'>Mượn</a>" . "</td>".
        "</tr>"; }
    ?>

        </tbody>
        </table>
        </div>
    </body>
</html>