<?php
require 'source/source.php';
// harus sama yang di aa href
$id = $_GET["ideh"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];



    $qupdate = mysqli_query($conn, "UPDATE test_pho
                                SET
                                nama = '$nama',
                                email = '$email',
                                phone = '$phone'
                                WHERE
                                   id =  $id ");
}
var_dump($id);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Ubah Data</title>
    <link rel="stylesheet" href="css/style-ubah.css">
</head>

<body>
    <h2>Form Ubah Data</h2>
    <form action="#" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <button type="submit">Ubahanjing</button>
    </form>

    <a href="index.php" style="display: inline-block; padding: 8px 16px; background: #3498db; color: #fff; text-decoration: none; border-radius: 4px; margin-top: 20px;">Home</a>
</body>

</html>