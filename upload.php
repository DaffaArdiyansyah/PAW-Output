<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>

    <style>
    .form{
        Margin-top: 5rem;
        margin-left: 7rem;
    }
    </style>
</head>
<body>
<form action="tampilkan.php" method="POST" enctype="multipart/form-data" >
    <div class= "form">
        Nama: <input type="text" name="nama" ><br><br>
        Upload Foto: <input type="file" name="foto" ><br><br>
        <button type="submit"> Kirim </button>
    </div>
</form>
</body>
</html>