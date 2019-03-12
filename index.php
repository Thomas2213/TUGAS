<?php 
require 'koneksi.php';
  $tampil = query ("SELECT * FROM blog");

 ?>
 <!DOCTYPE html>
<html>
<head>

  <title>MY BLOG</title>
</head>

<body>
   
   <link rel="stylesheet" type="text/css" href="style1.css">
</head>
  <header>
    
   
 <div class="jumbotron">
  <h1>HELLO MAMANK PEDIA! ACA ACA NEHI NEHI!</h1>
  

</div>

  

  </header>
  
  <h4> Daftar Menu Di Mamank Pedia!</h4>
  <nav>
    <ul>
      <li><a href="register.php">Tambah Postingan</a></li>
      <li><a href="log.php">Baca Postingan</a></li>
    </ul>
  </nav>
  
  
  <?php if(isset($_GET['status'])): ?>
  <p>
    <?php
      if($_GET['status'] == 'sukses'){
        echo "Pendaftaran  berhasil!";
      } else {
        echo "Pendaftaran gagal!";
      }
    ?>
  </p>
  <?php endif; ?>
  
  
<H1> TIMELINE ARTIKEL</H1>
<div class="row">
        <div class="col-lg-4">
          <h2>UTS MAMANK!</h2>
          <p class="text-danger">KITA BELAJAR UTS MAMANK!</p>
          
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>THOMAS AL KADAFI</h2>
          
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>09031281823033</h2>
          
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
      </body>
</html>