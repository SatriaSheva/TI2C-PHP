<?php
include 'db.php';

// Cek apakah data di submit melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai dari formulir
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $nim = filter_input(INPUT_POST, 'nim', FILTER_SANITIZE_NUMBER_INT);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $ttl = filter_input(INPUT_POST, 'ttl', FILTER_SANITIZE_STRING);
    $jenis_kelamin = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);
    $usia = filter_input(INPUT_POST, 'usia', FILTER_SANITIZE_NUMBER_INT);

    // Siapkan query untuk memasukkan data ke database
    $query = "INSERT INTO register (nama, nim, alamat, ttl, jenis_kelamin, usia)
                VALUES (?, ?, ?, ?, ?, ?)";

    // Siapkan statement
    $stmt = mysqli_prepare($db, $query);

    // Bind parameter ke statement
    mysqli_stmt_bind_param($stmt, "ssssss", $nama, $nim, $alamat, $ttl, $jenis_kelamin, $usia);

    // Jalankan query
    if (mysqli_stmt_execute($stmt)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }

    // Tutup statement
    mysqli_stmt_close($stmt);
}
header("Location: list.php");
mysqli_close($db);
?>
