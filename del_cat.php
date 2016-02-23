<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_admin_before.php'); 

CModule::IncludeModule('iblock'); 
$arFilter=array('IBLOCK_ID'=>3); 
$rsItems=CIBlockSection::GetList(array(), $arFilter, false, array('ID'));
$rsItems->NavStart(50);
$count=0; 
while($arItem = $rsItems->GetNext(false, false)) 
{ 
   $count++; 
   if(CIBlockSection::Delete($arItem['ID']))
       echo '<div>Удален раздел '.$arItem['ID'].'</div>'; 
   else 
       echo '<div>Ошибка удаления раздела '.$arItem['ID'].'</div>'; 
} 
    
if($count==0) 
    echo '<div>Все!</div>'; 
else 
    die('<div>Удаление разделов... </div> <script>document.location="?delete";</script>'); 
?>