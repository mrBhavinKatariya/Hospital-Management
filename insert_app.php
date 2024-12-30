<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--front icon -->
    <link rel="icon" type="image/x-icon" href="image/front-logo.ico">
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'poppins',sans-serif;
            /* background:#444444; */

        }
        /* .container{
            width:100%;
            height:100vh;
            background:#3c5077;
            display:flex;
            align-items:center;
            justify-content:center;
        } */
        .popup{
            width:400px;
            background:#fff;
            border-radius:6px;
            position:absolute;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            text-align:center;
            padding:0 30px 30px;
            color:white;

        }
        .popup image{
            width:100px;
            margin-top:-50px;
            border-radius:50%;
            box-shadow:0 2px 5px rgba(0,0,0,0.2);

        }
        .greet{
            color:green;
            background-color:white;
        }
        .button{
            color:white;
            background:#16a085;
            border-radius:5px;
        }
        .greet1{
            color:green;
            background:white;

        }
        



    </style>
    <title>Appointment Booked</title>
</head>
<body>
<!-- <button type="submit" class="btn">GO TO HOME</button> -->
<!-- <div class="popup">
    <img src="image/tickmark.jpeg" alt="Done Image" class="image">
    <h2 class="greet">thanks</h2>
    <p class="greet1">helo done</p>
    <button type="button" class="btngoto">Go To Home</button>  </div>-->
    <div class="popup">

    <form action="http://localhost/shyam%20hospital/hospital/" method="post">

        <img src="image/tickmark.jpeg" alt="Done Image" class="image">
        <h2 class="greet">Your Appointment Is Booked We Will Contact Soon</h2>
        <p class="greet1">Thanks!!</p>
        <br>
        <br>
        <input type="submit" Value="Go To Home" class="button" style="cursor:pointer;">
        
    </form>

    </div>



</body>
</html>





<!-- start php for appointmnet booking -->
<?php include 'connection1.php';?>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$num=$_POST['number'];
$email=$_POST['email'];
$date=$_POST['date'];

$query="INSERT INTO appointment (name,number,email,date) VALUES ('$name','$num','$email','$date')";
$data=mysqli_query($con,$query);

if($data) 
{
    ?>
        <script>
            //alert("Appoinment Is Booked");
        </script>
    <?php
}
else
{

    ?>
        <script>
           alert("Appoinment Is Not Booked");
        </script>
    <?php
}




}
?>
<!-- ends php for appointmnet booking -->