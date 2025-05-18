<?php
// Получаем данные из POST-запроса
$login = $_POST['login'] ?? '';
$password = $_POST['password'] ?? '';

// Загружаем whitelist из JSON-файла
$whitelistData = file_get_contents('whitelist.json');
$whitelist = json_decode($whitelistData, true);

// Проверяем, есть ли пользователь в whitelist
foreach ($whitelist as $user) {
    if ($user['login'] === $login && $user['password'] === $password) {
        echo "success";
        exit;
    }
}

echo "fail";
