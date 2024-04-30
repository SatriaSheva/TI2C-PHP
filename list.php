<?php
include 'db.php';

$query = "SELECT * FROM register";
$result = mysqli_query($db, $query);

if (!$result) {
    die("Query error: " . mysqli_error($db));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Mahasiswa</title>
</head>
<body> <title>List Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
        .back-btn {
            text-align: center;
            margin-top: 20px;
        }
        .back-btn a {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
        }
        .back-btn a:hover {
            background-color: #45a049;
        }
    </style>
    <h2>List Data Mahasiswa</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Tempat Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Nama'] . "</td>";
            echo "<td>" . $row['Nim'] . "</td>";
            echo "<td>" . $row['Alamat'] . "</td>";
            echo "<td>" . $row['Ttl'] . "</td>";
            echo "<td>" . $row['Jenis_kelamin'] . "</td>";
            echo "<td>" . $row['Usia'] . "</td>";   
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
<div class="back-btn">
        <a href="login.php">Kembali ke Beranda</a>
    </div>
<?php
mysqli_close($db);
?>
