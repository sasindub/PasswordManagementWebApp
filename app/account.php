<!DOCTYPE html>
<html lang="en">
<head>
  <title>lockMe | Password Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/style.css">
  
  <link rel="icon" type="image/x-icon" href="../img/logo.png">
  <style>
    
    .containerr {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 10pt;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.containerr input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 15px;
  width: 15px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.containerr:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.containerr input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.containerr input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.containerr .checkmark:after {
 	/* top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white; */
}
    
      
      .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        width:220px;
        border-radius: 20px;
      }
      
      .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
      }
      
      .dropdown-content a:hover {background-color: #ddd;}
      
      .dropdown:hover .dropdown-content {display: block;}
      
      .dropdown:hover .dropbtn {background-color: #3e8e41;}
      
      .boxx{
      
        overflow-y: auto;
      	height: 90px;
    }

      @media screen and (max-width:500px){
         
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            width:220px;
            border-radius: 20px;
    
        }
        .drp{
            margin-right: 250px;
        }
     
      }

      .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #065471;
   color: white;
   text-align: center;
   padding-top: 20px;
   padding-bottom: 10px;
}

.inp{
  border-radius: 5px; padding: 5px; width:100%; border: 1px solid white; background-color: #e6e6e8;
}

  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #065471;">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="../img/logo.png" alt="" style="height:100px; margin-top:-20px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;"></a>
    </div>


    <div class="dropdown" style="margin-top:6px; float:right; cursor: pointer;">

    <div class="">
    <img src="../img/b.jpg" alt="" class="" style="border:2px solid #0b316b;  vertical-align: middle;
  width: 40px;
  height: 40px;
  border-radius: 50%; float:right;">
  <div style="color:#065471; position:absolute; 
  transform: translate(100%,    0%); font-size:20pt; ">s</div>

</div>
 
<div class="drp">
  <div class="dropdown-content container">
  
  <div style=" margin-top:10px; float:left;" >
    <img src="../img/b.jpg" alt="" class="" style="border:2px solid #0b316b;  vertical-align: middle;
    width: 40px;
    height: 40px;
    border-radius: 50%;">
    <div style="color:#065471; position:absolute; 
    transform: translate(100%,  -105%); font-size:20pt; ">s</div>
    </div>

  <p style="float:right; margin-top:15px; margin-right:21px; font-size:15pt;">Samantha</p>
  
  <br><br><br>

        <div class=" " style="text-align: center;">

        <div id="userDetails">
            <p> <b> Name </b>: Sanath Nishantha</p>
            <p><b> E-mail </b>: Sanath Nishantha</p>
            <p><b> Mobile </b>: Sanath Nishantha</p>
        </div>    
            
            <div style="text-align: center;">
            <p style="font-size:10pt; "><span style="font-size:20pt; "> 05 </span> <span style="background-color: green; color:white; padding:2px; border-radius: 5px;">Passwords Saved </span> </p>
            </div>

        </div>

  

  </div>

</div>
    
  </div>
</nav>
  
<br><br><br>
<div class="container" style="margin-top:50px">

<input type="text" name="search" id="search" style="float:left; border-radius: 10px; padding: 5px; width:85%; border: 1px solid white; background-color: #e6e6e8;" placeholder="Search...">

<button type="submit" style="float:right; background-color: #065471; color:white; padding: 4px 8px 4px 8px; border-radius: 10px;" data-toggle="modal" data-target="#addPass">new</button> <br><br>



<h3>My Passwords</h3>


  <div class="row">

    <div class="col-md-2 col-sm-1" style="margin-bottom:3px;">
        <div class="card" style="width: 18rem; border:2px solid #065471; padding:10px; border-radius: 20px;" >
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>

                <div class="boxx">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. >A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>

                <a href="#" class="card-link" style="background-color: #065471; color:white; border-radius: 4px; padding: 3px 6px 3px 6px;">View</a>
            </div>
        </div> 
    </div>

    <div class="col-md-2 col-sm-1" style="margin-bottom:3px;">
        <div class="card" style="width: 18rem; border:2px solid #065471; padding:10px; border-radius: 20px;" >
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>

                <div class="boxx">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. >A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.>A fixed navigation bar stays visible in a fixed position (top or bottom) independent of the page scroll.</p>
                </div>

                <a href="#" class="card-link" style="background-color: #065471; color:white; border-radius: 4px; padding: 3px 6px 3px 6px;">View</a>
            </div>
        </div> 
    </div>


    

    

  </div>
</div>


<div class="footer">
    <p>Copyright © 2023 lockMe®. All rights reserved. <br> Designed and Developed by TIOSS</p>
</div>

<?php include 'passmodal.php'?>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<!-- 
bootstraps -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="../js/account.js"></script>

</body>
</html>