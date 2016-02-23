<?php
$row = 1;
$need = 0;
$pass = 0;
$pic = 0;
$cats = array();
$checking_fields = array();
$checking_fields['SUB'] = array();
$checking_fields['MAIN'] = array();


function array_not_unique($raw_array) {
    $dupes = array();
    natcasesort($raw_array);
    reset($raw_array);

    $old_key   = NULL;
    $old_value = NULL;
    foreach ($raw_array as $key => $value) {
        if ($value === NULL) { continue; }
        if (strcasecmp($old_value, $value) === 0) {
            $dupes[$old_key] = $old_value;
            $dupes[$key]     = $value;
        }
        $old_value = $value;
        $old_key   = $key;
    }
    return $dupes;
}

if (($handle = fopen("cats.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

        if($row !== 1){


                $names[] = $data[1];
                $q = $data[6];


/*               if(!in_array($data[3],$checking_fields['SUB']) ){
                    array_push($checking_fields['SUB'],$data[3]);
                   $cats[] = array($data[3],'/upload/cat/'.$data[2].'.jpg');
                }
                if(!in_array($checking_fields['MAIN'],$data[5])){
                    array_push($checking_fields['MAIN'],$data[5]);
                }*/


                $pic++;
/*                if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/upload/cat/'.$data[4].'.jpg')){
                    //echo 'закачиваем файл '.$data[5].'<br/>';
                    $need++;
             //       copy('http://www.zip-2002.ru/foto_pg/'.$data[4].'.jpg',$_SERVER['DOCUMENT_ROOT'].'/upload/cat/'.$data[4].'.jpg');
                } else{
                  //  echo 'Пропускаем файл '.$data[5].' <br/>';
                    $pass++;
                }*/
            // }
        }
       // $num = count($data);
      //  echo "<p> $num fields in line $row: <br /></p>\n";
        $row++;
/*        for ($c=0; $c < $num; $c++) {
            echo $data[$c] . "<br />\n";
        }*/
    }
    fclose($handle);
//    echo 'Всего надо бы закачать <br />'.$need;
//    echo 'Пропущено '.$pass;

}

//echo '<pre>'.print_r($checking_fields,true).'</pre>';

/*$fp = fopen('line.csv', 'w+');
foreach ($cats as $fields) {

    fputcsv($fp, $fields,';');
}
fclose($fp);*/



$duples = array_not_unique($names);

echo '<pre>'.print_r($duples,true).'</pre>';
echo count($duples);
?>
