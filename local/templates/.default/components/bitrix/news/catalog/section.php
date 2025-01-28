<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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

<?php
//из апи 1с-биртрикс на сайте.
if (CModule::IncludeModule('iblock')) {
    $arSection = CIBlockSection::GetList(['LEFT_MARGIN' => 'ASC'], ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y', 'CODE' => $arResult['VARIABLES']['SECTION_CODE']])->fetch();
    $dbS = CIBlockSection::GetList(['LEFT_MARGIN' => 'ASC'], ['IBLOCK_ID' => $arParams['IBLOCK_ID'], 'ACTIVE' => 'Y', 'SECTION_ID' => $arSection['ID']]);
    $countS = $dbS->SelectedRowsCount();

}

?>
<? if ($countS): ?>

    <? $APPLICATION->IncludeComponent(
        "bitrix:catalog.section.list",
        "catalog",
        array(
            "ADD_SECTIONS_CHAIN" => 'Y',
            "CACHE_FILTER" => $arParams["CACHE_FILTER"],
            "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
            "CACHE_TIME" => $arParams["CACHE_TIME"],
            "CACHE_TYPE" => $arParams["CACHE_TYPE"],
            "COUNT_ELEMENTS" => "N",
            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
            "FILTER_NAME" => "sectionsFilter",
            "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
            "IBLOCK_ID" => $arParams["IBLOCK_ID"],
            "SECTION_CODE" => $arResult['VARIABLES']['SECTION_CODE'],
            "SECTION_FIELDS" => array("", ""),
            "SECTION_ID" => $_REQUEST["SECTION_ID"],
            "SECTION_URL" => "",
            "SECTION_USER_FIELDS" => array("", ""),
            "SHOW_PARENT_NAME" => "Y",
            "TOP_DEPTH" => "2",
            "VIEW_MODE" => "TILE"
        ),
        $component
    ); ?>
<?endif;?>
<? if(!$countS): ?>

    <div class="content clear_after">
        <div class="content_l">
            <div class="filter_bl">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:catalog.smart.filter",
                    "catalog",
                    Array(
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "DISPLAY_ELEMENT_COUNT" => "Y",
                        "FILTER_NAME" => "arrFilter",
                        "FILTER_VIEW_MODE" => "vertical",
                        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
                        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
                        "PAGER_PARAMS_NAME" => "arrPager",
                        "POPUP_POSITION" => "left",
                        "PREFILTER_NAME" => "smartPreFilter",
                        "SAVE_IN_SESSION" => "N",
                        "SECTION_CODE" => $arResult['VARIABLES']['SECTION_CODE'],
                        "SECTION_DESCRIPTION" => "-",
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],
                        "SECTION_TITLE" => "-",
                        "SEF_MODE" => "N",
                        "TEMPLATE_THEME" => "blue",
                        "XML_EXPORT" => "N"
                    ),
                    $component
                );?>
                <img src="/img/filter.png" alt=""/>
            </div>
        </div>
        <div class="content_c">
            <div class="sorting_bl">
                <span>Сортировать:</span>

                <?
                if ($_GET['by']) {
                    $by=$_GET['by'];
                    setcookie($by,'by', time()+(60*10),'/');
                }
                elseif ($_COOKIE['by']) {
                    $by=$_COOKIE['by'];
                }
                else {
                    $by=$arParams['SORT_BY1'];
                }
                if ($_GET['sort']) {
                    $sort=$_GET['sort'];
                   setcookie($sort,'sort', time()+(60*10),'/');
                }
                elseif ($_COOKIE['sort']) {
                    $sort=$_COOKIE['sort'];

                }

                else {
                    $sort=$arParams['SORT_ORDER1'];
                }

                $arSort=[
                    'PROPERTY_PRICE'=>'по цене',
                    'PROPERTY_RATING'=>'по рейтингу',
                    'ID'=>'по новизне',
                ];

                foreach ($arSort as $k=>$v){
                    $sort_new='ASC';
                    $class='';
                    if ($by==$k) {
                        $sort_new=($sort=='ASC')?'DESC':'ASC';
                        $class='active';
                        $class.=($sort_new=='ASC')?' max':' min';
                    }
                    elseif ($k=='PROPERTY_RATING'){
                        $sort_new='DESC';
                    }
                    echo $k.''.$sort_new;
                    $url=$APPLICATION->GetCurPageParam('by='.$k.'&sort='. $sort_new, ['by','sort']);
                    echo $class;
                    ?><a class="sorting_el <?=$class?>" href="<?=$url?>"><i></i><?=$v?></a><?

                }


                ?><?/*
                <a class="sorting_el active min" href=""><i></i>По цене</a>
                <a class="sorting_el active max" href=""><i></i>По рейтингу</a>
                <a class="sorting_el" href=""><i></i>По новизне</a>*/?>
            </div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "catalog_index",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "N",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "N",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("",""),
                    "FILTER_NAME" => "arrFilter",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "5",
                    "IBLOCK_TYPE" => "catalog",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "20",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("ACTION",""),
                    "SET_BROWSER_TITLE" => "N",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "N",
                    "SET_META_KEYWORDS" => "N",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "N",
                    "SHOW_404" => "N",
                    "SORT_BY1" => $by,
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => $sort,
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
            </div>

        </div>



<? endif; ?>