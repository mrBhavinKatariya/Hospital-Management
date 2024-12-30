<!--front icon -->
<link rel="icon" type="image/x-icon" href="image/front-logo.ico">
<style>
    .table{
        color:#16a085;
    }
    .credit {
    padding: 1rem;
    padding-top: 2rem;
    font-size:20px;
    margin-top: 2rem;
    text-align: center;
    /* font-size: 2rem; */
    color: var(--light-color);
    border-top: .1rem solid rgba(0, 0, 0, .1);
}
.record_color{
    color:#444444;

}
.record_color1{
    color:red;

}
</style>

<?php
session_start();

// echo "Welcome :  ".$_SESSION['user_name'];
?>
<title>Trustee Panel</title>
<form action="http://localhost/shyam%20hospital/Hospital/trastee.php?" method="get">
    <a href="logout.php">
    <input  class="logout" type="submit" value="LOGOUT" style="color:white;
      font-size:25px;
      background:#36BB8A;
      margin-bottom:100px;
      margin-left:650px;
      border-radius:20px;
      cursor:pointer;
      padding:10px;
      ">
      </a>
    </div>
    
    
</form>

<?php include 'connection1.php'
 
?>
<table border="2px" align="center" style="background:white;border-radius:10px;width:85%;" >
    <tr>
        <th class="table" style="width:16%;">Patient Name</th>
        <th class="table" style="width:12%">Patient Mobile Number</th>
        <th class="table"style="width:16%" >Patient E-mail ID</th>
        <th class="table" style="width:12%">Appointment Date</th>
        <!-- <th colspan="6" class="table" style="width:12%">Actions</th> -->
    </tr>
    <?php
    // $userprofile=$_SESSION['user_name'];
    // if($userprofile == true)
    //    {
           
    //    }
    //    else
    //    {
        //    ?>
                   
                   <!-- <meta http-equiv = "refresh" content = "1; url=http://localhost/shyam%20hospital/Hospital/hospital/loginforadmin.php  "/> -->
   
   
              <?php
    //    }

    
    
    $query="SELECT * FROM appointment";
    $data=mysqli_query($con,$query);
    $res=mysqli_num_rows($data);

    if($res){
        
        while($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td class="record_color"><?php echo $row['name'];?></td>
                <td class="record_color"><?php echo $row['number'];?></td>
                <td class="record_color"><?php echo $row['email'];?></td>
                <td class="record_color1"><?php echo $row['date'];?></td>
               
               <!-- <td style="border-radius:5px;cursor:pointer;"> <a href="reschedule.php?id=<?php echo $row['id'];?>"><input type="submit" value="Reschedule Appointment"></a></td> -->
               <!-- <td style="border-radius:5px;cursor:pointer;"> <a  onclick="return confirm('You Are Sure To Delete This Appointment ??')"href="app_delete.php?id=<?php echo $row['id'];?>"><input type="submit" value="Delete Appointment"></a></td> -->
               <!-- <td><a href="https://web.whatsapp.com/"><img src="image/whatsapp_logo.jpeg" alt="WP LOGO" style="border-radius:5px;cursor:pointer;width:25px;"></a></td> -->
        </tr>


            </tr>


            <?php
        }
    }
    else
    {
        ?>
        <tr>
            <td colspan="5" align="center" > No Appoinmnent At Time</td>
        </tr>
        <?php
    }
    ?>
</table>
<br>
<br>
<br>
<form action="show_review.php">
    <input type="submit" value="SHOW REVIEW" style="color:white;
      font-size:25px;
      background:#36BB8A;
      margin-bottom:100px;
      margin-left:616px;
      border-radius:20px;
      cursor:pointer;
      padding:10px;
      ">
</form>

<div class="credit">Copyright © 2023 <a href="http://localhost/shyam%20hospital/Hospital/action_page1.php"><span>Shyam Cheritable Trust</span></a>. All Rights Reserved </div>




