
<!DOCTYPE html>
<html>
    <head>
        <title> Display data</title>
        <style>
            .container
            {
                width: 100%;
                height: 100%;
                overflow-y: scroll;
                scroll-behavior: smooth;
                scroll-snap-type: y mandatory;
            }
            table{
    border-collapse: collapse;
    width: 50%;
    margin: 50px auto;
    background-color: navy;
 
}
table, th, td {
    border: 2px solid black;
}
th{
    font-size: 25px;
    font-weight: 700;
    font-family: Arial, Helvetica, sans-serif;
    color: #fec107;
}
td{
    font-size: 20px;
    color: #fec107;
    font-weight: 400;
    font-family: Arial, Helvetica, sans-serif;
}

.container1{
    width: 100%;
    height: 100%;
    overflow-y: scroll;
    scroll-behavior: smooth;
    scroll-snap-type: y mandatory;
}

.navbar{
    position: fixed;
    top: 0;
    z-index: 1;
    display: flex;
    width: 100%;
    height: 60px;
    background: rgba(0, 0, 0, 0.7);
}

.navbar ul{
    display: flex;
    list-style: none;
    width: 100%;
    justify-content: center;
    color: #f4f4f4;
}

.navbar ul li{
    margin: 0 1rem;
    padding: 1rem;
    color: #f4f4f4;
}

.navbar ul li a{
    text-decoration: none;
    text-transform: uppercase;
    color: #f4f4f4;

}


.navbar ul li a:hover{
    color: white;
}

section{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 100%;
    height: 100vh;
    scroll-snap-align: center;
}
     </style>
</head>
    <body>
    <div class="container">
                  <nav class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="update.php">Update</a></li>
                    <li><a href="#display">View</a></li>
                    </ul>  
                </nav> 
        </div>
    <section id="display">
            <h2>Welcome to the result page</h2>
   
        <h1>Question Till Date</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email Id</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Your Query</th>
                <th>For Deleting Click</th>
                <th>For Updating Click</th>
                
            </tr>

            <?php

            $connection = mysqli_connect("localhost","root","","assignment5");
            if($connection->connect_error){
                die("Connection failed:". $connection->connect_error);
            }

            $sql = "SELECT Id, Name, Email, Phone, Address, Query FROM assignment5";
            $result = $connection->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr><td>  " . $row["Id"]. "</td><td>  " . $row["Name"]. "</td><td> " . $row["Email"]. "</td><td> " . $row["Phone"]. "</td><td>  " . $row["Address"]. "</td><td>" .$row["Query"]. "</td><td><a href='delete1.php'>DELETE  ". "</td><td><a href='update.php'>Edit  "."</td></tr>";
            }
                echo "</table>";
            }
            else{
                echo "0 results";
            }

            $connection->close();
           
            ?>
        </table>
    
</section>
        </body>
</html>