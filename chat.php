<?
$text = urldecode($_get['text']);/// загружает инфо из программы
file_put_contents('chat.txt', $text, FILE_APPEND); ///ЗАГРУЖАЕТ В ФАЙЛ ИЗ ПРОГРАММЫ.
?>

