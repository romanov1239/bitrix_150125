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
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <div class="news_el" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="news_el_img"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"title="<?=$arItem["NAME"]?>" ><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/></a></div>
        <div class="news_el_cont">
            <div class="news_el_tit"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
            <div class="news_el_txt"><?=$arItem["PREVIEW_TEXT"]?></div>
            <div class="news_el_data"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
            <div class="news_el_look"><?=intval($arItem["SHOW_COUNTER"])?></div>
        </div>
    </div>

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
    <a class="ajax-pager-link more_bt" href="">Показать еще 10</a>
    <div class="number_bl">
        <a class="prev" href=""></a>
        <a href="">1</a>
        <a class="active" href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <span>...</span>
        <a href="">9</a>
        <a class="next" href=""></a>
    </div>
</div>
