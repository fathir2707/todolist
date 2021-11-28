<?php
session_start();
include "config.php";
if(isset($_POST['login'])){
  $username=mysqli_real_escape_string($con, $_POST['nisn']);
  $password=mysqli_real_escape_string($con, $_POST['password']);
  if(empty($username)&&empty($password)){
  $error = 'Isi data terlebih dahulu...';
  }else{
 //Checking Login Detail
 $result=mysqli_query($con,"SELECT * FROM daftar WHERE nisn='$username' AND pass='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);

 if($count==1){

   $_SESSION['nisn'] = $row['nisn'];
   $_SESSION['pass'] = $row['pass'];
   $_SESSION['role'] = $row['role'];
   
   if($row['role']=="user"){
      header('location:form_upload.php');
   }elseif($row['role']=="admin"){
      header('location:index_admin.php?page=list');
   }else{
   }
 
 }else{
 $error='Your Password or Username is not Found';
 }}}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>LOGIN PAGE</title>

</head>
<body>
  <link rel="stylesheet" href="style/style_login.css">
  <script src="style/js/style_login.js"></script>
<div class="login-page" align="center" ><br>
  <div class="form">
    <h4>Masukan NISN dan Password</h4>
      <form class="login-form" method="POST" action="" colspan="2">
        <input type="text" name="nisn" placeholder="Enter NISN"/>
        <input type="password" name="password" placeholder="Enter Password"/>        
        <input class="button" type="submit" name="login" value="Login"/>        
        <p class="message">Not registered? <a href="index.php?page=daftar">Create an account</a></p>
      </form>
<?php if(isset($error)){ echo $error; }?>
</div><br>
</body>
</html>