<?php
/**
 * User: Hipno
 * Date: 06.07.15
 * Time: 18:06
 * Project: DBF
 */




function remoteFileExists($url) {
    $curl = curl_init($url);

    //don't fetch the actual page, you only want to check the connection is ok
    curl_setopt($curl, CURLOPT_NOBODY, true);

    //do request
    $result = curl_exec($curl);

    $ret = false;

    //if request did not fail
    if ($result !== false) {
        //if request was ok, check response code
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if ($statusCode == 200) {
            $ret = true;
        }
    }

    curl_close($curl);

    return $ret;
}

$exists = remoteFileExists('http://www.zip-2002.ru/foto_pg/739.jpg');
if ($exists) {
    echo 'file exists';
} else {
    echo 'file does not exist';
}

// echo '<pre>'.print_r(get_headers('http://www.zip-2002.ru/foto_pg/839.jpg'),true).'</pre>';
/*if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/upload/cat/839.jpg')){
    echo "Файл не существует \n";
    $url_to_cat = 'http://www.zip-2002.ru/foto_pg/839.jpg';
    $newfile = $_SERVER['DOCUMENT_ROOT'].'/upload/cat/839.jpg';
    if (false === file_get_contents("http://www.zip-2002.ru/foto_pg/839.jpg",0,null,0,1)) {
        echo "Удаленного Файла не существует \n";
        $image = $default_image;
    }
    if (!copy($url_to_cat, $newfile)) {
        echo 'Копирование не удалось';
        $photo_cat = '/upload/bmp/0.jpg';
    } else{
        echo "Копирование удачно завершено";
    }
    // copy('http://www.zip-2002.ru/foto_pg/'.(int)$val.'.jpg',$_SERVER['DOCUMENT_ROOT'].'/upload/cat/'.(int)$val.'.jpg');
} else{
    echo "Файл найден";
}*/