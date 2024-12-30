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
    <title>Review Submited</title>
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
        <h2 class="greet">Your Review Is Submited We Will Contact Soon</h2>
        <p class="greet1">Thanks!!</p>
        <br>
        <br>
        <input type="Submit" Value="Go To Home" class="button" style="cursor:pointer;">
        
    </form>

    </div>



</body>
</html>


<!-- start php for review  -->
<?php include 'connection3.php'; ?>
<?php
if(isset($_POST['Submit']))
{
$name=$_POST['name'];
$lname=$_POST['lname'];
$email=$_POST['email_id'];
$eview=$_POST['review'];
$ffreview=$_POST['full_review'];

$query="INSERT INTO s_review (name,lname,review,email_id,full_review) VALUES ('$name','$lname','$eview','$email','$ffreview')";

$data=mysqli_query($conn,$query);

if($data)
{
    ?>
    <script>
        // alert("good");
    </script>
    <?php
}
else
{
    ?>
    <script>
       alert("bed");
    </script>
<?php

}

}

?>


<!-- ends php for review -->




