<? 
  if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); 
  global $APPLICATION; 
  $aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"", 
	array(
		//"IS_SEF" => "Y",
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => "/catalog/",
		// "SECTION_PAGE_URL" => "#SECTION_CODE_PATH#/",
		// "DETAIL_PAGE_URL" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#.html",
		"SECTION_PAGE_URL" => "?SECTION_ID=#SECTION_ID#",
		"DETAIL_PAGE_URL" => "#ELEMENT_ID#",
		"IBLOCK_TYPE" => "catalogs",
		"IBLOCK_ID" => "1",
		"DEPTH_LEVEL" => "3",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000"
	),
	false
); 
  $aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks); 
?>