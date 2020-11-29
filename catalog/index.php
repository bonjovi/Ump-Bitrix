<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><main class="main">
<div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
	<div class="row">
		<div class="col-lg-3">
			<div class="leftmenu">
				<div class="leftmenu__first">
					 Каталог
				</div>
				 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"ump_catalog_left",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y"
	)
);?>
			</div>
		</div>
		<div class="col-lg-9 catalog">
			 <?
				/*echo "<pre>";
				print_r($breadcrumbs);
				echo "</pre>";*/
			?>

            <!--<a class="title title_small catalog__sitemap-link" href="/catalog/map">Каталог в виде дерева</a>-->

			<?$APPLICATION->IncludeComponent(
                "bitrix:catalog",
                "simple",
                array(
                    "ACTION_VARIABLE" => "action",
                    "ADD_ELEMENT_CHAIN" => "N",
                    "ADD_PICT_PROP" => "-",
                    "ADD_PROPERTIES_TO_BASKET" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "BASKET_URL" => "/cabinet/cart/",
                    "BIG_DATA_RCM_TYPE" => "personal",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "COMMON_ADD_TO_BASKET_ACTION" => "ADD",
                    "COMMON_SHOW_CLOSE_POPUP" => "N",
                    "COMPATIBLE_MODE" => "Y",
                    "CONVERT_CURRENCY" => "N",
                    "DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
                    "DETAIL_ADD_TO_BASKET_ACTION" => array(
                        0 => "BUY",
                    ),
                    "DETAIL_ADD_TO_BASKET_ACTION_PRIMARY" => array(
                        0 => "BUY",
                    ),
                    "DETAIL_BACKGROUND_IMAGE" => "-",
                    "DETAIL_BRAND_USE" => "N",
                    "DETAIL_BROWSER_TITLE" => "-",
                    "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
                    "DETAIL_DETAIL_PICTURE_MODE" => array(
                        0 => "POPUP",
                        1 => "MAGNIFIER",
                    ),
                    "DETAIL_DISPLAY_NAME" => "Y",
                    "DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
                    "DETAIL_IMAGE_RESOLUTION" => "16by9",
                    "DETAIL_MAIN_BLOCK_OFFERS_PROPERTY_CODE" => "",
                    "DETAIL_MAIN_BLOCK_PROPERTY_CODE" => "",
                    "DETAIL_META_DESCRIPTION" => "-",
                    "DETAIL_META_KEYWORDS" => "-",
                    "DETAIL_OFFERS_FIELD_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "DETAIL_OFFERS_PROPERTY_CODE" => array(
                        0 => "",
                        1 => "ARTIKUL_POSTAVSHCHIKA",
                        2 => "",
                    ),
                    "DETAIL_PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
                    "DETAIL_PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
                    "DETAIL_PROPERTY_CODE" => array(
                        0 => "MOQ",
                        1 => "WEB_NAZVANIE",
                        2 => "WEB_OPISANIE",
                        3 => "ARTIKUL_POSTAVSHCHIKA",
                        4 => "VES_BRUTTO_TAMOZHNYA",
                        5 => "CML2_ARTICLE",
                        6 => "CML2_BASE_UNIT",
                        7 => "VES_NETTO_TAMOZHNYA",
                        8 => "VREMYA_DOSTAVKI_DLYA_KLIENTA",
                        9 => "CML2_MANUFACTURER",
                        10 => "CML2_TRAITS",
                        11 => "CML2_TAXES",
                        12 => "CML2_ATTRIBUTES",
                        13 => "CML2_BAR_CODE",
                        14 => "VID_NOMENKLATURY_DLYA_BITRIKS24",
                        15 => "VREMYA_DOSTAVKI_POSTAVSHCHIK",
                        16 => "VNESHNEE_PRIMECHANIE",
                        17 => "VYSOTA_MM",
                        18 => "VNUTRENNEE_PRIMECHANIE",
                        19 => "DIAMETR",
                        20 => "DLINA_KONTAKTA",
                        21 => "DLINA_M",
                        22 => "ZHILA",
                        23 => "KOLICHESTVO_V_UPAKOVKE",
                        24 => "KOMPLEKTATSIYA",
                        25 => "KRASKA",
                        26 => "KT3",
                        27 => "KT4",
                        28 => "MARKA_SERIYA",
                        29 => "NAIMEN_TAMOZHNYA",
                        30 => "MIN_ZAKUPOCHNAYA_EDINITSA",
                        31 => "OPISANIE_ANGL_",
                        32 => "MIN_PRODAZHNAYA_EDINITSA",
                        33 => "NAPRYAZHENIE",
                        34 => "OBOLOCHKA",
                        35 => "OTVERSTIE_POD_BOLT",
                        36 => "OTRASLI_PROMYSHLENNOSTI",
                        37 => "SROK_GODNOSTI",
                        38 => "PREKURSOR",
                        39 => "SECHENIE",
                        40 => "STRANA_PROISKHOZHDENIYA",
                        41 => "SREDNIY_SROK_DOSTAVKI",
                        42 => "TIP_TOVARA_TOLYATTI",
                        43 => "TEMPERATURA",
                        44 => "TSVET",
                        45 => "TIP_NAKONECHNIKA",
                        46 => "TIP_TOVARA_VLADIVOSTOK",
                        47 => "TIP_TOVARA_EKATERINBURG",
                        48 => "TIP_TOVARA_NOVOSIBIRSK",
                        49 => "TIP_TOVARA_ROSTOV",
                        50 => "TIP_TOVARA_SANKT_PETERBURG",
                        51 => "TIP_TOVARA_SKLAD_41",
                        52 => "TSENOVAYA_EDINITSA_POKUPKI",
                        53 => "TSENOVAYA_EDINITSA_PRODAZHI",
                        54 => "SHIRINA_MM",
                        55 => "EKRAN",
                        56 => "YACHEYKI_KHRANENIYA_SKLAD_41",
                        57 => "YACHEYKI_KHRANENIYA_SKLAD_EKATERINBURG",
                        58 => "YACHEYKI_KHRANENIYA_SKLAD_NOVOSIBIRSK",
                        59 => "YACHEYKI_KHRANENIYA_SKLAD_ROSTOV",
                        60 => "YACHEYKI_KHRANENIYA_SKLAD_SANKT_PETERBURG",
                        61 => "ATT_COMPLECTATION",
                        62 => "ATT_TECHS",
                        63 => "ATT_OPTIONS",
                        64 => "ATT_ADVANTAGES",
                        65 => "ATT_VIDEO",
                        66 => "ATT_USAGE",
                        67 => "ATT_PUBLICATION",
                        68 => "ATT_ORDERINFO",
                        69 => "ATT_DOWNLOAD",
                        70 => "ATT_EXPENDABLES",
                        71 => "_POSTAVSHCHIKA",
                        72 => "VYGRUZHAT_NA_SAYT",
                        73 => "ATT_BRAND",
                        74 => "ATT_CUSTOMARTICLES",
                        75 => "",
                    ),
                    "DETAIL_SET_CANONICAL_URL" => "N",
                    "DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
                    "DETAIL_SHOW_POPULAR" => "Y",
                    "DETAIL_SHOW_SLIDER" => "N",
                    "DETAIL_SHOW_VIEWED" => "Y",
                    "DETAIL_STRICT_SECTION_CHECK" => "N",
                    "DETAIL_USE_COMMENTS" => "N",
                    "DETAIL_USE_VOTE_RATING" => "N",
                    "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "ELEMENT_SORT_FIELD" => "sort",
                    "ELEMENT_SORT_FIELD2" => "id",
                    "ELEMENT_SORT_ORDER" => "asc",
                    "ELEMENT_SORT_ORDER2" => "desc",
                    "FILTER_HIDE_ON_MOBILE" => "N",
                    "FILTER_VIEW_MODE" => "VERTICAL",
                    "GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
                    "GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
                    "GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                    "GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
                    "GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
                    "GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
                    "GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
                    "GIFTS_MESS_BTN_BUY" => "Выбрать",
                    "GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
                    "GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
                    "GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
                    "GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
                    "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                    "GIFTS_SHOW_IMAGE" => "Y",
                    "GIFTS_SHOW_NAME" => "Y",
                    "GIFTS_SHOW_OLD_PRICE" => "Y",
                    "HIDE_NOT_AVAILABLE" => "Y",
                    "HIDE_NOT_AVAILABLE_OFFERS" => "Y",
                    "IBLOCK_ID" => "1",
                    "IBLOCK_TYPE" => "catalogs",
                    "INCLUDE_SUBSECTIONS" => "N",
                    "INSTANT_RELOAD" => "N",
                    "LABEL_PROP" => "",
                    "LAZY_LOAD" => "N",
                    "LINE_ELEMENT_COUNT" => "0",
                    "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
                    "LINK_IBLOCK_ID" => "",
                    "LINK_IBLOCK_TYPE" => "",
                    "LINK_PROPERTY_SID" => "",
                    "LIST_BROWSER_TITLE" => "-",
                    "LIST_ENLARGE_PRODUCT" => "STRICT",
                    "LIST_META_DESCRIPTION" => "-",
                    "LIST_META_KEYWORDS" => "-",
                    "LIST_OFFERS_FIELD_CODE" => array(
                        0 => "NAME",
                        1 => "",
                    ),
                    "LIST_OFFERS_LIMIT" => "5",
                    "LIST_OFFERS_PROPERTY_CODE" => array(
                        0 => "",
                        1 => "MOQ",
                        2 => "_POSTAVSHCHIKA",
                        3 => "WEB_NAZVANIE",
                        4 => "WEB_OPISANIE",
                        5 => "CML2_ARTICLE",
                        6 => "ARTIKUL_POSTAVSHCHIKA",
                        7 => "CML2_BASE_UNIT",
                        8 => "ATT_BRAND",
                        9 => "VES_BRUTTO_TAMOZHNYA",
                        10 => "VES_NETTO_TAMOZHNYA",
                        11 => "VID_NOMENKLATURY_DLYA_BITRIKS24",
                        12 => "ATT_VIDEO",
                        13 => "VNESHNEE_PRIMECHANIE",
                        14 => "VNUTRENNEE_PRIMECHANIE",
                        15 => "VREMYA_DOSTAVKI_DLYA_KLIENTA",
                        16 => "VREMYA_DOSTAVKI_POSTAVSHCHIK",
                        17 => "VYGRUZHAT_NA_SAYT",
                        18 => "VYSOTA_MM",
                        19 => "DIAMETR",
                        20 => "DLINA_KONTAKTA",
                        21 => "DLINA_M",
                        22 => "ZHILA",
                        23 => "ATT_ORDERINFO",
                        24 => "MORE_PHOTO",
                        25 => "ATT_CUSTOMARTICLES",
                        26 => "KOLICHESTVO_V_UPAKOVKE",
                        27 => "ATT_COMPLECTATION",
                        28 => "KOMPLEKTATSIYA",
                        29 => "KRASKA",
                        30 => "KRATKAYA_INSTRUKTSIYA",
                        31 => "KT3",
                        32 => "KT4",
                        33 => "MARKA_SERIYA",
                        34 => "MIN_ZAKUPOCHNAYA_EDINITSA",
                        35 => "MIN_PRODAZHNAYA_EDINITSA",
                        36 => "NAIMEN_TAMOZHNYA",
                        37 => "NAPRYAZHENIE",
                        38 => "OBOLOCHKA",
                        39 => "OPISANIE_ANGL_",
                        40 => "ATT_OPTIONS",
                        41 => "OSNOVNYE_KHARAKTERISTIKI",
                        42 => "OTVERSTIE_POD_BOLT",
                        43 => "OTRASLI_PROMYSHLENNOSTI",
                        44 => "ATT_ADVANTAGES",
                        45 => "PREKURSOR",
                        46 => "ATT_USAGE",
                        47 => "CML2_MANUFACTURER",
                        48 => "ATT_PUBLICATION",
                        49 => "ATT_EXPENDABLES",
                        50 => "CML2_TRAITS",
                        51 => "SEBESTOIMOST",
                        52 => "SECHENIE",
                        53 => "ATT_DOWNLOAD",
                        54 => "SREDNIY_SROK_DOSTAVKI",
                        55 => "SROK_GODNOSTI",
                        56 => "CML2_TAXES",
                        57 => "STRANA_PROISKHOZHDENIYA",
                        58 => "TEMPERATURA",
                        59 => "ATT_TECHS",
                        60 => "TIP_NAKONECHNIKA",
                        61 => "TIP_TOVARA_VLADIVOSTOK",
                        62 => "TIP_TOVARA_EKATERINBURG",
                        63 => "TIP_TOVARA_NOVOSIBIRSK",
                        64 => "TIP_TOVARA_ROSTOV",
                        65 => "TIP_TOVARA_SANKT_PETERBURG",
                        66 => "TIP_TOVARA_SKLAD_41",
                        67 => "TIP_TOVARA_TOLYATTI",
                        68 => "FILES",
                        69 => "CML2_ATTRIBUTES",
                        70 => "TSVET",
                        71 => "TSENOVAYA_EDINITSA_POKUPKI",
                        72 => "TSENOVAYA_EDINITSA_PRODAZHI",
                        73 => "SHIRINA_MM",
                        74 => "CML2_BAR_CODE",
                        75 => "EKRAN",
                        76 => "YACHEYKI_KHRANENIYA_SKLAD_41",
                        77 => "YACHEYKI_KHRANENIYA_SKLAD_EKATERINBURG",
                        78 => "YACHEYKI_KHRANENIYA_SKLAD_NOVOSIBIRSK",
                        79 => "YACHEYKI_KHRANENIYA_SKLAD_ROSTOV",
                        80 => "YACHEYKI_KHRANENIYA_SKLAD_SANKT_PETERBURG",
                        81 => "",
                    ),
                    "LIST_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                    "LIST_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                    "LIST_PROPERTY_CODE" => array(
                        0 => "MOQ",
                        1 => "WEB_NAZVANIE",
                        2 => "WEB_OPISANIE",
                        3 => "ARTIKUL_POSTAVSHCHIKA",
                        4 => "VES_BRUTTO_TAMOZHNYA",
                        5 => "CML2_ARTICLE",
                        6 => "CML2_BASE_UNIT",
                        7 => "VES_NETTO_TAMOZHNYA",
                        8 => "VREMYA_DOSTAVKI_DLYA_KLIENTA",
                        9 => "CML2_MANUFACTURER",
                        10 => "CML2_TRAITS",
                        11 => "CML2_TAXES",
                        12 => "CML2_ATTRIBUTES",
                        13 => "CML2_BAR_CODE",
                        14 => "VID_NOMENKLATURY_DLYA_BITRIKS24",
                        15 => "VREMYA_DOSTAVKI_POSTAVSHCHIK",
                        16 => "VNESHNEE_PRIMECHANIE",
                        17 => "VYSOTA_MM",
                        18 => "VNUTRENNEE_PRIMECHANIE",
                        19 => "DIAMETR",
                        20 => "DLINA_KONTAKTA",
                        21 => "DLINA_M",
                        22 => "ZHILA",
                        23 => "KOLICHESTVO_V_UPAKOVKE",
                        24 => "KOMPLEKTATSIYA",
                        25 => "KRASKA",
                        26 => "KT3",
                        27 => "KT4",
                        28 => "MARKA_SERIYA",
                        29 => "NAIMEN_TAMOZHNYA",
                        30 => "MIN_ZAKUPOCHNAYA_EDINITSA",
                        31 => "OPISANIE_ANGL_",
                        32 => "MIN_PRODAZHNAYA_EDINITSA",
                        33 => "NAPRYAZHENIE",
                        34 => "OBOLOCHKA",
                        35 => "OTVERSTIE_POD_BOLT",
                        36 => "OTRASLI_PROMYSHLENNOSTI",
                        37 => "SROK_GODNOSTI",
                        38 => "PREKURSOR",
                        39 => "SECHENIE",
                        40 => "STRANA_PROISKHOZHDENIYA",
                        41 => "SREDNIY_SROK_DOSTAVKI",
                        42 => "TIP_TOVARA_TOLYATTI",
                        43 => "TEMPERATURA",
                        44 => "TSVET",
                        45 => "TIP_NAKONECHNIKA",
                        46 => "TIP_TOVARA_VLADIVOSTOK",
                        47 => "TIP_TOVARA_EKATERINBURG",
                        48 => "TIP_TOVARA_NOVOSIBIRSK",
                        49 => "TIP_TOVARA_ROSTOV",
                        50 => "TIP_TOVARA_SANKT_PETERBURG",
                        51 => "TIP_TOVARA_SKLAD_41",
                        52 => "TSENOVAYA_EDINITSA_POKUPKI",
                        53 => "TSENOVAYA_EDINITSA_PRODAZHI",
                        54 => "SHIRINA_MM",
                        55 => "EKRAN",
                        56 => "YACHEYKI_KHRANENIYA_SKLAD_41",
                        57 => "YACHEYKI_KHRANENIYA_SKLAD_EKATERINBURG",
                        58 => "YACHEYKI_KHRANENIYA_SKLAD_NOVOSIBIRSK",
                        59 => "YACHEYKI_KHRANENIYA_SKLAD_ROSTOV",
                        60 => "YACHEYKI_KHRANENIYA_SKLAD_SANKT_PETERBURG",
                        61 => "ATT_COMPLECTATION",
                        62 => "ATT_TECHS",
                        63 => "ATT_OPTIONS",
                        64 => "ATT_ADVANTAGES",
                        65 => "ATT_VIDEO",
                        66 => "ATT_USAGE",
                        67 => "ATT_PUBLICATION",
                        68 => "ATT_ORDERINFO",
                        69 => "ATT_DOWNLOAD",
                        70 => "ATT_EXPENDABLES",
                        71 => "_POSTAVSHCHIKA",
                        72 => "VYGRUZHAT_NA_SAYT",
                        73 => "ATT_BRAND",
                        74 => "ATT_CUSTOMARTICLES",
                        75 => "",
                    ),
                    "LIST_PROPERTY_CODE_MOBILE" => "",
                    "LIST_SHOW_SLIDER" => "Y",
                    "LIST_SLIDER_INTERVAL" => "3000",
                    "LIST_SLIDER_PROGRESS" => "N",
                    "LOAD_ON_SCROLL" => "N",
                    "MESSAGE_404" => "",
                    "MESS_BTN_ADD_TO_BASKET" => "В корзину",
                    "MESS_BTN_BUY" => "Купить",
                    "MESS_BTN_COMPARE" => "Сравнение",
                    "MESS_BTN_DETAIL" => "Подробнее",
                    "MESS_BTN_SUBSCRIBE" => "Подписаться",
                    "MESS_COMMENTS_TAB" => "Комментарии",
                    "MESS_DESCRIPTION_TAB" => "Описание",
                    "MESS_NOT_AVAILABLE" => "Нет в наличии",
                    "MESS_PRICE_RANGES_TITLE" => "Цены",
                    "MESS_PROPERTIES_TAB" => "Характеристики",
                    "OFFERS_CART_PROPERTIES" => array(
                    ),
                    "OFFERS_SORT_FIELD" => "sort",
                    "OFFERS_SORT_FIELD2" => "id",
                    "OFFERS_SORT_ORDER" => "asc",
                    "OFFERS_SORT_ORDER2" => "desc",
                    "OFFER_ADD_PICT_PROP" => "-",
                    "OFFER_TREE_PROPS" => "",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Товары",
                    "PAGE_ELEMENT_COUNT" => "30",
                    "PARTIAL_PRODUCT_PROPERTIES" => "Y",
                    "PRICE_CODE" => array(
                    ),
                    "PRICE_VAT_INCLUDE" => "Y",
                    "PRICE_VAT_SHOW_VALUE" => "N",
                    "PRODUCT_DISPLAY_MODE" => "N",
                    "PRODUCT_ID_VARIABLE" => "id",
                    "PRODUCT_PROPERTIES" => array(
                    ),
                    "PRODUCT_PROPS_VARIABLE" => "prop",
                    "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                    "PRODUCT_SUBSCRIPTION" => "Y",
                    "SEARCH_CHECK_DATES" => "Y",
                    "SEARCH_NO_WORD_LOGIC" => "Y",
                    "SEARCH_PAGE_RESULT_COUNT" => "50",
                    "SEARCH_RESTART" => "N",
                    "SEARCH_USE_LANGUAGE_GUESS" => "Y",
                    "SECTIONS_SHOW_PARENT_NAME" => "Y",
                    "SECTIONS_VIEW_MODE" => "LIST",
                    "SECTION_ADD_TO_BASKET_ACTION" => "ADD",
                    "SECTION_BACKGROUND_IMAGE" => "-",
                    "SECTION_COUNT_ELEMENTS" => "N",
                    "SECTION_ID_VARIABLE" => "SECTION_ID",
                    "SECTION_TOP_DEPTH" => "0",
                    "SEF_FOLDER" => "/catalog/",
                    "SEF_MODE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SHOW_DEACTIVATED" => "N",
                    "SHOW_DISCOUNT_PERCENT" => "N",
                    "SHOW_MAX_QUANTITY" => "N",
                    "SHOW_OLD_PRICE" => "N",
                    "SHOW_PRICE_COUNT" => "1",
                    "SHOW_TOP_ELEMENTS" => "Y",
                    "SIDEBAR_DETAIL_POSITION" => "right",
                    "SIDEBAR_DETAIL_SHOW" => "N",
                    "SIDEBAR_PATH" => "",
                    "SIDEBAR_SECTION_POSITION" => "right",
                    "SIDEBAR_SECTION_SHOW" => "Y",
                    "TEMPLATE_THEME" => "blue",
                    "TOP_ADD_TO_BASKET_ACTION" => "ADD",
                    "TOP_ELEMENT_COUNT" => "9",
                    "TOP_ELEMENT_SORT_FIELD" => "sort",
                    "TOP_ELEMENT_SORT_FIELD2" => "id",
                    "TOP_ELEMENT_SORT_ORDER" => "asc",
                    "TOP_ELEMENT_SORT_ORDER2" => "desc",
                    "TOP_ENLARGE_PRODUCT" => "STRICT",
                    "TOP_LINE_ELEMENT_COUNT" => "3",
                    "TOP_OFFERS_FIELD_CODE" => array(
                        0 => "ID",
                        1 => "CODE",
                        2 => "XML_ID",
                        3 => "NAME",
                        4 => "TAGS",
                        5 => "SORT",
                        6 => "PREVIEW_TEXT",
                        7 => "PREVIEW_PICTURE",
                        8 => "DETAIL_TEXT",
                        9 => "DETAIL_PICTURE",
                        10 => "DATE_ACTIVE_FROM",
                        11 => "ACTIVE_FROM",
                        12 => "DATE_ACTIVE_TO",
                        13 => "ACTIVE_TO",
                        14 => "SHOW_COUNTER",
                        15 => "SHOW_COUNTER_START",
                        16 => "IBLOCK_TYPE_ID",
                        17 => "IBLOCK_ID",
                        18 => "IBLOCK_CODE",
                        19 => "IBLOCK_NAME",
                        20 => "IBLOCK_EXTERNAL_ID",
                        21 => "DATE_CREATE",
                        22 => "CREATED_BY",
                        23 => "CREATED_USER_NAME",
                        24 => "TIMESTAMP_X",
                        25 => "MODIFIED_BY",
                        26 => "USER_NAME",
                        27 => "",
                    ),
                    "TOP_OFFERS_LIMIT" => "5",
                    "TOP_OFFERS_PROPERTY_CODE" => array(
                        0 => "",
                        1 => "",
                    ),
                    "TOP_PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
                    "TOP_PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
                    "TOP_PROPERTY_CODE" => array(
                        0 => "MOQ",
                        1 => "WEB_NAZVANIE",
                        2 => "WEB_OPISANIE",
                        3 => "ARTIKUL_POSTAVSHCHIKA",
                        4 => "VES_BRUTTO_TAMOZHNYA",
                        5 => "CML2_ARTICLE",
                        6 => "CML2_BASE_UNIT",
                        7 => "VES_NETTO_TAMOZHNYA",
                        8 => "VREMYA_DOSTAVKI_DLYA_KLIENTA",
                        9 => "CML2_MANUFACTURER",
                        10 => "CML2_TRAITS",
                        11 => "CML2_TAXES",
                        12 => "CML2_ATTRIBUTES",
                        13 => "CML2_BAR_CODE",
                        14 => "VID_NOMENKLATURY_DLYA_BITRIKS24",
                        15 => "VREMYA_DOSTAVKI_POSTAVSHCHIK",
                        16 => "VNESHNEE_PRIMECHANIE",
                        17 => "VYSOTA_MM",
                        18 => "VNUTRENNEE_PRIMECHANIE",
                        19 => "DIAMETR",
                        20 => "DLINA_KONTAKTA",
                        21 => "DLINA_M",
                        22 => "ZHILA",
                        23 => "KOLICHESTVO_V_UPAKOVKE",
                        24 => "KOMPLEKTATSIYA",
                        25 => "KRASKA",
                        26 => "KT3",
                        27 => "KT4",
                        28 => "MARKA_SERIYA",
                        29 => "NAIMEN_TAMOZHNYA",
                        30 => "MIN_ZAKUPOCHNAYA_EDINITSA",
                        31 => "OPISANIE_ANGL_",
                        32 => "MIN_PRODAZHNAYA_EDINITSA",
                        33 => "NAPRYAZHENIE",
                        34 => "OBOLOCHKA",
                        35 => "OTVERSTIE_POD_BOLT",
                        36 => "OTRASLI_PROMYSHLENNOSTI",
                        37 => "SROK_GODNOSTI",
                        38 => "PREKURSOR",
                        39 => "SECHENIE",
                        40 => "STRANA_PROISKHOZHDENIYA",
                        41 => "SREDNIY_SROK_DOSTAVKI",
                        42 => "TIP_TOVARA_TOLYATTI",
                        43 => "TEMPERATURA",
                        44 => "TSVET",
                        45 => "TIP_NAKONECHNIKA",
                        46 => "TIP_TOVARA_VLADIVOSTOK",
                        47 => "TIP_TOVARA_EKATERINBURG",
                        48 => "TIP_TOVARA_NOVOSIBIRSK",
                        49 => "TIP_TOVARA_ROSTOV",
                        50 => "TIP_TOVARA_SANKT_PETERBURG",
                        51 => "TIP_TOVARA_SKLAD_41",
                        52 => "TSENOVAYA_EDINITSA_POKUPKI",
                        53 => "TSENOVAYA_EDINITSA_PRODAZHI",
                        54 => "SHIRINA_MM",
                        55 => "EKRAN",
                        56 => "YACHEYKI_KHRANENIYA_SKLAD_41",
                        57 => "YACHEYKI_KHRANENIYA_SKLAD_EKATERINBURG",
                        58 => "YACHEYKI_KHRANENIYA_SKLAD_NOVOSIBIRSK",
                        59 => "YACHEYKI_KHRANENIYA_SKLAD_ROSTOV",
                        60 => "YACHEYKI_KHRANENIYA_SKLAD_SANKT_PETERBURG",
                        61 => "ATT_COMPLECTATION",
                        62 => "ATT_TECHS",
                        63 => "ATT_OPTIONS",
                        64 => "ATT_ADVANTAGES",
                        65 => "ATT_VIDEO",
                        66 => "ATT_USAGE",
                        67 => "ATT_PUBLICATION",
                        68 => "ATT_ORDERINFO",
                        69 => "ATT_DOWNLOAD",
                        70 => "ATT_EXPENDABLES",
                        71 => "_POSTAVSHCHIKA",
                        72 => "VYGRUZHAT_NA_SAYT",
                        73 => "ATT_BRAND",
                        74 => "ATT_CUSTOMARTICLES",
                        75 => "",
                    ),
                    "TOP_PROPERTY_CODE_MOBILE" => "",
                    "TOP_SHOW_SLIDER" => "Y",
                    "TOP_SLIDER_INTERVAL" => "3000",
                    "TOP_SLIDER_PROGRESS" => "N",
                    "TOP_VIEW_MODE" => "SECTION",
                    "USER_CONSENT" => "N",
                    "USER_CONSENT_ID" => "0",
                    "USER_CONSENT_IS_CHECKED" => "Y",
                    "USER_CONSENT_IS_LOADED" => "N",
                    "USE_ALSO_BUY" => "N",
                    "USE_BIG_DATA" => "Y",
                    "USE_COMMON_SETTINGS_BASKET_POPUP" => "N",
                    "USE_COMPARE" => "N",
                    "USE_ELEMENT_COUNTER" => "Y",
                    "USE_ENHANCED_ECOMMERCE" => "N",
                    "USE_FILTER" => "N",
                    "USE_GIFTS_DETAIL" => "Y",
                    "USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
                    "USE_GIFTS_SECTION" => "Y",
                    "USE_MAIN_ELEMENT_SECTION" => "N",
                    "USE_PRICE_COUNT" => "N",
                    "USE_PRODUCT_QUANTITY" => "N",
                    "USE_REVIEW" => "N",
                    "USE_SALE_BESTSELLERS" => "Y",
                    "USE_STORE" => "N",
                    "COMPONENT_TEMPLATE" => "simple",
                    "SEF_URL_TEMPLATES" => array(
                        "sections" => "",
                        "section" => "#SECTION_CODE_PATH#/",
                        "element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
                        "compare" => "compare.php?action=#ACTION_CODE#",
                        "smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
                    ),
                    "VARIABLE_ALIASES" => array(
                        "compare" => array(
                            "ACTION_CODE" => "action",
                        ),
                    )
                ),
                false
            );?>
		</div>
	</div>
</div>
 </main><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>