<?php

$messages = array(
    1 => array(
        array(
            'author' => 'Энакин',
            'text' => 'Привет!',
            'time' => '12:30',
            'avatar' => '../assets/anakin.jpg',
        ),
        array(
            'author' => 'Оби-Ван',
            'text' => 'Привет! Как дела?',
            'time' => '12:32',
            'avatar' => '../assets/obi.jpg',
        ),
        array(
            'author' => 'Энакин',
            'text' => 'Отлично, спасибо! А у тебя?',
            'time' => '12:34',
            'avatar' => '../assets/anakin.jpg',
        ),
    ),
    2 => array(
        array(
            'author' => 'Йода',
            'text' => 'Силой ты пользуешься хорошо, молодой падаван!',
            'time' => '10:12',
            'avatar' => '../assets/yoda.jpg',
        ),
        array(
            'author' => 'Люк',
            'text' => 'Спасибо, мастер! Я стараюсь!',
            'time' => '10:14',
            'avatar' => '../assets/luke.jpg',
        ),
        array(
            'author' => 'Йода',
            'text' => 'Успешно пройдёшь испытания, если не забудешь о силе своей души!',
            'time' => '10:16',
            'avatar' => '../assets/yoda.jpg',
        ),
    ),
    3 => array(
        array(
            'author' => 'Дарт Вейдер',
            'text' => 'Я твой отец!',
            'time' => '14:20',
            'avatar' => '../assets/dart.jpg',
        ),
        array(
            'author' => 'Люк',
            'text' => 'Нееееет!!! Это невозможно!',
            'time' => '14:22',
            'avatar' => '../assets/luke.jpg',
        ),
        array(
            'author' => 'Дарт Вейдер',
            'text' => 'Ищи в себе правду, Люк! Ты знаешь, что это правда!',
            'time' => '14:24',
            'avatar' => '../assets/dart.jpg',
        ),
    ),
);

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $chatId = $_GET['chatId'];
    $messagesForChat = isset($messages[$chatId]) ? $messages[$chatId] : array();
    echo json_encode($messagesForChat);
}

?>
