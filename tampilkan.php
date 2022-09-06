<?php
$nama = $_POST['nama'];

$namaFoto = $_FILES['foto']['name'];
$errorFoto = $_FILES["foto"]['error'];
$tmpName = $_FILES["foto"]['tmp_name'];

if($errorFoto == 0){
    move_uploaded_file($tmpName,'img/gambar.jpg');}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan Foto</title>
    <style>
        li {list-style-type:none;}
        .nama {margin-left: 20px;}
    </style>
</head>
<body>
    <ul>
        <li><img src="img/gambar.jpg" alt='' width='120px'></li>
        <li class="nama"><?php echo "Nama: ".$nama; ?></li>
    </ul>    
</body>
</html>