<?php
$conn = mysqli_connect("localhost","root","","assignment5");
$id1=$_POST['Id'];
$sql = "DELETE from assignment5 where Id='$id1'";
$result = mysqli_query($conn,$sql);
if($result){
    echo "<script>
    alert('record deleted successfully');
    window.location.href='./view.php';
    </script>";
}

?>