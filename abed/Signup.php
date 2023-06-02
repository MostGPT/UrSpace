
<html>
    <head>
        <title>StalkBook</title>
        <link rel='stylesheet' type='text/css' media='screen' href='CSS\log-sign in.css'>
        <script src='main.js'></script>
    </head>
    <body class="inbdy">
        <div class="in-box">
        <h1>UrSpace</h1>
        <h2 class="hi">Sign up</h2>

            <form method="post">
            <div class="fstform">
                <label for="username">Username</label><br>
                    <input type="text" name="username" placeholder="   Enter username" required><br>
                <label for="password">Password</label><br>
                    <input type="password" name="password" placeholder="    Enter password" required><br>
                <label for="Date">Birthdate</label><br>
                    <input type="Date" name="Birthdate"required>
            </div>
            <div class="skendform">
                <label for="Phone">Phone Number</label><br>
                    <input type="tel" name="Phone" placeholder="   961-71****** " pattern="[0-9]{3}-[0-9]{8}" required><br>
                <label for="Email">Email</label><br>
                    <input type="email" name="Email" placeholder="      Enter Email" required><br>
                <label for="Name">Name</label><br>
                    <input type="text" name="Name" placeholder="      Enter you name" required><br>
            <input type="submit" value="Sign UP">
                
            </div>
            </form>
        </div>
    </body>
</html>

<?php
        //require_once 'connection.php';
        if(isset($_POST['username']) && $_POST['username']!="" && isset($_POST['password']) && $_POST['password']!="") 
        {
            $username=$_POST['username']; 
            $pass=$_POST['password'];
            // $query=" SELECT * FROM users where username= '$user'";
            // $res= mysqli_query($con,$query);
            // $nbrows=mysqli_num_rows($res);
            // if($nbrows==1)
            //     header("location:Signup.php");
            // else 
            // {
            //     $query2=" INSERT INTO `users`(`username`, `password`, `role_id`) VALUES ('$user','$pass','2') ";
            //     $res2=mysqli_query($con,$query2);
            //     if($res2){
            //     $query3=" SELECT * FROM users WHERE username='$user' AND password='$pass'";
            //     $res3=mysqli_query($con,$query3);
            //     $row=mysqli_fetch_assoc($res3);
                session_start();
                $_SESSION["online"]=1;
                $_SESSION['username']=$username;
                $_SESSION['user_id']=$row['id'];
                    header("location:Main.php");
                }
                // else
                //     header("location:Signup.php");
            // }
        // }
    ?>