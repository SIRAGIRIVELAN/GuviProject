<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Register Page</title>   
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="App.js"></script>
    </head>
   <body>  
        <div>
        <?php
        if (isset($_POST['create']))
        $firstname =$_POST['firstname'];
        $email =$_POST['email'];
        $Password =$_POST['Password'];
        $sql= "INSERT INTO user (firstname,email,Password) VALUES(?,?,?)";
        $stmtinsert =$db->prepare($sql);
       $result =$stmtinsert->execute([$firstname,$email,$Password]);    
        ?>
      </div>
      <div class="main">
        <h1>
            Registration
        </h1>
        <form action="index.php" method="post">
    <div class="register">  
        <div class="row">
            <div class="col-sm-3"> 
                <hr class="mb-3" >   
        <label for="firstname"><span>First Name</span></label>
        <input class="form-control" type="text" name="firstname" placeholder="First Name" required>               
        <label for="email"><span>E-mail</span></label>
        <input class="form-control" type="email" name="email" placeholder="Ram@gmail.com" required>
        <label for="Password"><span>Password</span></label>
        <input class="form-control" type="Password" name="Password" placeholder="*********" required>
        <hr class="mb-3" > 
        <input class="btn btn-primary" type="submit" name="create" value="Sign Up" onclick="SignUp()"> 
        </div>
        </div>
    </div>
    </form>
    </div>
   </body> 
</html>