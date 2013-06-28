<?php
/**
 * This file is part of TheCartPress-RussianSetup.
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

function tcp_ru_ad_country_names() {
	global $wpdb;
	$sql = 'ALTER TABLE `' . $wpdb->prefix . 'tcp_countries` ADD COLUMN `ru` VARCHAR(50) NOT NULL AFTER `fr`';
	$wpdb->query( $sql );
	$sql = "UPDATE `" . $wpdb->prefix . "tcp_countries` SET `ru` = CASE `iso`
	WHEN 'AU' THEN 'Австралия'
	WHEN 'AT' THEN 'Австрия'
	WHEN 'AZ' THEN 'Азербайджан'
	WHEN 'AX' THEN 'Аландские острова'
	WHEN 'AL' THEN 'Албания'
	WHEN 'DZ' THEN 'Алжир'
	WHEN 'UM' THEN 'Внешние малые острова (США)'
	WHEN 'VI' THEN 'Американские Виргинские острова'
	WHEN 'AS' THEN 'Американское Самоа'
	WHEN 'AI' THEN 'Ангилья'
	WHEN 'AO' THEN 'Ангола'
	WHEN 'AD' THEN 'Андорра'
	WHEN 'AQ' THEN 'Антарктида'
	WHEN 'AG' THEN 'Антигуа и Барбуда'
	WHEN 'AR' THEN 'Аргентина'
	WHEN 'AM' THEN 'Армения'
	WHEN 'AW' THEN 'Аруба'
	WHEN 'AF' THEN 'Афганистан'
	WHEN 'BS' THEN 'Багамы'
	WHEN 'BD' THEN 'Бангладеш'
	WHEN 'BB' THEN 'Барбадос'
	WHEN 'BH' THEN 'Бахрейн'
	WHEN 'BZ' THEN 'Белиз'
	WHEN 'BY' THEN 'Белоруссия'
	WHEN 'BE' THEN 'Бельгия'
	WHEN 'BJ' THEN 'Бенин'
	WHEN 'BM' THEN 'Бермуды'
	WHEN 'BG' THEN 'Болгария'
	WHEN 'BO' THEN 'Боливия'
	WHEN 'BA' THEN 'Босния и Герцеговина'
	WHEN 'BW' THEN 'Ботсвана'
	WHEN 'BR' THEN 'Бразилия'
	WHEN 'IO' THEN 'Британская территория в Индийском океане'
	WHEN 'VG' THEN 'Британские Виргинские острова'
	WHEN 'BN' THEN 'Бруней'
	WHEN 'BF' THEN 'Буркина-Фасо'
	WHEN 'BI' THEN 'Бурунди'
	WHEN 'BT' THEN 'Бутан'
	WHEN 'VU' THEN 'Вануату'
	WHEN 'VA' THEN 'Ватикан'
	WHEN 'GB' THEN 'Великобритания'
	WHEN 'HU' THEN 'Венгрия'
	WHEN 'VE' THEN 'Венесуэла'
	WHEN 'TL' THEN 'Восточный Тимор'
	WHEN 'VN' THEN 'Вьетнам'
	WHEN 'GA' THEN 'Габон'
	WHEN 'HT' THEN 'Гаити'
	WHEN 'GY' THEN 'Гайана'
	WHEN 'GM' THEN 'Гамбия'
	WHEN 'GH' THEN 'Гана'
	WHEN 'GP' THEN 'Гваделупа'
	WHEN 'GT' THEN 'Гватемала'
	WHEN 'GN' THEN 'Гвинея'
	WHEN 'GW' THEN 'Гвинея-Бисау'
	WHEN 'DE' THEN 'Германия'
	WHEN 'GI' THEN 'Гибралтар'
	WHEN 'HN' THEN 'Гондурас'
	WHEN 'HK' THEN 'Гонконг'
	WHEN 'GD' THEN 'Гренада'
	WHEN 'GL' THEN 'Гренландия'
	WHEN 'GR' THEN 'Греция'
	WHEN 'GE' THEN 'Грузия'
	WHEN 'GU' THEN 'Гуам'
	WHEN 'DK' THEN 'Дания'
	WHEN 'CD' THEN 'ДР Конго'
	WHEN 'DJ' THEN 'Джибути'
	WHEN 'DM' THEN 'Доминика'
	WHEN 'DO' THEN 'Доминиканская Республика'
	WHEN 'EU' THEN 'Флаг ЕС Европейский союз'
	WHEN 'EG' THEN 'Египет'
	WHEN 'ZM' THEN 'Замбия'
	WHEN 'EH' THEN 'Западная Сахара'
	WHEN 'ZW' THEN 'Зимбабве'
	WHEN 'IL' THEN 'Израиль'
	WHEN 'IN' THEN 'Индия Индия'
	WHEN 'ID' THEN 'Индонезия'
	WHEN 'JO' THEN 'Иордания'
	WHEN 'IQ' THEN 'Ирак'
	WHEN 'IR' THEN 'Иран'
	WHEN 'IE' THEN 'Ирландия'
	WHEN 'IS' THEN 'Исландия'
	WHEN 'ES' THEN 'Испания'
	WHEN 'IT' THEN 'Италия'
	WHEN 'YE' THEN 'Йемен'
	WHEN 'KP' THEN 'КНДР'
	WHEN 'CV' THEN 'Кабо-Верде'
	WHEN 'KZ' THEN 'Казахстан'
	WHEN 'KY' THEN 'Каймановы острова'
	WHEN 'KH' THEN 'Камбоджа'
	WHEN 'CM' THEN 'Камерун'
	WHEN 'CA' THEN 'Канада'
	WHEN 'QA' THEN 'Катар'
	WHEN 'KE' THEN 'Кения'
	WHEN 'CY' THEN 'Кипр'
	WHEN 'KG' THEN 'Киргизия'
	WHEN 'KI' THEN 'Кирибати'
	WHEN 'CN' THEN 'КНР'
	WHEN 'CC' THEN 'Кокосовые острова'
	WHEN 'CO' THEN 'Колумбия'
	WHEN 'KM' THEN 'Коморы'
	WHEN 'CR' THEN 'Коста-Рика'
	WHEN 'CI' THEN 'Кот-д’Ивуар'
	WHEN 'CU' THEN 'Куба'
	WHEN 'KW' THEN 'Кувейт'
	WHEN 'LA' THEN 'Лаос'
	WHEN 'LV' THEN 'Латвия'
	WHEN 'LS' THEN 'Лесото'
	WHEN 'LR' THEN 'Либерия'
	WHEN 'LB' THEN 'Ливан'
	WHEN 'LY' THEN 'Ливия'
	WHEN 'LT' THEN 'Литва'
	WHEN 'LI' THEN 'Лихтенштейн'
	WHEN 'LU' THEN 'Люксембург'
	WHEN 'MU' THEN 'Маврикий'
	WHEN 'MR' THEN 'Мавритания'
	WHEN 'MG' THEN 'Мадагаскар'
	WHEN 'YT' THEN 'Майотта'
	WHEN 'MO' THEN 'Макао'
	WHEN 'MK' THEN 'Македония'
	WHEN 'MW' THEN 'Малави'
	WHEN 'MY' THEN 'Малайзия'
	WHEN 'ML' THEN 'Мали'
	WHEN 'MV' THEN 'Мальдивы'
	WHEN 'MT' THEN 'Мальта'
	WHEN 'MA' THEN 'Марокко'
	WHEN 'MQ' THEN 'Мартиника'
	WHEN 'MH' THEN 'Маршалловы Острова'
	WHEN 'MX' THEN 'Мексика'
	WHEN 'MZ' THEN 'Мозамбик'
	WHEN 'MD' THEN 'Молдавия'
	WHEN 'MC' THEN 'Монако'
	WHEN 'MN' THEN 'Монголия'
	WHEN 'MS' THEN 'Монтсеррат'
	WHEN 'MM' THEN 'Мьянма'
	WHEN 'NA' THEN 'Намибия'
	WHEN 'NR' THEN 'Науру'
	WHEN 'NP' THEN 'Непал'
	WHEN 'NE' THEN 'Нигер'
	WHEN 'NG' THEN 'Нигерия'
	WHEN 'AN' THEN 'Нидерландские Антильские острова'
	WHEN 'NL' THEN 'Нидерланды'
	WHEN 'NI' THEN 'Никарагуа'
	WHEN 'NU' THEN 'Ниуэ'
	WHEN 'NC' THEN 'Новая Каледония'
	WHEN 'NZ' THEN 'Новая Зеландия'
	WHEN 'NO' THEN 'Норвегия'
	WHEN 'AE' THEN 'ОАЭ'
	WHEN 'OM' THEN 'Оман'
	WHEN 'CX' THEN 'Остров Рождества'
	WHEN 'CK' THEN 'Острова Кука'
	WHEN 'HM' THEN 'Херд и Макдональд'
	WHEN 'PK' THEN 'Пакистан'
	WHEN 'PW' THEN 'Палау'
	WHEN 'PS' THEN 'Палестина'
	WHEN 'PA' THEN 'Панама'
	WHEN 'PG' THEN 'Папуа — Новая Гвинея'
	WHEN 'PY' THEN 'Парагвай'
	WHEN 'PE' THEN 'Перу'
	WHEN 'PN' THEN 'Острова Питкэрн'
	WHEN 'PL' THEN 'Польша'
	WHEN 'PT' THEN 'Португалия'
	WHEN 'PR' THEN 'Пуэрто-Рико'
	WHEN 'CG' THEN 'Республика Конго'
	WHEN 'RE' THEN 'Regional Flag of Reunion.gif Реюньон'
	WHEN 'RU' THEN 'Россия'
	WHEN 'RW' THEN 'Руанда'
	WHEN 'RO' THEN 'Румыния'
	WHEN 'US' THEN 'США'
	WHEN 'SV' THEN 'Сальвадор'
	WHEN 'WS' THEN 'Самоа'
	WHEN 'SM' THEN 'Сан-Марино'
	WHEN 'ST' THEN 'Сан-Томе и Принсипи'
	WHEN 'SA' THEN 'Саудовская Аравия'
	WHEN 'SZ' THEN 'Свазиленд'
	WHEN 'SJ' THEN 'Флаг Шпицбергена и Ян-Майена Шпицберген и Ян-Майен'
	WHEN 'MP' THEN 'Северные Марианские острова'
	WHEN 'SC' THEN 'Сейшельские Острова'
	WHEN 'SN' THEN 'Сенегал'
	WHEN 'VC' THEN 'Сент-Винсент и Гренадины'
	WHEN 'KN' THEN 'Сент-Китс и Невис'
	WHEN 'LC' THEN 'Сент-Люсия'
	WHEN 'PM' THEN 'Сен-Пьер и Микелон'
	WHEN 'RS' THEN 'Сербия'
	WHEN 'CS' THEN 'Сербия и Черногория (действовал до сентября 2006 года)'
	WHEN 'SG' THEN 'Сингапур'
	WHEN 'SY' THEN 'Сирия'
	WHEN 'SK' THEN 'Словакия'
	WHEN 'SI' THEN 'Словения'
	WHEN 'SB' THEN 'Соломоновы Острова'
	WHEN 'SO' THEN 'Сомали'
	WHEN 'SD' THEN 'Судан'
	WHEN 'SR' THEN 'Суринам'
	WHEN 'SL' THEN 'Сьерра-Леоне'
	WHEN 'SU' THEN 'СССР (действовал до сентября 1992 года)'
	WHEN 'TJ' THEN 'Таджикистан'
	WHEN 'TH' THEN 'Таиланд'
	WHEN 'TW' THEN 'Китайская Республика'
	WHEN 'TZ' THEN 'Танзания'
	WHEN 'TG' THEN 'Того'
	WHEN 'TK' THEN 'Токелау'
	WHEN 'TO' THEN 'Тонга'
	WHEN 'TT' THEN 'Тринидад и Тобаго'
	WHEN 'TV' THEN 'Тувалу'
	WHEN 'TN' THEN 'Тунис'
	WHEN 'TM' THEN 'Туркмения'
	WHEN 'TR' THEN 'Турция'
	WHEN 'UG' THEN 'Уганда'
	WHEN 'UZ' THEN 'Узбекистан'
	WHEN 'UA' THEN 'Украина'
	WHEN 'UY' THEN 'Уругвай'
	WHEN 'FO' THEN 'Фарерские острова'
	WHEN 'FM' THEN 'Микронезия'
	WHEN 'FJ' THEN 'Фиджи'
	WHEN 'PH' THEN 'Филиппины'
	WHEN 'FI' THEN 'Финляндия'
	WHEN 'FK' THEN 'Фолклендские острова'
	WHEN 'FR' THEN 'Франция'
	WHEN 'GF' THEN 'Французская Гвиана'
	WHEN 'PF' THEN 'Французская Полинезия'
	WHEN 'TF' THEN 'Французские Южные и Антарктические Территории'
	WHEN 'HR' THEN 'Хорватия'
	WHEN 'CF' THEN 'ЦАР'
	WHEN 'TD' THEN 'Чад'
	WHEN 'ME' THEN 'Черногория'
	WHEN 'CZ' THEN 'Чехия'
	WHEN 'CL' THEN 'Чили'
	WHEN 'CH' THEN 'Швейцария'
	WHEN 'SE' THEN 'Швеция'
	WHEN 'LK' THEN 'Шри-Ланка'
	WHEN 'EC' THEN 'Эквадор'
	WHEN 'GQ' THEN 'Экваториальная Гвинея'
	WHEN 'ER' THEN 'Эритрея'
	WHEN 'EE' THEN 'Эстония'
	WHEN 'ET' THEN 'Эфиопия'
	WHEN 'ZA' THEN 'ЮАР'
	WHEN 'KR' THEN 'Республика Корея'
	WHEN 'GS' THEN 'Южная Георгия и Южные Сандвичевы острова'
	WHEN 'JM' THEN 'Ямайка'
	WHEN 'JP' THEN 'Япония'
	WHEN 'BV' THEN 'Остров Буве'
	WHEN 'NF' THEN 'Остров Норфолк'
	WHEN 'SH' THEN 'Острова Святой Елены, Вознесения и Тристан-да-Кунья'
	WHEN 'TC' THEN 'Тёркс и Кайкос'
	WHEN 'WF' THEN 'Уоллис и Футуна'
	END";
	$wpdb->query( $sql );
}

if ( isset( $_REQUEST['tcp-russian-configuration'] ) ) :
	$settings = get_option( 'tcp_settings' ); ?>
<div id="message" class="updated">
	<?php if ( isset( $_REQUEST['tcp_number_format'] ) ) : ?>
		<p>Формат вывода чисел - 9.999,9</p><?php
		$settings['decimal_currency']	= 2;
		$settings['decimal_point']		= ',';
		$settings['thousands_separator']	= '.';
	endif; ?>
	<?php if ( isset( $_REQUEST['tcp_currency'] ) ) : ?>
		<p>Обозначение валюты - (RUB)</p><?php
		$settings['currency'] = 'RUB';
	endif; ?>
	<?php if ( isset( $_REQUEST['tcp_currency_format'] ) ) : ?>
		<p>Формат вывода цены - 999 RUB</p><?php
		$settings['currency_layout'] = '%2$s %1$s';
	endif; ?>
	<?php if ( isset( $_REQUEST['tcp_unit_weight'] ) ) : ?>
		<p>Единица веса -  Kg.</p><?php
		$settings['unit_weight'] = 'Kg.';
	endif; ?>
	<?php if ( isset( $_REQUEST['tcp_country_base'] ) ) : ?>
		<p>Место нахождения магазина - Россия (RU).</p><?php
		$settings['country'] = 'RU';
	endif; ?>
	<?php if ( isset( $_REQUEST['tcp_default_tax_country'] ) ) : ?>
		<p>Расчёт налогов, принятый для России (RU).</p><?php
		$settings['default_tax_country'] = 'RU';
	endif; ?>
	<?php if ( isset( $_REQUEST['tcp_add_country_names'] ) ) :
		tcp_ru_ad_country_names(); ?>
		<p>Добавлены названия стран.</p><?php
	endif; ?>
</div>
<?php 
update_option( 'tcp_settings', $settings );
global $thecartpress;
if ( $thecartpress ) $thecartpress->load_settings();
endif; ?>
<style>
div#icon-tcp-ru {
	background: url('<?php echo plugins_url( '../images/ru_32.png', __FILE__ ); ?>') no-repeat center;
}
</style>
<div class="wrap">
	<?php screen_icon( 'tcp-ru' ); ?><h2>Настройки для России</h2>
	<ul class="subsubsub"></ul>
	<div class="clear"></div>
	<p>Данный раздел представляет возможность настройки TheCartPress для использования в Российской Федерации.</p>
	<form method="post">
	<p>Производятся следующие настройки:</p>
	<ul>
		<li><label><input type="checkbox" name="tcp_number_format" checked="true"/> Формат вывода цифр: 9.999,9</label> Текущий показ - <?php tcp_number_format_example( 9999.9, false ); ?></li>
		<li><label><input type="checkbox" name="tcp_currency" checked="true"/> Валюта: RUB. Текущая -  <?php tcp_the_currency(); ?></li>
		<li><label><input type="checkbox" name="tcp_currency_format" checked="true"/> Показ цены: 999 RUB. Текущий - <?php echo tcp_format_the_price( 999 ); ?></li>
		<li><label><input type="checkbox" name="tcp_unit_weight" checked="true"/> Вес единицы: Kg. Текущий вес единицы - <?php tcp_the_unit_weight(); ?></li>
		<li><label><input type="checkbox" name="tcp_country_base" checked="true"/> Расположение магазина: RU. Текущее расположение - <?php global $thecartpress; if ( $thecartpress ) echo $thecartpress->settings['country']; ?></li>
		<li><label><input type="checkbox" name="tcp_default_tax_country" checked="true"/> Расчёт налогов: RU. Текущий расчйт наогов - <?php echo tcp_get_default_tax_country(); ?></li>
		<?php global $wpdb;
		$row = $wpdb->query( 'SHOW COLUMNS FROM ' . $wpdb->prefix . 'tcp_countries WHERE Field LIKE (\'ru\')' );
		if ( ! $row ) : ?>
		<li><label><input type="checkbox" name="tcp_add_country_names" checked="true"/> Добавить названия стран</li>
		<?php endif; ?>
	</ul>
	<input type="submit" value="Принять" name="tcp-russian-configuration" class="button-primary"/>
	</form>
</div>