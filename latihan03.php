<?php  
    $opsi = "p1";
    
    if(isset($_GET["pg"])){
    $opsi = $_GET["pg"];
    }
    
    $judulpage = "";
    $koten = "";

    switch($opsi){
        case"p1";
          $judulpage = "page1";
          $konten =  "<h3>page1</h3><p>Isi dari page satu</p>";
          break;
          case"p2";
          $judulpage = "page2";
          $konten =  "<h3>page2</h3><p>Isi dari page dua</p>";
          break;
          case"p3";
          $judulpage = "page3";
          $konten =  "<h3>page3</h3><p>Isi dari page tiga</p>";
          break;
        case"p4";
          $judulpage = "page4";
          $konten =  "<h3>page4</h3><p>Isi dari page empat</p>";
          break;
        default;
          $judulpage = "page1";
          $konten =  "<h3>page1</h3><p>Isi dari page satu</p>";
          break;
    }
    ?> <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$judulpage;?></title>
    </head>
    <body>
        
    <a hre="latihan03.php?pg=p1">page1</a>  <a hre="latihan03.php?pg=p2">page2</a>  <a hre="latihan03.php?pg=p3">page3</a>  <a hre="latihan03.php?pg=p4">page4</a> 
    <?php
        echo $konten;
        ?>
    </body>
    </html>