<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?><div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
	<h1 class="title title_large simplepage__title">
	Результаты поиска </h1>
 <article>

<?$APPLICATION->IncludeComponent(
	"bitrix:search.form", 
	"custom", 
	array(
		"COMPONENT_TEMPLATE" => "custom",
		"PAGE" => "#SITE_DIR#search/index.php",
		"USE_SUGGEST" => "N"
	),
	false
);?>

<br>
 
	<?$APPLICATION->IncludeComponent(
	"bitrix:search.page", 
	".default", 
	array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DEFAULT_SORT" => "rank",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FILTER_NAME" => "",
		"NO_WORD_LOGIC" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Результаты поиска",
		"PAGE_RESULT_COUNT" => "50",
		"PATH_TO_USER_PROFILE" => "",
		"RATING_TYPE" => "",
		"RESTART" => "N",
		"SHOW_RATING" => "",
		"SHOW_WHEN" => "N",
		"SHOW_WHERE" => "Y",
		"USE_LANGUAGE_GUESS" => "N",
		"USE_SUGGEST" => "N",
		"USE_TITLE_RANK" => "N",
		"arrFILTER" => array(
		),
		"arrWHERE" => array(
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>



 </article>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>