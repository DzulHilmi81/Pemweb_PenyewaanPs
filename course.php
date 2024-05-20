<!DOCTYPE html>
<html lang="en">
    <head><title>courses</title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />	
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet"	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
<body bgcolor="#ff407d">
        <div class="container">  
            <header> 
            <nav style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif;">
                <div class="logo">
                <img src="assets/Logo.png" alt="logo" style="width: 150px; padding:10px"/>
                  </div>
                <input type="checkbox" id="click" />
                <label for="click" class="menu-btn">
                  <i class="fas fa-bars"></i>
                </label>
                <ul>
                    <li> <a class= "btn_login" href="index.php">home</a> </li>
                    <li> <a class ="btn_login" href="course.php">courses</a>  </li>
                    <li> <a class="btn_login" href="login.php">login</a> </li>
                  </ul>
              </nav>
            </header>
        <br>
       <!-- membuat jumbotron -->
    <div class="jumbotron">   
        <img src="assets/maenPS.jpg" alt="orang main ps" style="max-width: 400px;" > 
        <div class="tulisankebawah"> 
            <div >><h1 style="font-family: Verdana, Geneva, Tahoma, sans-serif;"><small>  Selamat datang di</small>  <font color="#1a21ed">Rental PS Jelmi</font></h1></div>
            <p style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Lebih Dari 10.000 orang lupa pulang, lupa makan, lupa anak istri dirumah</p>
            <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Menyediakan lebih dari <b>40</b> PS Yang siap dimainkan</p>
        </div>    
    </div> 
    <button onclick="renderCourses()">List Courses</button>
    <ul id="courses-list"></ul>
    <script src="js/javascript.js"></script>
</body>
</html>