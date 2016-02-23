<?
if (mail("beattle-b@yabdex.ru","test subject", "test body","From: hipno@ruelectro.ru"))
echo "Сообщение передано функции mail, проверьте почту в ящике.";
else
echo "Функция mail не работает, свяжитесь с администрацией хостинга.";
?>
