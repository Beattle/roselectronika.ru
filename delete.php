<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_admin_before.php');

CModule::IncludeModule('iblock');
$arFilter=array('IBLOCK_ID'=>3);
$rsItems=CIBlockElement::GetList(array(), $arFilter, false, array('nTopCount'=>1000), array('ID'));
$count=0;
while($arItem = $rsItems->GetNext(false, false))
{
   $count++;
   if(CIBlockElement::Delete($arItem['ID']))
       echo '<div>Удален элемент '.$arItem['ID'].'</div>';
   else
       echo '<div>Ошибка удаления элемента '.$arItem['ID'].'</div>';
}
   
if($count==0)
    echo '<div>Все!</div>';
else
    die('<div>Удаление элементов... </div> <script>document.location="?delete";</script>');
?>