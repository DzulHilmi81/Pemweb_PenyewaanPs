<!DOCTYPE html>
<html>
    <head><title>Entry Page</title>
        <link rel="stylesheet" href="../css/admin.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />	
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet"	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    </head>
<body bgcolor="#ff407d">
<div class="sidebar">
    <nav>
        <div class="logo-details">
            <img  src="../assets/Logo.png" alt="logo" style="width: 150px;">
        </div>
        <div class="tengah"><h1>Administrator</h1></div>
        <div> 
            <ul class="nav-links"> 
                <li> <a class="btn_login" href="../admin.php">Dashboard</a>  </li>
                <li> <a class="btn_login" href="../categories/categories.php">Categories</a> </li>  
                <li> <a class="btn_login" href="../transactions/transactions.php">Transaction</a> </li> 
                <li> <a class="btn_login" onclick="keluar()">log-out</a> </li>
        </ul>
        </div>           
    </nav>
</div>
<br>
<div class="jumbotron"><h2>Categories</h2></div>
<div class="containter">
<div class="form-login">
    <h3>Input Categories</h3>
    <form action="categories-entry.php" method="post" enctype="multipart/form-data">
        <label for="MerkPS">Merk PS</label> 
        <input class="input" type="text" name="MerkPS" id="MerkPS" placeholder="MerkPS"/>
        <label for="sewa">Sewa</label> 
        <input class="input" type="text" name="sewa" id="sewa" placeholder="Sewa"/>
        <label for="harga">Harga</label> 
        <input class="input" type="text" name="harga" id="harga" placeholder="harga"/>
        <input class="btn_input" onclick="done_categories()" type="submit" name="simpan" value="Input"> 
    <br>
        <div class="card2"> 
    <?php 
        if(isset($_POST['simpan'])) {
            $MerkPS = $_POST['MerkPS'];
            $sewa = $_POST['sewa'];
            $harga = $_POST['harga'];

            echo
            'MerkPS : ' . $MerkPS . 
            '<br> Sewa : ' . $sewa .
            '<br> harga : ' . $harga; 
        }
    ?> 
    </div>
    </form>
</div>
</div>
<script src="../js/javascript.js"></script>
</body>
</html>