 <?php
 session_start();
 
 $mobile_no=$_POST['mobile_no'];
 $password=md5($_POST['password']);
 
 $conn=mysqli_connect("localhost","root",'','php6pm');
 $q="select * from users where mobile_no='$mobile_no' and password='$password'";
 $res=mysqli_query($conn,$q);
 if(mysqli_num_rows($res)>=1)
 {
	 
	 $user=mysqli_fetch_assoc($res);
	 $_SESSION['user']=$user;
	 //echo "login successful";
	 header('location:home.php');
	 
	 
 }
 else
 {
	 echo "<script>alert('username/password is incorrect. Please try again.');window.location='login.php';</script>";
 }
 ?>