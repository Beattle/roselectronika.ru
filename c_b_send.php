<?php
/**
 * User: Hipno
 * Date: 03.08.2016
 * Time: 23:16
 * Project: DBF
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
/** @var array $_POST */
use Bitrix\Main\Mail\Event;
use Bitrix\Main\Application;

$request = Application::getInstance()->getContext()->getRequest();
echo '<pre>'.print_r(get_class_methods($request),true).'</pre>';
if(!$request->isEmpty()){

        $arEventFields = array(
            'AUTHOR' => $_POST['c_b_name'],
            'AUTHOR_EMAIL' => $_POST['c_b_req'],
            'TEXT' => $_POST['c_b_comm'],
        );

       if( Event::sendImmediate(array(
               "EVENT_NAME" => "FEEDBACK_FORM",
               "LID" => "s1",
               "C_FIELDS" => $arEventFields,)
        )){
           echo 'ok';
       }else{
           echo 'go wrong';
       };

    }



