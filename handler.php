<?php
$user_name = htmlspecialchars($_POST['username'] ?? 'Не указано');
$user_phone = htmlspecialchars($_POST['userphone'] ?? 'Не указано');
$form_info = $_POST['form_subject'] ?? $_POST['form_type'] ?? 'Заявка с сайта';


$form_info = htmlspecialchars($form_info);
$token = "";
$chat_id = "1485378850";
$message = "<b>Новая заявка</b>\n";
$message .= "Откуда: " . $form_info . "\n";
$message .= "Клиент: " . $user_name . "\n";
$message .= "Телефон: " . $user_phone;
$url = "https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text=" . urlencode($message);

$sendToTelegram = @file_get_contents($url);

if ($sendToTelegram) {
    echo "Некит"; 
} else {
    echo "Error";
}
?>
