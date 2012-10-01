<?php
/*
Plugin Name: TheCartPress Russian Setup
Plugin URI: http://extend.thecartpress.com/ecommerce-plugins/russian-ecommerce-setup/
Description: TheCartPress Russian Setup
Version: 1.2.5
Author: TheCartPress team and Vladimir Vasilenko
Author URI: http://thecartpress.com
License: GPL
Parent: thecartpress
*/

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

define( 'TCP_RUSSIAN_FOLDER', dirname( __FILE__ ) . '/languages/' );

class TCPRussianSetup {

	function __construct() {
		if ( is_admin() ) {
			add_action( 'admin_menu', array( &$this, 'admin_menu' ), 99 );
			//add_filter( 'mu_dropdown_languages', array( &$this, 'mu_dropdown_languages' ) , 10, 3 );
		}
		add_filter( 'locale', array( &$this, 'locale' ) );
		add_filter( 'load_textdomain_mofile', array( $this, 'load_textdomain_mofile' ), 10, 2 );
		add_action( 'tcp_states_loading', array( $this, 'tcp_states_loading' ) );
	}

	function locale( $locale ) {
		return 'ru_RU';
	}

	function admin_menu() {
		global $thecartpress;
		if ( $thecartpress ) {
			$base = $thecartpress->get_base_tools();
			add_submenu_page( $base, 'Russia', 'Россия', 'tcp_edit_settings', dirname( __FILE__ ) . '/admin/russian-configuration.php' );
		}
	}

	function load_textdomain_mofile( $moFile, $domain ) {
		if ( 'tcp' == substr( $domain, 0, 3 ) ) {
			$wplang = get_option( 'WPLANG', get_locale() );
			if ( strlen( $wplang ) == 0 ) $wplang = get_locale();
			$is_russian = 'ru_' == substr( $wplang, 0, 3 );
			if ( !$is_russian && function_exists( 'tcp_get_current_language_iso' ) ) $is_russian = 'ru' == tcp_get_current_language_iso();
			if ( $is_russian ) {
				$new_mofile = TCP_RUSSIAN_FOLDER . $domain . '-' . $wplang . '.mo';
				if ( is_readable( $new_mofile ) ) return $new_mofile;
			}
		}
		return $moFile;
	}

	function tcp_states_loading() { ?>
, 'RU' : {
'RU-AD' : 'Адыгея республика / Adygea republic',
'RU-AL' : 'Алтай республика / Altai republic',
'RU-ALT' : 'Алтайский край / Altai krai',
'RU-AMU' : 'Амурская область / Amur oblast',
'RU-ARK' : 'Архангельская область / Arkhangelsk oblast',
'RU-AST' : 'Астраханская область / Astrakhan oblast',
'RU-BA' : 'Башкортостан республика / Bashkortostan republic',
'RU-BEL' : 'Белгородская область / Belgorod oblast',
'RU-BRY' : 'Брянская область / Bryansk oblast',
'RU-BU' : 'Бурятия республика / Buryatia republic',
'RU-CE' : 'Чеченская республика / Chechen republic',
'RU-CHE' : 'Челябинская область / Chelyabinsk oblast',
'RU-CHU' : 'Чукотский АО / Chukotka AO',
'RU-CU' : 'Чувашская республика / Chuvashia republic',
'RU-DA' : 'Дагестан республика / Dagestan republic',
'RU-IN' : 'Ингушетия республика / Ingushetia republic',
'RU-IRK' : 'Иркутская область / Irkutsk oblast',
'RU-IVA' : 'Ивановская область / Ivanovo oblast',
'RU-KAM' : 'Камчатский край / Kamchatka krai',
'RU-KB' : 'Кабардино-Балкарская республика / Kabardino-Balkar republic',
'RU-KC' : 'Карачаево-Черкесская республика / Karachay-Cherkess republic',
'RU-KDA' : 'Краснодарский край / Krasnodar krai',
'RU-KEM' : 'Кемеровская область / Kemerovo oblast',
'RU-KGD' : 'Калининградская область / Kaliningrad oblast',
'RU-KGN' : 'Курганская область / Kurgan oblast',
'RU-KHA' : 'Хабаровский край / Khabarovsk krai',
//'RU-KHM' : '',
'RU-KIR' : 'Кировская область / Kirov oblast',
'RU-KK' : 'Хакасия республика / Khakassia republic',
'RU-KL' : 'Калмыкия республика / Kalmykia republic',
'RU-KLU' : 'Калужская область / Kaluga oblast',
'RU-KO' : 'Коми республика / Komi republic',
'RU-KOS' : 'Костромская область / Kostroma oblast',
'RU-KR' : 'Карелия республика / Karelia republic',
'RU-KRS' : 'Курская область / Kursk oblast',
'RU-KYA' : 'Красноярский край / Krasnoyarsk krai',
'RU-LEN' : 'Ленинградская область / Leningrad oblast',
'RU-LIP' : 'Липецкая область / Lipetsk oblast',
'RU-MAG' : 'Магаданская область / Magadan oblast',
'RU-ME' : 'Марий Эл республика / Mari El republic',
'RU-MO' : 'Мордовия республика / Mordovia republic',
'RU-MOS' : 'Московская область / Moscow oblast',
'RU-MOW' : 'Москва / Moscow',
'RU-MUR' : 'Мурманская область / Murmansk oblast',
'RU-NEN' : 'Ненецкий автономный округ',
'RU-NGR' : 'Новгородская область / Novgorod oblast',
'RU-NIZ' : 'Нижегородская область / Nizhny Novgorod oblast',
'RU-NVS' : 'Новосибирская область / Novosibirsk oblast',
'RU-OMS' : 'Омская область / Omsk oblast',
'RU-ORE' : 'Оренбургская область / Orenburg oblast',
'RU-ORL' : 'Орловская область / Oryol oblast',
'RU-PER' : 'Пермский край / Perm krai',
'RU-PNZ' : 'Пензенская область / Penza oblast',
'RU-PRI' : 'Приморский край / Primorski krai',
'RU-PSK' : 'Псковская область / Pskov oblast',
'RU-ROS' : 'Ростовская область / Rostov oblast',
'RU-RYA' : 'Рязанская область / Ryazan oblast',
'RU-SA' : 'Саха (Якутия) республика / Sakha republic',
'RU-SAK' : 'Сахалинская область / Sakhalin oblast',
'RU-SAM' : 'Самарская область / Samara oblast',
'RU-SAR' : 'Саратовская область / Saratov oblast',
'RU-SE' : 'Северная Осетия-Алания республика / North Ossetia-Alania republic',
'RU-SMO' : 'Смоленская область / Smolensk oblast',
'RU-SPE' : 'Санкт-Петербург / Saint Petersburg',
'RU-STA' : 'Ставропольский край / Stavropol krai',
'RU-SVE' : 'Свердловская область / Sverdlovsk oblast',
'RU-TA' : 'Татарстан республика / Tatarstan republic',
'RU-TAM' : 'Тамбовская область / Tambov oblast',
'RU-TOM' : 'Томская область / Tomsk oblast',
'RU-TUL' : 'Тульская область / Tula oblast',
'RU-TVE' : 'Тверская область / Tver oblast',
'RU-TY' : 'Тыва республика / Tuva republic',
'RU-TYU' : 'Тюменская область / Tyumens oblast',
'RU-UD' : 'Удмуртская республика / Udmurtia republic',
'RU-ULY' : 'Ульяновская область / Ulyanovsk oblast',
'RU-VGG' : 'Волгоградская область / Volgograd oblast',
'RU-VLA' : 'Владимирская область / Vladimir oblast',
'RU-VLG' : 'Вологодская область / Vologda oblast',
'RU-VOR' : 'Воронежская область / Voronezh oblast',
//'RU-YAN' : '',
'RU-YAR' : 'Ярославская область / Yaroslavl oblast',
//'RU-YEV' : '',
'RU-ZAB' : 'Забайкальский край',
} <?php
	}
}

new TCPRussianSetup();
?>