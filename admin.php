<?php
session_start();
if ($_SESSION['username'] == null) {
	header('location:login/login.php');
}?>

<!DOCTYPE html>
<html>
    <head><title>Admin Page</title>
        <link rel="stylesheet" href="css/admin.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />	
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet"	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
<body bgcolor="#ff407d">
    <div class="sidebar">
        <nav>
            <div class="logo-details">
                <img  src="assets/Logo.png" alt="logo" style="width: 150px;">
            </div>
            <div class="tengah"><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;">Administrator</h1></div>
            <div> 
                <ul class="nav-links"> 
                    <li> <a class="btn_login" href="#" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;">Dashboard</a>  </li>
                    <li> <a class="btn_login" href="categories/categories.php" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;">Categories</a> </li>  
                    <li> <a class="btn_login" href="transactions/transactions.php" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;">Transaction</a> </li> 
                    <li> <a class="btn_login" onclick="keluar()" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;">log-out</a> </li>
                </ul>
            </div>           
        </nav>
    </div>
<br>
<div class=jumbotron>
    <h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;">Selamat datang admin</h1>
    <h2 id="text">
				<?php
				// session_start();
				echo $_SESSION['username'];
				?>
			</h2>
			<h3 id="date"></h3>
		</div>

</div>
<div class="containter">
    <center> 
        <img  src="assets/Logo.png" alt="logo" style="width:auto;">
    </center>

</div>

<script src="/js/javascript.js"></script>

</body>
</html>