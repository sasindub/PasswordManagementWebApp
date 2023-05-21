<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Management System | Sign Up</title>
    
        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" type="image/x-icon" href="../img/logo.png">
        <style>
            input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
        </style>
</head>
<body>



<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100" >
      <div class="col-lg-8 col-xl-6" >
        <div class="rounded-3" style="background-color: #f3f3f3;">

        <center><img class="ms-5" style="height:100px;  border-bottom-left-radius: 100px; border-bottom-right-radius: 100px;" src="../img/lgg.png" alt=""></center>
       
          <div class="card-body ">

            <form class="px-md-2" id="signup">

              
             Name
            
                <input type="text" id="sname" name="sname" class="w-100 p-1 rounded" placeholder="ex: Jhone Colabs" required />
                
                
           

              
              
              E-mail
              <input type="email" id="semail" name="semail" class="w-100 p-1 rounded" placeholder="example@gmail.com" required />
                
             

              
              
              Mobile
              <input type="text" id="mobile" name="mobile" class="w-100 p-1 rounded" placeholder="(+94)xxx-xxxxxxx" required />
                
              

              
          
             
              Password
              <input type="password" id="spass" name="spass" class="w-100 p-1 rounded" placeholder="ex: Jhone Colabs" required />
                
             

              
              <div class="form-outline mb-3">
              Re-Password
                
                <input type="password" id="scpass" name="scpass" class="w-100 p-1 rounded" placeholder="ex: Jhone Colabs" required />
              </div>


            <hr>


             

              
              
               
             
                

              <button type="submit" class="btn btn-primary btn-lg mb-3 w-100">Sign Up</button>

              <p  class="">All ready have an account <a href="../index.php" id="cancel_reset">Log in</a></p>

            </form>


            <form action="" id="emailConfirm">
              <div style="background-color: #f3f3f3;">
              <div class="form-outline mb-3">
              Confirmation Code
                
                <input type="text" id="code" name="code" class="w-100 p-1 rounded" placeholder="xxxx" min="4" max="4" required />
              </div>


            <hr>

           
              </div>
            </form>


          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- 
bootstraps -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- singup.js linked -->
<script src="../js/signup.js"></script>
 
</body>
</html>