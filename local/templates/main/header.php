<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<title><?$APPLICATION->ShowTitle();?></title>
<?$APPLICATION->ShowHead();?>

<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/screen.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/font/font.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.fancybox.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.bxslider.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.formstyler.css");?>
<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.formstyler.theme.css");?>

<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-3.1.1.min.js");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.fancybox.min.js");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.bxslider.min.js");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.formstyler.min.js");?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js");

$isIndex=$APPLICATION->GetCurPage() == SITE_DIR;

?>

	<!--
	<link href="./css/screen.css" rel="stylesheet" type="text/css" >
	<link href="./font/font.css" rel="stylesheet" type="text/css" >
	<link href="./css/jquery.fancybox.css" rel="stylesheet" type="text/css" >
	<link href="./css/jquery.bxslider.css" rel="stylesheet" type="text/css" >
	<link href="./css/jquery.formstyler.css" rel="stylesheet" type="text/css" >
	<link href="./css/jquery.formstyler.theme.css" rel="stylesheet" type="text/css" >
	<script type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="./js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="./js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="./js/jquery.formstyler.min.js"></script>
	<script type="text/javascript" src="./js/main.js"></script>
-->

</head>
<body>
hghghg
	<div id='panel'><?$APPLICATION->ShowPanel();?></div>
	<header>
		<div class="top_head_white_bl">
			<div class="standart_width">
				<div class="top_head_logo">

                    .<?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_logo.php"
                        )
                    );?>

                    </div>
				<div class="top_head_tel_bl">
					<div class="top_head_tel">

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/inc_phonedata.php"
                            )
                        );?>

                        .<?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => "/include/inc_phonedata.php"
                            )
                        );?>


					</div>
				</div>
				<div class="top_head_favor_bl">
					<div class="top_head_favor">
						<a href="">Избранное</a><span>10</span>
					</div>
				</div>
				<div class="top_head_bt"><a class="green_bt" data-fancybox data-src="#call_back" href="javascript:;">Обратный звонок</a></div>
			</div>
		</div>
		<div class="blue_head_info_bl">
			<div class="standart_width clear_after">
				<div class="header_menu_bl">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "head2",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N"
                        )
                    );?>
					<ul class="header_menu">
						<li>
							<a class="menu_lvl1_bt arrow active" href=""><span>Каталог</span></a>
							<ul class="menu_lvl2">

								<li>
									<a class="menu_lvl2_bt arrow active" href="">Учебная литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a class="active" href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
								<li>
									<a class="menu_lvl2_bt arrow" href="">Детская литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
								<li>
									<a class="menu_lvl2_bt arrow" href="">Художественная литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
								<li>
									<a class="menu_lvl2_bt arrow" href="">Бизнес-литература</a>
									<ul class="menu_lvl3">
										<li><a href="">Для школьников</a></li>
										<li><a href="">Дополнительное образование</a></li>
										<li><a href="">Книги для дошкольников</a></li>
										<li><a href="">Подготовка к ЕГЭ</a></li>
										<li><a href="">Подготовка к ОГЭ (ГИА)</a></li>
										<li><a href="">Словари и разговорники</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a class="menu_lvl1_bt" href=""><span>Акции</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>Доставка</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>О компании</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>Новости</span></a></li>
						<li><a class="menu_lvl1_bt" href=""><span>Контакты</span></a></li>
					</ul>
				</div>
				<div class="head_search_bl">
					<form>
						<input type="text" placeholder="Поиск ..."/>
						<input type="submit" value="найти"/>
					</form>
				</div>
			</div>
		</div>
        <?if($isIndex):?>
		<div class="index_slider_bl">
			<ul class="index_slider">
				<li>
					<div class="index_slider_el" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/index_slider_bg.png);">
						<div class="standart_width index_slider_cont">
							<div class="ind_slid_txt_bl">
								<div class="ind_slid_tit">Осенний ценопад</div>
								<div class="ind_slid_txt">Перспективное планирование способствует повышению качества поставленных обществом задач. В частности, синтетическое тестирование прекрасно подходит для реализации стандартных подходов.</div>
								<a class="red_bt" href="">Узнать подробнее</a>
							</div>
							<div class="ind_slid_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/index_slider1.png" alt=""/></div>
						</div>
					</div>
				</li>
				<li>
					<div class="index_slider_el" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/img/index_slider_bg.png);">
						<div class="standart_width index_slider_cont">
							<div class="ind_slid_txt_bl">
								<div class="ind_slid_tit">Осенний ценопад</div>
								<div class="ind_slid_txt">Перспективное планирование способствует повышению качества поставленных обществом задач. В частности, синтетическое тестирование прекрасно подходит для реализации стандартных подходов.</div>
								<a class="red_bt" href="">Узнать подробнее</a>
							</div>
							<div class="ind_slid_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/index_slider1.png" alt=""/></div>
						</div>
					</div>
				</li>
			</ul>
		</div>
        <?endif;?>
	</header>
	<section>
	    <div class="bread_crumbs_bl">
			<div class="standart_width">
        <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "page", Array(
	"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
	),
	false
);?>
</div>
					</div>
		<div class="gray_bg">
			<div class="standart_width">
                <?if (!$isIndex):?>
                <div class="title"><?$APPLICATION->ShowTitle(false);?></div>
                <?endif;?>



