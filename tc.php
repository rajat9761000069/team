<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="animate.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
</style>


<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body>


<!--   navbar start-->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#" >About</a></li>
      
      <li class="dropdown">
        <a class="dropdown-toggle" data-animations="fadeInDown fadeInLeft fadeInUp fadeInRight" data-toggle="dropdown">Loan
        <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="terms.php?id=car.php" >Car Loan</a></li>
           <li class="divider"></li>
          <li><a href="terms.php?id=personal.php" >Personal Loan</a></li>
           <li class="divider"></li>
        <li><a href="terms.php?id=twl.php">Two Wheeler Loan</a></li>
           <li class="divider"></li>
          <li><a href="terms.php?id=usedcar.php">Used Car Loan</a></li>
        </ul>
      </li>
    
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Investment
        <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="terms.php" >FIXED DEPOSIT</a></li>
           <li class="divider"></li>
          <li><a href="terms.php" >MUTUAL FUND</a></li>
           <li class="divider"></li>
        <li><a href="terms.php" >SAVING ACCOUNT</a></li>
        </ul>
      </li>
    
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Insurance
        <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="terms.php" >Life Insurance</a></li>
           <li class="divider"></li>
          <li><a href="terms.php" >Car Insurance</a></li>
           <li class="divider"></li>
        <li><a href="terms.php">Health Insurance</a></li>
        
        </ul>
      </li>
    
      <li><a href="contact.php">Contact Us</a></li>
    </ul>
   
      
    </div>
 
</nav>
<!--  navbar end-->
    <div class="assessment-container container">
        <div class="row">
            <div class="col-md-12 form-box">
                <form role="form" class="registration-form" action="javascript:void(0);">
                    <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                
								<h3>Applied for HDFC Bank CL in last 3 Months?</h3>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    
									<label >
									<img src="l1.png"><input type="radio" class="form-control" name="eq1" value="yes" id="y" required="required"></label>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
								<label>
                                    <img src="l2.png"><input type="radio" class="form-control" name="eq1" value="no" required="required" ></label>
                                </div>
                            </div>
                           
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>
					
					
					
                     <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                
								<h3>When do you need this loan?</h3>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    
									<label >
									<img src="l3.png"><input type="radio" class="form-control" name="eq1" value="yes" id="y" required="required"></label>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
								<label>
                                    <img src="l4.png"><input type="radio" class="form-control" name="eq1" value="no" required="required" ></label>
                                </div>
                            </div>
                           <button type="button" class="btn btn-previous">Previous</button>
                            <button type="button" class="btn btn-next">Next</button>
                        </div>
                    </fieldset>
					
					
					
					
                     
					
                     <fieldset>
                        <div class="form-top">
                            <div class="form-top-left">
                                
								<h3>How will car be used?</h3>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6">
                                    
									<label >
									<img src="l5.png"><input type="radio" class="form-control" name="eq1" value="yes" id="y" required="required"></label>
                                </div>
                                <div class="form-group col-md-6 col-sm-6">
								<label>
                                    <img src="l6.png"><input type="radio" class="form-control" name="eq1" value="no" required="required" ></label>
                                </div>
                            </div>
                           <button type="button" class="btn btn-previous">Previous</button>
						   </div>
						   <div>
                            <button type="button" class="btn btn-primary" name="submit">Search for car loan</button>
                        </div>
                    </fieldset>
					
					
					
                </form>
            </div>
        </div>
    </div>
	
	
<div class="cont" style="background-color:#000000">
<div class="row">
<div class="col-lg-12">
<div class="row">

<div class="col-lg-2">
<center>
<h4 style="color:#CCFF00">Personal Loan</h4>
<ul>
<li><a href="#" >ICICI Home Loan</a></li>
<li><a href="#" >SBI Home Loan</a></li>
<li><a href="#" >HDFC Home Loan</a></li>
<li><a href="#" >AXIS Home Loan</a></li>
</ul>
</center>
</div>
<div class="col-lg-2">
<center>
<h4 style="color:#CCFF00">Car Loan</h4>
<ul>
<li><a href="#" >ICICI Home Loan</a></li>
<li><a href="#" >SBI Home Loan</a></li>
<li><a href="#" >HDFC Home Loan</a></li>
<li><a href="#" >AXIS Home Loan</a></li>
</ul>
</center>
</div>
<div class="col-lg-2">
<center>
<h4 style="color:#CCFF00">Two Wheeler Loan</h4>
<ul>
<li><a href="#" >ICICI Home Loan</a></li>
<li><a href="#" >SBI Home Loan</a></li>
<li><a href="#" >HDFC Home Loan</a></li>
<li><a href="#">AXIS Home Loan</a></li>
</ul>
</center>
</div>
<div class="col-lg-2">
<h4 style="color:#CCFF00">Used Car Loan</h4>
<center>
<ul>
<li><a href="#" >ICICI Home Loan</a></li>
<li><a href="#" >SBI Home Loan</a></li>
<li><a href="#" >HDFC Home Loan</a></li>
<li><a href="#" >AXIS Home Loan</a></li>
</ul>
</center>
</div>


<div class="col-lg-2">
<center>
<h4 style="color:#CCFF00">Insurance</h4>
<ul>
<li><a href="#" >ICICI Home Loan</a></li>
<li><a href="#" >SBI Home Loan</a></li>
<li><a href="#" >HDFC Home Loan</a></li>
<li><a href="#" >AXIS Home Loan</a></li>
</ul>
</center>
</div>

<div class="col-lg-2">

<center>
<h4 style="color:#CCFF00">Deposite</h4>
<ul>
<li><a href="#" >ICICI Home Loan</a></li>
<li><a href="#" >SBI Home Loan</a></li>
<li><a href="#" >HDFC Home Loan</a></li>
<li><a href="#" >AXIS Home Loan</a></li>
</ul>
</center>
</div>



</div>
</div>
</div>


</div>
</div>
<div class="cont" style="background-color:#000000">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-6">

<hr>
<ul>
<li><a href="#" >Terms & Condition</a></li>
<li><a href="#" >Privacy Policy</a></li>
</ul>
</div>
<div class="col-lg-6">
<hr>
<h4>Copyright © 2016 faircash.in. Privacy Policy</h4>
</div>
</div>
</div>
</div>
</div>


	
	
	
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 
    <script  src="js.js"></script>
 
</body>
</html>