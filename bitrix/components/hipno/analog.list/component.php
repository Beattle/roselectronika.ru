<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/** @var array $arParams */
/** @var array $arResult */


if ($this->StartResultCache()){
    $arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","DETAIL_PICTURE","DETAIL_PAGE_URL","PROPERTY_ANALOG","PROPERTY_MODEL","PREVIEW_PICTURE");
    $arFilter = Array(
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "!ID" => $arParams["ELEMENT_ID"],
        "ACTIVE_DATE" => "Y",
        "ACTIVE" => "Y",
        "=PROPERTY_ANALOG"=>$arParams["VALUE_PROPERTY_ANALOG"]
    );
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
    while($ob = $res->GetNext())
    {
        $arResult['ITEMS'][] = $ob;
    }

    foreach ($arResult['ITEMS'] as $key => &$element){
        $element['PREVIEW_PICTURE'] = (0 < $element["PREVIEW_PICTURE"] ? CFile::GetFileArray($element["PREVIEW_PICTURE"]) : false);
    }

    $this->IncludeComponentTemplate();
}

