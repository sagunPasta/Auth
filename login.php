<?php
$host = "sqlXXX.freesqldatabase.com"; // адрес сервера БД
$dbname = "your_db_name";
$username = "your_username";
$password = "your_password";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$login = $_POST['login'];
$pass = $_POST['password'];

$query = "SELECT * FROM users WHERE login='$login' AND password='$pass'";
$result = $conn->query($query);

if ($result && $result->num_rows > 0) {
    echo "success";
} else {
    echo "fail";
}

$conn->close();
?>
