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
<div class="about_produce_bl">
    <div class="about_produce_tit">О книге «Серая книга»</div>
    <div class="about_produce_txt">
        <?=$arResult["DETAIL_TEXT"];?>
    </div>
</div>



