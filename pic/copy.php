<?php 
$cur_dir = getcwd();
echo $cur_dir;
copy('http://www.zip-2002.ru/bmp/23217.jpg', $cur_dir.'/23217.jpg');
echo "/n /r".'got that place';