<?php
// Получаем данные из запроса
$username = $_POST['username'];
$password = $_POST['password'];

// Здесь должна быть проверка учетных данных в базе данных,
// но для примера мы будем использовать заглушку
if ($username == 'admin' && $password == 'password') {
    // Если учетные данные верны, отправляем подтверждение в формате JSON
    $response = array('success' => true);
    echo json_encode($response);
} else {
    // Если учетные данные неправильные, отправляем ошибку в формате JSON
    $response = array('error' => 'Неправильное имя пользователя или пароль.');
    echo json_encode($response);
}
?>
