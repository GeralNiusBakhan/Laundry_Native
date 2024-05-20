<?php
include 'db.php';

// Fungsi untuk menambahkan pengguna baru
function addUser($username, $password) {
    global $conn;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
    if (mysqli_query($conn, $query)) {
        echo "Pengguna berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

// Tambahkan pengguna baru
addUser('geral', 'admin123'); // Ganti dengan username dan password yang diinginkan
?>
