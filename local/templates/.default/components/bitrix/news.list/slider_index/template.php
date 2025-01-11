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
<ul class="slider_index">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="index_slider_el" style="background-image:url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>);">
            <div class="standart_width index_slider_cont">
                <div class="ind_slid_txt_bl">
                    <div class="ind_slid_tit"><?echo $arItem["NAME"]?></div>
                    <div class="ind_slid_txt"><?echo $arItem["PREVIEW_TEXT"];?></div>
                    <a class="red_bt" href="<?= $arProps["URL"]["VALUE"];?>">Узнать подробнее</a>
                </div>
                <div class="ind_slid_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/index_slider1.png" alt=""/></div>
            </div>
        </div>

	</li>
<?endforeach;?>


</ul>
