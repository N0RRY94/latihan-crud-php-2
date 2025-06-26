<?php
require 'source/source.php';
if (isset($_GET["hapus_id"])) {
    $hapus_id = $_GET["hapus_id"];
    mysqli_query($conn, "DELETE FROM test_pho
WHERE
    id = $hapus_id -- Bagian ini ADALAH KEHARUSAN MUTLAK!");
};


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Phone</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) : ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["nama"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["phone"] ?></td>
                    <td><a href="ubah.php?ideh=<?php echo $row["id"] ?>">Ubah</a>
                        <a href="index.php?hapus_id= <?php echo $row["id"] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <a href="tambah.php">Tambah Data</a>
</body>

</html>