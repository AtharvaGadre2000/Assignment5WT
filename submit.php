
<html>
<body>
<button id="back" class="btn"><a href="index.php">Go back to Main Page</a></button>
<?php
$id=$_POST['Id'];
$name=$_POST['name'];
$email=$_POST['email'];
$ques=$_POST['question'];
$op1=$_POST['op1'];
$op2=$_POST['op2'];
$server="localhost";
$user="root";
$password="";
$database="assignment5";
//createconnection
$connection = new mysqli($server,$user,$password,$database);

if($connection->connect_error){
    die("Connection Failed: " . $connection->connect_error);

}
echo "Connection Successful";

$sql = "INSERT INTO `assignment5` (`Id`,`Name`,`Email`,`Phone`,`Address`,`Query`) VALUES ($id,'$name','$email','$ques','$op1','$op2')";
if($connection->query($sql)===TRUE){
    echo "New record created successfully";

}
else{
    echo "Error: " . $sql . "<br>" . $connection->error;

}


// $sql = "SELECT Admin_ID, Admin_Email, Questionn, Option1, Option2, Option3, Option4 from adminquestion";

// $result = $connection->query($sql);

// if($result->num_rows > 0){
//     echo "<table>";
//     while($row = $result->fetch_assoc()){
//         echo ""
//     }
// }
// $connection->close();
// ?>

</body>
</html>