<?php include 'connection1.php';
$id=$_GET['id'];
$query="DELETE FROM appointment WHERE id='$id' ";
$data=mysqli_query($con,$query);
if($data)
{

    ?>
    <script>
        alert("Appointment Delete Succesfully.");
        window.open("http://localhost/shyam%20hospital/Hospital/action_page.php" ,"_self");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Not Deleted")''
    </script>
    <?php
}
?>