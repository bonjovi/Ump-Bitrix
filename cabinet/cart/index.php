<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><div class="container simplepage">
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
	<?=$APPLICATION->ShowTitle()?> </h1>
	<p>
		 Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
	</p>
	<p>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket",
	"",
Array()
);?><br>
	</p>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>