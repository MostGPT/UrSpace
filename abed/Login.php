<!DOCTYPE html>
<html>
    <head>
        <title>StalkBook</title>
        <link rel='stylesheet' type='text/css' media='screen' href='CSS\login.css'>
        <script src='main.js'></script>
    </head>
    <body class="inbdy">
        <div class="in-box">
            <!-- urvoid -->
            <!-- urspace -->
            <!-- gnova -->
            <!-- Gthoroty -->
            <!-- Gcouncil -->
            <!-- goroty -->
            <!-- gpace -->
            <!-- gasus -->
            <!-- gpack -->
            <!-- boldvoid -->
            <!-- voidspace -->
            <!-- joypace -->
            <!-- area -->
            <h1 class = "he">Urspace</h1>
            <h3 class="hi">Login</h2>
            <form method="post">
                <label class="lalog" for="username">Username:</label>
                    <input class="inlog" type="text" name="username" placeholder="  Enter username" required>
                <label  class="lalog" for="password">Password:</label>
                    <input class="inlog" type="password" name="password" placeholder="  Enter password" required>
                <input type="submit" value="Login">
                <span class="linkup">You dont have an account??</span>
                <a class="linkup1"href="Signup.php">Sign up NOW!!!</a>
            </form>
        </div>
    </body>
</html>

<?php
    //require_once 'connection.php';
    if(isset($_POST['username']) && isset($_POST['password'])) 
    {
        $username=$_POST['username']; 
        $pass=$_POST['password'];
        //$query=" SELECT * FROM users WHERE username='$username' AND password='$pass'";
        //$res=mysqli_query($con,$query);
       // $nbrows=mysqli_num_rows($res);
           // if($nbrows==0)
                //header("location:Login.php");
           // else
            //{
                //$row=mysqli_fetch_assoc($res);
                session_start();
                $_SESSION["online"]=1;
                $_SESSION['username']=$username;
                $_SESSION['user_id']=$row['id'];
                header("location:Main.php");
           // }
    }

?>
