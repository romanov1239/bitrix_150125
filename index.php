<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

				<div class="title">


                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_populartovar.php"
                        )
                    );?><br>

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_populartovar.php"
                        )
                    );?>

                    Популярные товары</div>
				<div class="catalog_list">
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/produce1.png" alt=""/></a>
							<div class="cat_el_status">
								<div class="red">акция</div>
								<div class="green">новинка</div>
								<div class="blue">бестселлер</div>
							</div>
						</div>
						<div class="cat_el_star">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">

							<div class="cat_price">221 руб.</div>
							<div class="cat_old_price">
								<div class="price">287 руб.</div>
								<div class="sale">-22%</div>
							</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Красная Книга</a></div>
							<div class="cat_el_avtor">Константин  Красновский</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/produce2.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">221 руб.</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Зеленая Книга</a></div>
							<div class="cat_el_avtor">Зенаид Зеленовский</div>
						</div>
						<a class="favor_bt active" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/produce3.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">90 руб.</div>
							<div class="cat_old_price">
								<div class="price">100 руб.</div>
								<div class="sale">-10%</div>
							</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Фиолетовая книга</a></div>
							<div class="cat_el_avtor">Филипп Фиолетов</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/produce4.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">450 руб.</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Серая Книга</a></div>
							<div class="cat_el_avtor">Сергей Серый</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/produce5.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">900 000 руб.</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Цвет настроения синий</a></div>
							<div class="cat_el_avtor">Филипп Киркоров</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
					<div class="catalog_el">
						<div class="cat_el_img">
							<a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/produce6.png" alt=""/></a>
						</div>
						<div class="cat_el_star">
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_orange.png" alt=""/>
							<img src="<?=SITE_TEMPLATE_PATH?>/img/star_gray.png" alt=""/>
						</div>
						<div class="cat_el_price">
							<div class="cat_price">653 руб.</div>
						</div>
						<div class="cat_el_name">
							<div class="cat_el_tit"><a href="">Blackstar</a></div>
							<div class="cat_el_avtor">Тимур Ильдарович</div>
						</div>
						<a class="favor_bt" href="">В избранное</a>
					</div>
				</div>
			</div>
		</div>
		<div class="white_bg">

			<div class="standart_width">
				<div class="title">Преимущества</div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "advantage_index",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
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
                        "DISPLAY_DATE" => "Y",
                        "DISPLAY_NAME" => "Y",
                        "DISPLAY_PICTURE" => "Y",
                        "DISPLAY_PREVIEW_TEXT" => "Y",
                        "DISPLAY_TOP_PAGER" => "N",
                        "FIELD_CODE" => array("", ""),
                        "FILTER_NAME" => "",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "IBLOCK_ID" => $_REQUEST["ID"],
                        "IBLOCK_TYPE" => "othher",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
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
                        "PROPERTY_CODE" => array("", ""),
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "N",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "N",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER1" => "DESC",
                        "SORT_ORDER2" => "ASC",
                        "STRICT_SECTION_CHECK" => "N"
                    )
                );?>
				<div class="advantage_list">
					<div class="advantage_el">
						<div class="advantage_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/advantage1.png" alt=""/></div>
						<div class="advantage_tit">Первые среди всех.</div>
						<div class="advantage_txt">А также реплицированные с зарубежных источников, современные исследования могут быть объединены в целые кластеры себе подобных.</div>
					</div>
					<div class="advantage_el">
						<div class="advantage_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/advantage2.png" alt=""/></div>
						<div class="advantage_tit">Качественный контент.</div>
						<div class="advantage_txt">Ясность нашей позиции очевидна: сплоченность команды профессионалов способствует подготовке и реализации новых предложений!</div>
					</div>
					<div class="advantage_el">
						<div class="advantage_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/advantage3.png" alt=""/></div>
						<div class="advantage_tit">Знания великих.</div>
						<div class="advantage_txt">Значимость этих проблем настолько очевидна, что экономическая повестка сегодняшнего дня создает предпосылки для анализа существующих паттернов поведения.</div>
					</div>
					<div class="advantage_el">
						<div class="advantage_img"><img src="<?=SITE_TEMPLATE_PATH?>/img/advantage4.png" alt=""/></div>
						<div class="advantage_tit">Практика.</div>
						<div class="advantage_txt">Прежде всего, реализация намеченных плановых заданий позволяет выполнить важные задания по разработке укрепления моральных ценностей.</div>
					</div>
				</div>
			</div>
		</div>
		<div class="about_bl">
			<div class="about_img">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/about.png" alt=""/>
			</div>
			<div class="about_txt">
				<div class="h2">О компании</div>
				<p>Повседневная практика показывает, что реализация намеченных плановых заданий обеспечивает актуальность соответствующих условий активизации.</p>
				<p>Предварительные выводы неутешительны: существующая теория однозначно фиксирует необходимость поэтапного и последовательного развития общества. 
				В частности, курс на социально-ориентированный национальный проект способствует подготовке и реализации системы обучения кадров, соответствующей насущным потребностям.</p>
				<a class="blue_bt" href="">Узнать больше</a>
			</div>
		</div>
		<div class="white_bg">
			<div class="standart_width">
				<div class="title">Новости</div>
				<div class="news_list">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:news.list",
                        "news_index",
                        Array(
                            "ACTIVE_DATE_FORMAT" => "j F Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
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
                            "DISPLAY_DATE" => "Y",
                            "DISPLAY_NAME" => "Y",
                            "DISPLAY_PICTURE" => "Y",
                            "DISPLAY_PREVIEW_TEXT" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => array("SHOW_COUNTER",""),
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "3",
                            "IBLOCK_TYPE" => "info",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "3",
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
                            "PROPERTY_CODE" => array("",""),
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "SORT",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                        )
                    );?>
					<div class="news_el">
						<div class="news_el_img"><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/news1.png" alt=""/></a></div>
						<div class="news_el_cont">
							<div class="news_el_tit"><a href="">Выбранный нами инновационный путь однозначно фиксирует преимущества</a></div>
							<div class="news_el_txt">Мы вынуждены отталкиваться от того, что понимание сути ресурсосберегающих технологий обеспечивает актуальность кластеризации усилий.</div>
							<div class="news_el_data">11 октября, 2018</div>
							<div class="news_el_look">37</div>
						</div>
					</div>
					<div class="news_el">
						<div class="news_el_img"><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/news2.png" alt=""/></a></div>
						<div class="news_el_cont">
							<div class="news_el_tit"><a href="">Новая модель организационной деятельности</a></div>
							<div class="news_el_txt">Приятно, граждане, наблюдать, как ключевые особенности структуры проекта лишь добавляют фракционных разногласий и представлены в исключительно положительном свете.</div>
							<div class="news_el_data">11 октября, 2018</div>
							<div class="news_el_look">377</div>
						</div>
					</div>
					<div class="news_el">
						<div class="news_el_img"><a href=""><img src="<?=SITE_TEMPLATE_PATH?>/img/news3.png" alt=""/></a></div>
						<div class="news_el_cont">
							<div class="news_el_tit"><a href="">Выбранный нами инновационный путь однозначно фиксирует преимущества</a></div>
							<div class="news_el_txt">Мы вынуждены отталкиваться от того, что понимание сути ресурсосберегающих технологий обеспечивает актуальность кластеризации усилий.</div>
							<div class="news_el_data">11 октября, 2018</div>
							<div class="news_el_look">7</div>
						</div>
					</div>
				</div>
				<div class="all_bt_bl">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/inc_news.php"
                        )
                    );?>
					<a class="all_bt" href="">Все новости</a>
				</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>