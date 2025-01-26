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


<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	$arProps=$arItem['PROPERTIES'];
    ?>
    <div class="catalog_el" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="cat_el_img">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""/></a>
            <div class="cat_el_status">
                <?if($arProps['ACTION']['VALUE']=='Y'):?><div class="red">акция</div><?endif?>
                <?if($arProps['NEW']['VALUE']=='Y'):?><div class="green">новинка</div><?endif?>
                <?if($arProps['BEST']['VALUE']=='Y'):?><div class="blue">бестселлер</div><?endif?>
            </div>
        </div>
        <div class="cat_el_star">

            <?for($i=1;$i<=5;$i++):?>
            <?if($arProps['RATING']['VALUE']>=$i):?>
            <img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
            <?else:?>


            <img src="<?=SITE_TEMPLATE_PATH?>/img/star_gray.png" alt=""/>
            <?endif;?>
            <?endfor;?>
        </div>
        <div class="cat_el_price">
<?if(!$arProps['DISCOUNT']['VALUE']):?>
            <div class="cat_price"><?=$arProps['PRICE']['VALUE']?>руб.</div>
            <?else:?>
            <div class="cat_price"><?=$price_new=$arProps['PRICE']['VALUE']-($arProps['PRICE']['VALUE']*$arProps['DISCOUNT']['VALUE']/100)?></div>
            <div class="cat_old_price">
                <div class="price"><?=$arProps['PRICE']['VALUE']?>руб.</div>
                <div class="sale">-<?=$arProps['DISCOUNT']['VALUE']?>%</div>
            </div>
<?endif;?>
        </div>
        <div class="cat_el_name">
            <div class="cat_el_tit"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></div>
            <div class="cat_el_avtor"><?=implode(', ', $arProps['AUTHOR']['VALUE'])?></div>
        </div>
        <a class="favor_bt" href="">В избранное</a>
    </div>

<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>

