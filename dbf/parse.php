<?php

set_time_limit( 24192000 );
ini_set( 'memory_limit', '-1' );


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

require('url_slug.php');
require('user_var.php');



$_SERVER['DOCUMENT_ROOT'] = '/srv/hipno/ruelectro.ru/public_html';

// get bitrix app

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

$sections_res = CIBlockSection::GetList(array("SORT"=>"ASC"),Array("IBLOCK_ID"=>'3',"UF_KEEP_SECTION"=>true),false,array(),false);
while($ar_res = $sections_res->GetNext()){
    $sections_arr[] = array(
        'ID' => $ar_res["ID"],
    );
}


/*$res = CIBlockSection::GetByID($_GET["GID"]);
if($ar_res = $res->GetNext())
    echo $ar_res['NAME'];

*/





foreach($sections_arr as &$section){
    $elements_res = CIBlockElement::GetList(Array("SORT"=>"ASC"),Array("SECTION_ID"=>$section["ID"]),false,false,Array("XML_ID"));
    while($ar_res = $elements_res->GetNext()){
        $section['PRODS'][] = $ar_res['XML_ID'];
    }
    $res_path = CIBlockSection::GetNavChain(3,$section['ID']);
    while($ar_path = $res_path->GetNext()){
        $section['NAV'][] = $ar_path['NAME'];
    }
}




$foundkey = '';





// while


$files = glob( $_SERVER['DOCUMENT_ROOT'].'/dbf/*.dbf' );

foreach( $files as $file )
{
    echo "Processing: $file\n\r";
    $fileParts = explode( '/', $file );
    $endPart = $fileParts[key( array_slice( $fileParts, -1, 1, true ) )];
    $csvFile = preg_replace( '~\.[a-z]+$~i', '.csv', $endPart );

    if( !$dbf = dbase_open( $file, 0 ) ) die( "Could not connect to: $file" );
    $num_rec = dbase_numrecords( $dbf );
    $num_fields = dbase_numfields( $dbf );

    $fields = array();
    $out = '';

    $header_indo =  dbase_get_header_info ($dbf);

    $last = end($header_indo);


    foreach ($header_indo as $key => $column){
        $out .= "\"{$column["name"]}\"";
        $out .=';';
    }
    $out .= '"NAME_POD_3";"POD_IMG";"CURRENCY";"CODE_PROD";"CODE_GROUP1";CODE_GROUP2';
    $out .= "\n";

    /*for( $i = 1; $i <= $num_rec; $i++ ){
        $row = @dbase_get_record_with_names( $dbf, $i );
        foreach( $row as $key => $val ){

        }
    }*/

    for( $i = 1; $i <= $num_rec; $i++ )
    {
        $row = @dbase_get_record_with_names( $dbf, $i );
        $firstKey = key( array_slice( $row, 0, 1, true ) );


        $row = $row + array("NAME_POD_3" => "");
        for($ki = 0,$ket=count($sections_arr);$ki<$ket;$ki++){
            if(in_array((int)$row["ID"],$sections_arr[$ki]["PRODS"])){
                $row["NAME_GR"] = $sections_arr[$ki]["NAV"][0];
                $row["NAME_POD"] = $sections_arr[$ki]["NAV"][1];
                $row["NAME_POD_3"] = !empty($sections_arr[$ki]["NAV"][2])?$sections_arr[$ki]["NAV"][2]:"";                
            }
        }

        foreach( $row as $key => $val )
        {

            // checking pics  -- if not exist then copy it
            if($key == 'ID_POD'){
                $photo_cat = '"/upload/cat/'.(int)$val.'.jpg"';

                if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/upload/cat/'.(int)$val.'.jpg')){
                    $exists = remoteFileExists('http://www.zip-2002.ru/foto_pg/'.(int)$val.'.jpg');
                    if ($exists) {
                        $url_to_cat = 'http://www.zip-2002.ru/foto_pg/'.(int)$val.'.jpg';
                        $newfile = $_SERVER['DOCUMENT_ROOT'].'/upload/cat/'.(int)$val.'.jpg';
                        if (!copy($url_to_cat, $newfile)) {
                            $photo_cat = '/upload/bmp/0.jpg';
                        }
                    } else {
                        $photo_cat = '/upload/bmp/0.jpg';
                    }

                    // copy('http://www.zip-2002.ru/foto_pg/'.(int)$val.'.jpg',$_SERVER['DOCUMENT_ROOT'].'/upload/cat/'.(int)$val.'.jpg');
                }


            }

            if($key == "IMP"){
                switch((int)trim($val)){
                    case 1:$val = 'Импорт';
                        break;
                    default:$val = 'Отеч.';
                }
            }

            if($key == 'EXCODE'){
                if(!file_exists($_SERVER['DOCUMENT_ROOT'].'/upload/bmp/'.(int)$val.'.jpg')){
                    copy('http://www.zip-2002.ru/bmp/'.(int)$val.'.jpg',$_SERVER['DOCUMENT_ROOT'].'/upload/bmp/'.(int)$val.'.jpg');
                }

                // building relative path to prod pics
                $val = '"/upload/bmp/'.(int)$val.'.jpg"';
            }

            if($key == 'PRICE_NDC'){

                if (isset($margin) && is_numeric($margin)){
                    if($margin == 0) $margin = 1;
                    $val = (float)$val*$margin;
                }
            }

            $val = str_replace(array('"','*'), '',$val);


            if( $key == 'deleted' ) continue;


            switch($key){
                case 'TOVMARK';
                case 'NAME_POD';
                case 'NAME_GR';
                case 'FULL_TM';
                case 'EXCODE';
                case 'MESUNIT';
                case 'NAME_POD_3':

                                $add_enclosure = '"';
                                if (preg_match('!!u', $val))
                                {
                                    $decode_val = $val;
                                }
                                else
                                {
                                    $decode_val = iconv('CP866','UTF-8',trim( $val ));
                                    // definitely not utf-8
                                }

                    break;
                case 'IMP':
                                $add_enclosure = '"';
                                $decode_val = $val;
                    break;
                default:
                        $add_enclosure = '';
                        $decode_val = floatval($val);
            }
            
            // $decode_val = iconv('CP866','UTF-8',trim( $val ));
            if( $firstKey != $key ) $out .= ';'.$add_enclosure;
            $out .= $decode_val;
            $out .= $add_enclosure;

            switch ($key){
                case 'TOVMARK':
                    $name_slug  = url_slug($decode_val,array('transliterate' => true));
                    $code_prod = "$row[ID]-{$name_slug}";
                    break;
                case 'NAME_POD':
                    $name_slug_group2 = url_slug($decode_val,array('transliterate' => true));
                    $code_group2 = "$row[ID_POD]-{$name_slug_group2}";
                    break;
                case 'NAME_GR':
                    $name_slug_group1 = url_slug($decode_val,array('transliterate' => true));
                    $code_group1 = "$row[ID_GR]-{$name_slug_group1}";
            }

        }


        $out .= ";{$photo_cat};\"RUB\";\"{$code_prod}\";\"{$code_group1}\";\"{$code_group2}\"";
        $out .= "\n";
    }

    file_put_contents( $csvFile, $out );
}

// echo "Совпадений $ki";

exit('end parse dbf files');

?>


