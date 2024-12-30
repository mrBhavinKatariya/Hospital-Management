<?php
session_start();
//echo "Welcome ".$_SESSION['user_name'];
?>
<!--front icon -->
<link rel="icon" type="image/x-icon" href="image/front-logo.ico">
<link rel="stylesheet" href="style.css">
<title>Reschedule</title>
<?php include 'connection1.php';

$userprofile=$_SESSION['user_name'];
    if($userprofile == true)
       {
           
       }
       else
       {
           ?>
                   
                   <meta http-equiv = "refresh" content = "1; url=http://localhost/shyam%20hospital/Hospital/hospital/loginforadmin.php  "/>
   
   
              <?php
       }


$id=$_GET['id'];
$select = "SELECT * FROM appointment WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>
<div style="margin-top:150px;margin-left:600px;">
<form action="#" method="post" autocomplete="off" >
        <?php
            if(isset($message)) {
                foreach($message as $message) {
                echo'<p class ="message">'.$message.'</p>';
            }
            }
        ?>
      
            <h3 style="color:#16a085;font-size:50px;">Reschedule appointment</h3>
            <input type="text"name="name" placeholder="Your Name" class="box" value="<?php echo $row['name'];?>" style="font-size:25px;border-radius:5px;" >
            <br>
            <br>
            <br>
            <input type="number"name="number" placeholder="Your Number" class="box" value="<?php echo $row['number'];?>" style="font-size:25px;border-radius:5px;" >
            <br>
            <br>
            <br>
            <input type="email"name="email" placeholder="Your E-mail" class="box" value="<?php echo $row['email'];?>" style="font-size:25px;border-radius:5px;" >
            <br>
            <br>
            <br>
            <input type="date"name="date" class="box"  value="<?php echo $row['date'];?>" style="font-size:25px;border-radius:5px;">
            <br>
            <br>
            <br>
            <input type="submit" name="reschedule_btn" value="RESCHEDULE NOW" class="btn" style="background:#16a085;height:35px;wedth:100px;font-size:12px;border:3px;border-radius:5px;cursor:pointer;">
            
            <!-- <a href="http://localhost/shyam%20hospital/Hospital/action_page.php">GO TO BACK</a> -->

        </form>
        <a href="action_page.php"><input type="submit" name="" value="BACK TO HOME" style="background:#16a085;height:35px;wedth:100px;font-size:12px;border:3px;border-radius:5px;cursor:pointer;"></a>
        
        </div>

<!-- start php for appointmnet booking -->

<?php
if(isset($_POST['reschedule_btn']))
{
$name=$_POST['name'];
$num=$_POST['number'];
$email=$_POST['email'];
$date=$_POST['date'];

$update1="UPDATE appointment SET name='$name',number='$num',email='$email',date='$date' WHERE id='$id' ";
$data=mysqli_query($con,$update1);

if($data) 
{
    ?>
        <script>
            alert("Appoinment Is Reschedule");
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