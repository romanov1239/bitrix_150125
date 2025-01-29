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

$arProps=$arResult['PROPERTIES'];

?>



<div class="detail_info_bl clear_after">
    <div class="section det_gallery clear_after">
        <?if ($arProps['MORE_PHOTO']['VALUE']):?>
        <ul class="tabs det_tabs not_style">
            <?foreach ($arProps['MORE_PHOTO']['VALUE'] as $i=>$val):?>
            <?$path=CFile::GetPath($val);?>
            <li <?if (!$i):?>class="current"<?endif?>><img src="<?=$path?>" alt=""/></li>
            <?endforeach;?>

        </ul>
        <div class="det_box_bl">
            <?foreach ($arProps['MORE_PHOTO']['VALUE'] as $i=>$val):?>

            <div class="box det_box" <?if (!$i):?>style="display:block;" <?endif;?>>
                <?$path=CFile::GetPath($val);?>
                <a href="<?=$path?>" data-fancybox="images"><img src="<?=$path?>" alt=""/></a>
            </div>
            <?endforeach;?>

        </div>
        <?endif?>
    </div>
    <div class="detail_info">
        <div class="detail_info_top">
            <h1><?= $arResult["NAME"];?></h1>
            <div class="cat_el_star">
                <?for($i=1;$i<=5;$i++):?>
                    <?if($arProps['RATING']['VALUE']>=$i):?>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
                    <?else:?>


                        <img src="<?=SITE_TEMPLATE_PATH?>/img/star_gray.png" alt=""/>
                    <?endif;?>
                <?endfor;?>
            </div>
            <div class="det_price_status_bl">
                <div class="det_price_bl">
                    <?if(!$arProps['DISCOUNT']['VALUE']):?>
                        <div class="det_price"><?=$arProps['PRICE']['VALUE']?>руб.</div>
                    <?else:?>
                        <div class="det_price"><?=$price_new=$arProps['PRICE']['VALUE']-($arProps['PRICE']['VALUE']*$arProps['DISCOUNT']['VALUE']/100)?></div>
                        <div class="cat_old_price">
                            <div class="price"><?=$arProps['PRICE']['VALUE']?>руб.</div>
                            <div class="sale">-<?=$arProps['DISCOUNT']['VALUE']?>%</div>
                        </div>
                    <?endif;?>
                    <a class="favor_bt active" href="">В избранное</a>
                </div>
                <div class="det_status_bl">
                    <?if($arProps['COUNT']['VALUE']>1):?>
                    <div class="det_status_el green">В наличии</div>
                    <?elseif ($arProps['COUNT']['VALUE']==1):?>
                    <div class="det_status_el red">Осталось мало</div>
                    <?else:?>
                    <div class="det_status_el red">Под заказ</div>
                    <?endif;?>


                    <div class="det_status_el blue">Бесплатная доставка</div>
                </div>
            </div>
        </div>
        <div class="detail_info_bottom">
            <div class="detail_option_list"><?
                foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
                <div class="detail_option_el">

                <?=$arProperty["NAME"]?>:&nbsp;
                <?if(is_array($arProperty["DISPLAY_VALUE"])):?>
                <?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
                <?else:?>
                <?=$arProperty["DISPLAY_VALUE"];?>
                <?endif?>
                </div>
                <?endforeach;?>

            </div>
        </div>
    </div>
</div>
<div class="about_produce_bl">
    <div class="about_produce_tit">О книге «Серая книга»</div>
    <div class="about_produce_txt">
        <?=$arResult["DETAIL_TEXT"];?>
    </div>
</div>



