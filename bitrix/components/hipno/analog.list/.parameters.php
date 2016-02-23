<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


$arComponentParameters = array(
       'PARAMETERS' => array(
            'IBLOCK_ID' => array(
                'NAME' => 'ID Инфоблока',
                'TYPE' => 'STRING',
                'MULTIPLE' => 'N',
                'PARENT' => 'BASE',
            ),
           'ELEMENT_ID' => array(
               'NAME' => 'Значение свойства АНАЛОГ',
               'TYPE' => 'STRING',
               'MULTIPLE' => 'N',
               'PARENT' => 'BASE',
           ),

           'VALUE_PROPERTY_ANALOG' => array(
               'NAME' => 'Значение свойства АНАЛОГ',
               'TYPE' => 'STRING',
               'MULTIPLE' => 'N',
               'PARENT' => 'BASE',
           ),
        'CACHE_TIME'  =>  array('DEFAULT'=>3600),
       )
);
?>
