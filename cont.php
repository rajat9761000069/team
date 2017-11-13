<?php 

	if(isset($_GET['login']))
	{	
 $con = mysql_connect("localhost","root", "") or die (mysql_error());
 
$db=mysql_select_db('loan',$con) or die (mysql_error()); 
	if(isset($_POST['login']))  
	{  $email= $_POST['email'];
		$password =$_POST['password'];
  $query= " SELECT * FROM customer WHERE email='$email' AND password='$password' ";
$run= (mysql_query ($query) ) or die(mysql_error());

   if(mysql_num_rows($run)>0)
        {
		session_start();
		while($r=mysql_fetch_array($run)) { 
		$usr=$_SESSION['email']=$r['email'];
		$pass=$_SESSION['password']=$r['password']; 
		header('location:home.php');
		}
	  
else
{
echo "<script>alert('your password and email id are wrong<a href='login.php'>click here</a>')</script>";
}
}// end num rows
}
else {
header('location:login.php');


}
	}
 
 
 
	if(isset($_GET['logout']))
	{ session_start();
		unset($_SESSION['email']);
		unset($_SESSION['password']);
		 //session_unset($_SESSION['Name']);
		  header('location:home.php');
		 
	}
	
	
	

	
	

	if(isset($_GET['registration']))
	{	
 $con = mysql_connect("localhost","root", "") or die (mysql_error());
 
$db=mysql_select_db('loan',$con) or die (mysql_error()); 
	if(isset($_POST['registration']))  
	{
    $user= $_POST['name'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$gender= $_POST['gender'];
	$password =$_POST['password'];
  $query= " SELECT * FROM customer WHERE email='email' AND password='$password' ";
$run= (mysql_query ($query) ) or die(mysql_error());

   if(mysql_num_rows($run)>0)
        {
		 echo "sorry u r existing user";
		}
	  else
	  {
	  $query1="insert into customer(name,email,phone,gender,password)values('$name','$email',$phone,'$gender','$password')";
	  $run1= (mysql_query ($query1) ) or die(mysql_error());
header('location:login.php');
	  }


}	
	else{
	 header('location:registration.php');
	}
	

	}

?>
