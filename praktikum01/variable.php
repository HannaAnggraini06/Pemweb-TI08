<?php
    //echo "Hello World";

    //tanda $ menunjukkan bahwa itu adalah variable pada php

    //membuat variable
    $nama = "Hanna Anggraini";
    $jurusan = "Teknik Informatika";
    $semester = 2;

    // echo untuk menampilkan output
    echo "Nama saya adalah : " . $nama;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh</title>
</head>
<body>
    <h2><?php echo $nama; ?></h2>
    <p>
        Saya kuliah di jurusan <?= $jurusan; ?>
    </p>
</body>
</html>