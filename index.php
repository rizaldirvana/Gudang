<?php
$db = new SQLite3($_SERVER['DOCUMENT_ROOT']."/gudang.db");

function getData($query){
    global $db;

    $result = $db->query($query);
    $rows = [];
    while($row = $result->fetchArray()){
        $rows[] = $row;
    }

    return $rows;
}

$data = getData("SELECT * FROM 'BARANG'");
// var_dump($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengenalan Gitpod</title>
</head>
<body>
    <h1>Hello World!</h1>

    <table border=1>
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>QTY</th>
        </tr>
        <?php foreach ($data as $row) : ?>
        <tr>
            <td><?= $row['ID_BARANG'] ?></td>
            <td><?= $row['NAMA_BARANG'] ?></td>
            <td><?= $row['QTY'] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>