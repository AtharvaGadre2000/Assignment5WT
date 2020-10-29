<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question Collection "Drive Safe"</title>
    <link rel="stylesheet" href="next.css">
</head>
<body>
<div class="container1">
      <section id="home"> <nav class="navbar">
            <ul>
                <li><a href="index.php"></a>Home</li>
                <li><a href="update.php">UPDATE</a></li>
                <li><a href="view.php">VIEW</a></li>
            </ul>
        </nav> 
        <h2>Welcome to Home Page</h2>
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
