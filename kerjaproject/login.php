<<?php
include("db_conect.php");

if(isset($_POST['Username']) && isset($_POST['Password'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Prepared statement untuk mencegah serangan SQL Injection
    $sql = "SELECT * FROM login WHERE Username = ? AND Password = ?";
    $stmt = $db->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header('Location: admin.php?status=sukses');
            exit();
        } else {
            header('Location: login.php?status=gagal');
            exit();
        }
        
        $stmt->close();
    } else {
        // Handle kesalahan statement SQL
        echo "Error in prepared statement: " . $db->error;
    }
} else {
    // Handle jika data dari form tidak terkirim dengan benar
    echo "Username atau password tidak tersedia.";
}

$db->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login Admin</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="Username" placeholder="Username" name="Username" required>
            </div>
            <div class="input-group">
                <input type="Password" placeholder="Password" name="Password" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Login</button>
            </div>
        </form>
    </div>
</body>
</html>