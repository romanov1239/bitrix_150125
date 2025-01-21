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



    <div class="standart_width">

        <? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
            <?= $arResult["NAV_STRING"] ?><br/>
        <? endif; ?>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="cont_el" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                <i><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"/></i>
                <p><?= $arItem["NAME"] ?></p>
                <?= $arItem["PREVIEW_TEXT"] ?>
            </div>

        <? endforeach; ?>
        <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
            <br/><?= $arResult["NAV_STRING"] ?>
        <? endif; ?>


    <div class="gray_bg application_form_bl">
        <div class="standart_width">
            <div class="title">Консультация</div>
            <div class="small_standart_width">
                <div class="application_form">
                    <form>
                        <div class="application_el textarea">
                            <textarea placeholder="Вопрос или сообщение"></textarea>
                        </div>
                        <div class="application_el">
                            <input type="text" placeholder="Ваше имя"/>
                        </div>
                        <div class="application_el">
                            <input class="error" type="email" placeholder="Email"/>
                        </div>
                        <div class="application_el">
                            <input class="true" type="tel" placeholder="Телефон"/>
                        </div>
                        <div class="popup_form prava styler">
                            <label>
                                <input type="checkbox"/>
                                <span>Я принимаю <a href="">условия передачи данных</a></span>
                            </label>
                        </div>
                        <div class="application_bt">
                            <a class="red_bt" href="">Отправить</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
