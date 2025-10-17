<?php 
session_start(); 

$username_valid = "unnes"; 
$password_valid = "12345"; 

if(!isset($_POST["username"]) || !isset($_POST["password"])) {
    header("Location: index.html");
}

$username = $_POST["username"]; 
$password = $_POST["password"]; 

if ($username == $username_valid && $password == $password_valid) { 
    $_SESSION['login'][] = [ 
        'username' => $username, 
        'login_at' => date('Y-m-d H:i:s') 
    ]; 

    // jika benar 
    echo "Selamat Datang: " . $username . ", anda telah login sebanyak: " . count($_SESSION['login']) . " kali"; 
    echo '<br>'; 
    echo '<a href="logout.php">Logout</a>'; 
    echo '<pre>';
    var_dump($_SESSION['login']); 
} else { 
    // jika salah 
    echo "Username atau password salah!"; 
}
?>
