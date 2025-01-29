<?php
    $nama = "Ahmad Fata Dani Adnan";
    $npm = "5230411042";
    $dataString = array("Jeruk", "Pisang", "Melon");
    $dataInteger = array(15, 5, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            display: flex;
            flex-direction: column;
        }
        table {
            width: 100%;
            border: 1px solid black;
            border-collapse: collapse;
            
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buatlah halaman untuk menampilkan data string, integer dalam bentuk array</h1>
        <h4>Nama    : <?php echo $nama?></h4>
        <h4>NPM     : <?php echo $npm?></h4>
        <table border="1">
            <tr>
                <td style="font-weight: bold">Nama Buah</td>
                <td style="font-weight: bold">Jumlah Buah</td>
            </tr>
            <tr>
                <td><?php echo $dataString[0]; ?></td>
                <td><?php echo $dataInteger[0]; ?></td>
            </tr>
            <tr>
                <td><?php echo $dataString[1]; ?></td>
                <td><?php echo $dataInteger[1]; ?></td>
            </tr>
            <tr>
                <td><?php echo $dataString[2]; ?></td>
                <td><?php echo $dataInteger[2]; ?></td>
            </tr>
    </div>
</body>
</html>