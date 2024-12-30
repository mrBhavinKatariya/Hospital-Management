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
<title>Review By Patient</title>
<form action="http://localhost/shyam%20hospital/Hospital/action_page1.php?" method="get">
    <a href="logout.php">
    <input  class="logout" type="submit" value="BACK TO PANEL" style="color:white;
      font-size:25px;
      background:#36BB8A;
      margin-bottom:100px;
      margin-left:650px;
      border-radius:20px;
      cursor:pointer;
      padding:10px;
      ">
      </a>

<?php include 'connection3.php' ?>

<table border="2px" align="center" style="background:white;border-radius:10px;width:85%;" >
    <tr>
        <th class="table" style="width:16%;">NAME</th>
        <th class="table" style="width:12%">SURNAME</th>
        <th class="table"style="width:16%" >EMAIL ID</th>
        <th class="table" style="width:12%">REVIEW</th>
        <th class="table" style="width:12%">FULL REVIEW</th>
        <!-- <th colspan="6" class="table" style="width:12%">Actions</th> -->
    </tr>

<?php

$query="SELECT * FROM s_review";
$data=mysqli_query($conn,$query);
$res=mysqli_num_rows($data);

    if($res){
        
        while($row=mysqli_fetch_array($data)){
            ?>
            <tr>
                <td class="record_color"><?php echo $row['name'];?></td>
                <td class="record_color"><?php echo $row['lname'];?></td>
                <td class="record_color"><?php echo $row['email_id'];?></td>
                <td class="record_color1"><?php echo $row['review'];?></td>
                <td class="record_color1"><?php echo $row['full_review'];?></td>

               
               </tr>


            </tr>


            <?php
        }
    }
    else
    {
        ?>
        <tr>
            <td colspan="5" align="center" > No Review At Time</td>
        </tr>
        <?php
    }
    ?>







    
</table>
