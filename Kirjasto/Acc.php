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
            <header class="card-header">
                <a href="Login.php" class="float-right btn btn-outline-primary mt-1">Đăng nhập</a>
                <h4 class="card-title mt-2">Đăng ký</h4>
            </header>
            <article class="card-body">
   
    <form method="GET" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

            <div class="form-group">
                <label>Tên của người dùng *</label>
                <input type="text" name="name" class="form-control" placeholder="Điền họ tên của bạn" min="8">
            </div>

            <div class="form-group">
                <label>Tên tài khoản *</label>
                <input type="text" name="account" class="form-control" placeholder="Tên tài khoản của bạn" min="8">
            </div>

            <div class="form-group">
                <label>Mật khẩu *</label>
                <input type="password" name="password" class="form-control" placeholder="Điền mật khẩu của bạn" min="8">
            </div>
            
            <div class="form-group">
                <label>Số điện thoại *</label>
                <input type="text" name="phone" class="form-control" placeholder="Điền sdt của bạn" min="10">
            </div>

            <div class="form-group">
                <label>Email address *</label>
                <input type="email" name="email" class="form-control" placeholder="Điền Email của bạn">
            </div> <!-- form-group end.// -->
            <small class="text-muted">Nhập email bạn thường xuyên sử dụng.</small>

            <div class="form-group">
                <label>Bạn đang sống ở đâu</label>
                <input class="form-control" type="text" name="location" placeholder="Thành phố bạn sống">
            </div> <!-- form-group end.// --> 

            <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary btn-block"> Đăng ký  </button>
            </div> <!-- form-group// -->   

            <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
        </form>
        </article> <!-- card-body end .// -->
    

        </form>


   
    
    </body>
</html>

<?php

$conn = mysqli_connect("localhost", "root", "", "test");

if (isset($_GET["save"])) {

    if (empty ($_GET["name"] and $_GET["account"] and $_GET["password"] and $_GET["email"] and $_GET["location"])) {
        echo " Hãy điền đầy đủ thông tin được yêu cầu";
    }else {
    
    
        $a = $_GET ["name"];
        $b = $_GET ["account"];
        $c = $_GET ["password"];
        $d = $_GET ["phone"];
        $e = $_GET ["email"];
        $f = $_GET ["location"];

        $sql = "INSERT INTO urser (Fullname, Account, Password, Phone, Email, Location)
                VALUE ('$a', '$b', '$c', '$d', '$e', '$f')";

        $res = mysqli_query ($conn, $sql);

        if ($res) {
            echo "Bạn đã đăng ký thành công! <br>"; 
            echo" Tài khoản của bạn là $b, và mật khẩu là $c.<br>";
            echo "";
        } else {
            echo "Đăng ký lỗi. Hãy kiểm tra lại thông tin bạn đăng ký.";
        }
    }
}
?>