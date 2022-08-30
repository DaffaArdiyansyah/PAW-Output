<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Fungsi Nya Dengan 3 Parameter: nama,umur,asal
    function great($nama,$umur,$asal){
        echo("<br>Halo!,Selamat Datang ".$nama.
        "<br> Dengan umur ".$umur." Tahun".
        "<br> Asal kota ".$asal."<br>");
    }
    
    // memanggil 3 kali fungsi
    great("Daffa",19,"Bangkalan");
    great("Yanti",21,"aceh");
    great("Jono",18,"Surabaya");
    ?>
</body>
</html>