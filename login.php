<!DOCTYPE html>
<html>
    <head><title>Login</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    
<body bgcolor="#ff407d">
    <div class="container">    
        <nav> 
         <div><img src="assets/Logo.png" alt="logo" style="width: 150px; padding-top:10px"></div>
         <ul> 
             <li> <a class= "btn_login" href="index.php">home</a> </li>
             <li> <a class ="btn_login" href="course.php">courses</a> </li>
             <li> <a class="btn_login" href="login.php">login</a> </li>
         </ul>
        </nav>
    </div>
    <br>
    <form action="login-proses.php" method="post">
        <div class="form-login">
                <h3>Login</h3>
                <input type="text" name="username" placeholder="Username">
                <br>
                <input type="password" name="password" placeholder="Password" />
                <br>
                <button type="submit" class="btn_login" name="login"  
                      id="login"> Login
		   </button>
                <h4>Belum punya akun?</h4>
                <center><a class="btn_login" href="register.php">Register Disini</a></center>
        </div>
    </form>
</body>
<footer>
    <h4 align="center">&copy; Dzul Hilmi 2218081</h4>
</footer>
</html>