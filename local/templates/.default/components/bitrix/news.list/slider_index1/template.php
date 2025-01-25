<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<ul class="index_slider">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    $arProps=$arItem['PROPERTIES'];

    ?>
	<li>
					<div class="index_slider_el" style="background-image:url(./img/index_slider_bg.png);">
						<div class="standart_width index_slider_cont">
							<div class="ind_slid_txt_bl">
								<div class="ind_slid_tit">Осенний ценопад</div>
								<div class="ind_slid_txt">Перспективное планирование способствует повышению качества поставленных обществом задач. В частности, синтетическое тестирование прекрасно подходит для реализации стандартных подходов.</div>
								<a class="red_bt" href="">Узнать подробнее</a>
							</div>
							<div class="ind_slid_img"><img src="./img/index_slider1.png" alt=""/></div>
						</div>
					</div>
				</li>   
<?endforeach;?>
</ul>
