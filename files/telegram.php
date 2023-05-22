/* https://api.telegram.org/botxxxxxxxxxxXXxxxxxxxXXXX/getUpdates,
где, хоххххххх00ххххххххххх - токен вашего бота, полученный ранее */

$name = $_POST [' user _name '];
$phone = $_POST[' user_phone '];
$city = $_POST[' user_city '];
$office = $_POST[' user_office '];
$wishes = $_POST[' user_wishes '];
$promo = $_POST[' user_promo '];

$token = "5674676719:AAEKyLdE2JadnPQH5lyamYgo46OhJWOjR_4";
$Schat id = "-968208666";
$arr = array(
 'Имя пользователя: [' => $name,
 'Телефон: ' => $phone,
 'Город: ' => $city,
 'Отделение почты: ' => $office,
 'Пожелания: ' => $wishes,
 'Промокоды: ' => $promo,
);

foreach ($arr as $key =› $value) { $txt .=
"‹b>" $key. "‹/b> " $value. "%OA";
];

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=htmI&text=($txt]", "r");

if ($sendToTelegram) {
echo '<h1 class="success"›Спасибо за отправку вашего сообщения!</h1>';
return true;
} else {
header ('Location: thank-you. html');
}

server {
listen 80;
server_name localhost;
location / {
root html;
index index.html index.htm;
}
error_page 405 =200 $uri;
}
?>