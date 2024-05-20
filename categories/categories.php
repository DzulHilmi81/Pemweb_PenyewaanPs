<!DOCTYPE html>
<html>
    <head><title>Categories Page</title>
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
            <img  src="../assets/logo.png" alt="logo" style="width: 150px;">
        </div>
        <div class="tengah"><h1 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;">Administrator</h1></div>
        <div> 
            <ul class="nav-links" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;"> 
                <li> <a class="btn_login" href="../admin.php" >Dashboard</a>  </li>
                <li> <a class="btn_login" href="../categories/categories.php">Categories</a> </li>  
                <li> <a class="btn_login" href="../transactions/transactions.php">Transaction</a> </li> 
                <li> <a class="btn_login" onclick="keluar()">log-out</a> </li>
        </ul>
        </div>           
    </nav>
</div>
<br>
<div class="jumbotron"><h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;">Categories</h2></div>
<div class="containter"> 
    <a class="btn_tambah" href="../categories/categories-entry.php" style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif, Helvetica Neue, Helvetica, sans-serif;">Tambah Data</a></div>

<div class="jumbotron">
<table class="table-data">
        <tr>
          <th>Categories</th>
          <th scope="col" style="width: 20%">Sewa</th>
          <th scope="col" style="width: 50%">Harga</th>
          <th scope="col" style="width: 30%">Action</th>
        </tr>
        <tbody>
          <tr>
            <td>PS3</td>
            <td>1 hari</td>
            <td>45000</td>
            <td>
              <a href="/categories/categories-entry.html">Edit</a> |
              <a href="">Hapus</a>
            </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>PS4</td>
            <td>1 Hari</td>
            <td>70000</td>
            <td>
              <a href="/categories/categories-entry.html">Edit</a> |
              <a href="">Hapus</a>
            </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>PS5</td>
            <td>1 Hari</td>
            <td>100000</td>
            <td>
              <a href="/categories/categories-entry.html">Edit</a> |
              <a href="">Hapus</a>
            </td>
          </tr>
        </tbody>
        <tbody>
          <tr>
            <td>ps5</td>
            <td>2 Hari</td>
            <td>230000</td>
            <td>
              <a href="/categories/categories-entry.html">Edit</a> |
              <a href="">Hapus</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <script src="/js/javascript.js"></script>
</body>
</html>