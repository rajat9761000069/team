<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #1C2331 ;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #1C2331 ;
  }
  .carousel-indicators li {
      border-color: #1C2331 ;
  }
  .carousel-indicators li.active {
      background-color: #1C2331 ;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #1C2331  ; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #1C2331 ;
      background-color: #fff !important;
      color: #1C2331 ;
  }
  .panel-heading {
      color: #fff !important;
      background-color:#1C2331  !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #1C2331 ;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #1C2331 ;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
	  
      font-family: Montserrat, sans-serif;
  }
  
  .navbar li a, .navbar .navbar-brand
  {
  color:WHITE !important;
 
 
  }
  .glyphicon
  {
  color:#1C2331 ;
  }
  
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color:  #1C2331  !important;
      background-color:WHITE!important;
  }
  .navbar-nav li
  {
  color:black;
  }
  .navbar-default .navbar-toggle {
      border-color:;
      color: black !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #1C2331 ;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
 
  </style>
    <script>
     $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                $('b', this).toggleClass("caret caret-up");                
            });
    });
  </script>
  <style>
    .caret-up {
	color:#33b5e5;
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}

.dropdown-menu
{
background-color:#3F729B;

}
</style>


</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
        <ul class="nav navbar-nav navbar-right">
      <li ><a href="home.php" >About</a></li>
	    
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Loan
        <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="terms.php?id=car.php&id1=car" >Car Loan</a></li>
           
          <li><a href="terms.php?id=personal.php&id1=personal" >Personal Loan</a></li>
           
        <li><a href="terms.php?id=twl.php&id1=two_wheeler">Two Wheeler Loan</a></li>
           
          <li><a href="terms.php?id=usedcar.php&id1=used_car">Used Car Loan</a></li>
        </ul>
      </li>
	  
	    
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Investment
        <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="fixed_deposit.php" >FIXED DEPOSIT</a></li>
          <li><a href="mutual_fund.php" >MUTUAL FUND</a></li>
        <li><a href="saving_account.php" >SAVING ACCOUNT</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Insurance
        <b class="caret"></b></a>
        <ul class="dropdown-menu">     
		     <li><a href="life_insurance.php" >Life Insurance</a></li>
          <li><a href="car_insurance.php" >Car Insurance</a></li>
        <li><a href="health_insurance.php">Health Insurance</a></li>
        </ul>
      </li>
	  
     
	   <li><a href="contact.php">Contact Us</a></li>
	    <li><a href="cont.php?logout"> <button type="button" class="btn btn-primary btn-md">Log Out</button></a></li>
    </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Company</h1> 
  <p>We specialize in blablabla</p> 
  
</div>
<!--  navbar end-->
<div class="container">
<div class="row">
<div class="col-lg-12">
 
<?php

$connect=mysqli_connect("localhost","root","","loan");
$query= "select * from  deposit_rates";
$run_products = mysqli_query($connect,$query);
while ($row=mysqli_fetch_array($run_products))
{
$id=$row['id'];
$name=$row['institute_name'];
$image=$row['image'];
$amount=$row['amount_range'];
$interest=$row['interest_rate'];

$tenure=$row['tenure_range'];
echo "
<div class='container' style='width:80%' ;>
<div style='width: 100%;
      overflow: visible;
      float: left;
      position: relative;
      border: 2px  #fff;'>
<div class= style='width: 100%;
     height: 100px;'> ";
echo "<table class='table table-striped table-dark'><thead><tr><th>Institution Name</th><th>Deposite Amount Range</th><th>Tenure Range</th><th>Interest Rate</th><th>Quote</th></thead></tr>
<td>
      <a href='#'><img src='images/$image' width='107px' height='130px'/></a>
	 
</td>
<td>$amount</td><td>$tenure</td><td>$interest</br> Monthly Compounding</td><td><a href='fixed_deposit1.php'><button class='btn btn-success' style='width:100%;'>Get Quote</button></a></td></tr></table>";
 echo "
  </div>
</div   >
</div>
";
}
?>



</div>
</div>
</div>


<!-- end -->


                
</body>
</html>