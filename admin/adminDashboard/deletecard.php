<?php 
 $conn = mysqli_connect("localhost","root","","epaktourism") or die("Connection Failed:" .mysqli_connect_error());
$userid =$_GET['id'];
$sqldelete ="DELETE FROM touristguider Where touristguider_id  ={$userid}" ;

if(mysqli_query($conn,$sqldelete )){
    header("Location: http://localhost/epaktourisum/admin/adminDashboard/TouristGuiderProfile.php");
}else {
echo '<div class="alert alert-info mx-5" role="alert">
Something Went Wrong!
</div>';
}
mysqli_close($conn)
?>