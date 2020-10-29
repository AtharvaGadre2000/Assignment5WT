<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="next.css">
     </head>
     <body>
     <div class="container">
                  <nav class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#update">Update</a></li>
                    <li><a href="view.php">View</a></li>
                    </ul>  
                </nav>  
    </div>
         <section>
         
         <h2>Update the Data by Entering the ID </h2>

<form id="myform" action="submit.php" method="POST">
       <div class="wrapper">
           <div class="title">
              Problems 
           </div>
           <div class="form">
               <div class="inputfield">
                   <label> Id</label>
                   <input type="text" class="input" name="Id">
               </div>
               <div class="inputfield">
                   <label> Full Name </label>
                   <input type="text" class="input" name="name">
               </div>
               <div class="inputfield">
                   <label> Email</label>
                   <input type="email" class="input" name="email">
               </div>
               <div class="inputfield">
                   <label> Phone Number </label>
                   <input type="text" class="input" name="question">
               </div>

               <div class="inputfield">
                   <label> Address </label>
                   <input type="text" class="input" name="op1">
               </div>
               <div class="inputfield">
                   <label> Query </label>
                   <input type="text" class="input" name="op2">
               </div>
               
               
               <div class="inputfield">
               <input type="submit" class="input" name="Submit" value="Submit">
               
               </div>
   
           </div>
           
       </div>
   </form>
         </section>
</body>
</html>

<?php

$connection = mysqli_connect("localhost","root","","assignment5");
// $db = mysqli_select_db($connection,'collectingq');

if(isset($_POST['update']))
{
    echo $_POST['email'];
    $id = $_POST['Id'];

    $query = "UPDATE `assignment5` SET Name= '$_POST[name]',Email='$_POST[email]',Phone='$_POST[question]',Address='$_POST[op1]',Query='$_POST[op2]'  where Id='$_POST[Id]'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type="text/javascript">alert("Data Updated") </script>';

    }
    else{
        echo '<script type="text/javascript">alert("Data Not Updated") </script>';
    }
}

?>