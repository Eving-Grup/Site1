<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Проверяем, что все поля заполнены
    if (empty($name) || empty($email) || empty($message)) {
        echo "Completați câmpul dat";
    } else {
        // Отправляем письмо
        $to = "eving444@gmail.com"; // Ваш email
        $subject = "Новое сообщение от $name";
        $body = "Имя: $name\nEmail: $email\nСообщение:\n$message";
        $headers = "From: $email"; // Отправитель - это email пользователя

        // Функция для отправки email
        if (mail($to, $subject, $body, $headers)) {
            echo "Mesajul este transmis cu succes, în timp apropiat noi vă contactăm";
        } else {
            echo "eroarea la transmiterea mesajului";
        }
    }
} else {
    echo "codul incorect";
}
?>