<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="image/front-logo.ico">
<title>LOGIN DETAILS</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
* {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-transform: capitalize;
    transition: all .2s ease-out;
    text-decoration: none;
    background-color: #fff;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}
.homebtn{
  background:#04AA6D;
  color:white;
  padding:8px;
  margin:20px;
  border-radius:20px;
  margin-left:1300px;
  cursor:pointer;
  
}
.loginbtn{
  border-radius:12px;
}
.pswc{
  margin-left:900px;
}
.cancelbtn{
  /* margin-left:550px; */
  border-radius:12px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.nlogin{
  border-radius:12px
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="docter_part">
 <div align="center">
 
 <form action="http://localhost/shyam%20hospital/hospital/" method="post">
  <!-- <button type="submit" name="home" class="homebtn">HOME</button> -->
  <input type="submit" name="home" value="HOME" class="homebtn">
 </form>
<h2>Doctor Login Panel</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="loginbtn">LOGIN</button>

</div>

<div id="id01" class="modal"> 
  
  <form class="modal-content animate" action="#" method="post" autocomplete="off">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>


    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pssword" required>
        
      <button type="submit" name="login_btn" class="nlogin" >LOGIN</button>
      <!-- <input type="submit" name="login" value="SUBMIT"> -->
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <!-- <span class="psw">Change <a href="#">password?</a></span> -->
      <!-- <a href="changepass.php" class="pswc">Change Your Password</a> -->
      
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>
</div>

<?php include 'connection.php';
if(isset($_POST['login_btn']))
{
    $username=$_POST['username'];
    $password=$_POST['pssword'];

    $query="SELECT * FROM logintable WHERE username ='$username' &&  pssword='$password' ";

    $data=mysqli_query($conn,$query);

    $total=mysqli_num_rows($data);
    //echo $total;

    if($total == 1)
    {

        $_SESSION['user_name'] = $username;
           ?>
                
                <meta http-equiv = "refresh" content = "1; url=http://localhost/shyam%20hospital/Hospital/action_page.php  "/>


           <?php
    }
    else
    {
      ?>
        
      
      <script>
        alert ("Enter Right Username Or Password For Login");
</script>
        <?php
    }
}



?>


</body>
</html>
