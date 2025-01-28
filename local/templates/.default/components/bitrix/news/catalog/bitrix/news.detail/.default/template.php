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

<div class="detail_info_bl clear_after">
    <div class="section det_gallery clear_after">
        <ul class="tabs det_tabs not_style">
            <li class="current"><img src="./img/Books-PNG.png" alt=""/></li>
            <li><img src="./img/Books-PNG.png" alt=""/></li>
            <li><img src="./img/Books-PNG.png" alt=""/></li>
            <li><img src="./img/Books-PNG.png" alt=""/></li>
        </ul>
        <div class="det_box_bl">
            <div class="box det_box" style="display:block;">
                <a href="./img/Books-PNG.png" data-fancybox="images"><img src="./img/Books-PNG.png" alt=""/></a>
            </div>
            <div class="box det_box">
                <a href="./img/Books-PNG.png" data-fancybox="images"><img src="./img/Books-PNG.png" alt=""/></a>
            </div>
            <div class="box det_box">
                <a href="./img/Books-PNG.png" data-fancybox="images"><img src="./img/Books-PNG.png" alt=""/></a>
            </div>
            <div class="box det_box">
                <a href="./img/Books-PNG.png" data-fancybox="images"><img src="./img/Books-PNG.png" alt=""/></a>
            </div>
        </div>
    </div>
    <div class="detail_info">
        <div class="detail_info_top">
            <h1>Серая книга</h1>
            <div class="cat_el_star">
                <img src="./img/star_orange.png" alt=""/>
                <img src="./img/star_orange.png" alt=""/>
                <img src="./img/star_orange.png" alt=""/>
                <img src="./img/star_orange.png" alt=""/>
                <img src="./img/star_gray.png" alt=""/>
            </div>
            <div class="det_price_status_bl">
                <div class="det_price_bl">
                    <div class="det_price">450 руб.</div>
                    <div class="cat_old_price">
                        <div class="price">500 руб.</div>
                        <div class="sale">-10%</div>
                    </div>
                    <a class="favor_bt active" href="">В избранное</a>
                </div>
                <div class="det_status_bl">
                    <div class="det_status_el green">В наличии</div>
                    <div class="det_status_el red">Осталось мало</div>
                    <div class="det_status_el blue">Бесплатная доставка</div>
                </div>
            </div>
        </div>
        <div class="detail_info_bottom">
            <div class="detail_option_list">
                <div class="detail_option_el">Автор:  <a href="">Сергей Серый</a></div>
                <div class="detail_option_el">Год издания:  2018</div>
                <div class="detail_option_el">Издательство:  <a href="">Первый</a>, <a href="">Второй</a></div>
                <div class="detail_option_el">Количество страниц:  123</div>
                <div class="detail_option_el">Артикул:  c123456</div>
                <div class="detail_option_el">Переплет:  Твердый (7-инт)</div>
                <div class="detail_option_el">Возрастное ограничение:  6+</div>
                <div class="detail_option_el">Формат:  170x217 мм</div>
            </div>
        </div>
    </div>
</div>



<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '')):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>