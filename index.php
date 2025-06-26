<?php
require 'source/source.php';

$query = mysqli_query($conn, "SELECT * FROM test_pho"); //tampilkan dulu semua table databasenya

// saring datanya apabila menekan tombol pencarian
if (isset($_POST["btn-search"])) {
    $search = $_POST["search"];

    // perhatikan $query pastikan sama dengan $query yang pertama nama var nya
    $query = mysqli_query($conn, "SELECT * FROM test_pho WHERE nama LIKE '%$search%' OR 
                                        email = '$search' OR
                                        phone = '$search'
                                        ");

    var_dump($search);
};

// aksi hapus data
if (isset($_GET["hapus_id"])) {
    $hapus_id = $_GET["hapus_id"];
    mysqli_query($conn, "DELETE FROM test_pho
WHERE
    id = $hapus_id");
};


// control variable query yang di eksekusi
$rows = [];
while ($tables = mysqli_fetch_assoc($query)) {
    $rows[] = $tables;
}

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
    <form method="POST" action="">
        <input type="text" name="search" placeholder="Cari nama/email/phone">
        <button type="submit" name="btn-search">Cari</button>
    </form>

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