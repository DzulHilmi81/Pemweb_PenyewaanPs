<!DOCTYPE html>
<html>
    <head><title>Register</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    
<body bgcolor="#ff407d">
    <div class="container">    
        <nav> 
         <div><img src="assets/Logo.png" alt="logo" style="width: 150px; padding-top:10px"></div>
         <ul> 
             <li> <a class= "btn_login" href="index.php">home</a> </li>
             <li>  <a class ="btn_login" href="course.php">courses</a>  </li>
             <li> <a class="btn_login" href="login.php">login</a> </li>
             </ul>
         </nav>
    </div>
<br>
<div class="form-login">
<form action="register-proses.php" method="post">
           
                <h3>Register</h3>
                <input class="input" type="email" name="email"
					placeholder="Email" /> 
                    <br>
                    <br>
		    <input class="input" type="text" name="username"
					placeholder="Username"/>
                    <br>
                    <br>
		    <input class="input" type="password" name="password"
				      placeholder="Password" />
                      <br>
                      <br>
                <button type="submit" class="btn_login" name="register" id="register">Register</button>
            
 </form>  
 </div> 
</body>
<footer>
    <h4 align="center">&copy; Dzul Hilmi 2218081</h4>
</footer>
</html>