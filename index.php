<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Management System</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" type="image/x-icon" href="img/logo.png">
</head>
<body>

<div id="snipper" class="justify-content-center text-center" style="
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 10px;">

</div>

<div id="logreg-forms" >
<center><img class="" style="height:100px; border-bottom-left-radius: 100px; border-bottom-right-radius: 100px; " src="img/logo.png" alt=""></center>
        <form class="form-signin" id="login" >
            <!-- <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Log in</h1> -->

            <div id="er"></div>

            <input type="email" id="inputEmail" name="inputEmail" class="" placeholder="Email address" required="" autofocus="">
            <input type="password" id="inputPassword" name="inputPassword" class="" placeholder="Password" required="">
            
            <button class="btn btn-success btn-block w-100"  type="submit"><i class="fas fa-sign-in-alt"></i> Log in</button>
            <a href="#" id="forgot_pswd" class="mb-5">Forgot password?</a>
            <hr>
            
            <!-- <p>Don't have an account!</p>  -->
            <a class="btn btn-primary" href="app/signup.php" style="color:white;">Sign up New Account</a>
            </form>

           
            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            
        
            
    </div>
  
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- 
bootstraps -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="js/login.js"></script>
</body>
</html>