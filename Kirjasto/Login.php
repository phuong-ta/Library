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

        <div class="container">
            <hr>
            <div class="row justify-content-center">
            <div class="col-md-6">
            <div class="card">
            <article class="card-body">

        <form class="text-center border border-light p-5" method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

            <p class="h4 mb-4">Đăng nhập</p>
            <input type="text" name="acc" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="Tên tài khoản">
            <input type="password" name="pass" id="defaultLoginFormPassword" class="form-control mb-4" placeholder="Mật khẩu">
        
            <div class="d-flex justify-content-around">
                <div>
                    <!-- Remember me -->
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                        <label class="custom-control-label" for="defaultLoginFormRemember">Lưu tài khoản</label>
                    </div>
                </div>
                <div>
                    <!-- Forgot password -->
                    <a href="forgot.php">Quên mật khẩu?</a>
                </div>
            </div>
        
            <!-- Sign in button -->
            <button class="btn btn-info btn-block my-4" type="submit" name= "save">Đăng nhập</button>
        
            <!-- Register -->
            <p>Bạn không phải là thành viên?
                <a href="Acc.php">Đăng ký</a>
            </p>
        
        </form>

        </body>
        </html>


<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "test");

if (isset($_GET["save"])) {

    if (empty ($_GET["acc"] and $_GET["pass"])) {
        echo " please fille enough required field";
    }else {
    
    
        $g = $_GET ["acc"];
        $h = $_GET ["pass"];
        

        $sql = " SELECT * FROM urser 
                WHERE Account = '$g' and Password = '$h'";

        $res = mysqli_query ($conn, $sql);
        $count = mysqli_num_rows($res);

        if ($count == 1) {
          $_SESSION['login_user'] = $g;

            header ("Location: Munkirjasto.php");
        } else {
            echo "sai";
        }
    }
}

?>