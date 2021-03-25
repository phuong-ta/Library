<!DOCTYPE html>
<html>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    
    <body> 
    <div class="container">
    <hr>
    <div class="row justify-content-center">
    <div class="col-md-6">
    <div class="card">
    <header class="card-header">
        <a href="" class="float-right btn btn-outline-primary mt-1">Log in</a>
        <h4 class="card-title mt-2">Sign up</h4>
    </header>
    <article class="card-body">

    <form>
        <div class="form-row">
            <div class="col form-group">
                <label>First name </label>   
                  <input type="text" class="form-control" placeholder="">
            </div> <!-- form-group end.// -->

            <div class="col form-group">
                <label>Last name</label>
                  <input type="text" class="form-control" placeholder=" ">
            </div> <!-- form-group end.// -->
        </div> <!-- form-row end.// -->

        <div class="form-group">
            <label>Email address</label>
            <input type="email" class="form-control" placeholder="">
        </div> <!-- form-group end.// -->

        <div class="form-row">
            <div class="form-group col-md-6">
              <label>City</label>
              <input type="text" class="form-control">
            </div> <!-- form-group end.// -->
            <div class="form-group col-md-6">
              <label>Country</label>
              <select id="inputState" class="form-control">
                <option> Choose...</option>
                  <option>Uzbekistan</option>
                  <option>Russia</option>
                  <option selected="">United States</option>
                  <option>India</option>
                  <option>Afganistan</option>
              </select>
            </div> <!-- form-group end.// -->

        </div> <!-- form-row.// -->
        <div class="form-group">
            <label>Create password</label>
            <input class="form-control" type="password">
        </div> <!-- form-group end.// -->  

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"> Register  </button>
        </div> <!-- form-group// -->      

        <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
    </form>
    </article> <!-- card-body end .// -->
    <div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
   

</body>

</html>