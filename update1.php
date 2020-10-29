<?php
$connection = mysqli_connect("localhost","root","","assignment5");
$name = $_POST['name']
$Aemail = $_POST['email'];
$Ques = $_POST['question'];
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op3 = $_POST['op3'];
$op4 = $_POST['op4'];
$uid = $_POST['Id'];
$sql = "UPDATE assignment5 set Name='$name',Email='$Aemail',Phone = '$Ques',Address = '$op1',Query = '$op2' WHERE Admin_ID = '$uid' ";
$result = mysqli_query($connection,$sql);
// if($result){
//     echo "<script>
//     alert('record updated successfully');
//     window.location.href='./view.php';
//     </script>";
// }
    


?>
