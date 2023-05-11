<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $message = $data['message'];
    // Тут можно сохранить сообщение в базу данных или отправить его другим пользователям в реальном времени, используя WebSocket, например.
    // Затем можно отправить ответ клиенту.
    echo json_encode(array("status" => "success", "message" => $message));
}
?>
