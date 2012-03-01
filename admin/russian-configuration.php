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
</div>
<?php 
update_option( 'tcp_settings', $settings );
global $thecartpress;
if ( $thecartpress ) $thecartpress->load_settings();
endif; ?>
<div class="wrap">
	<h2>Настройки для России</h2>
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
	</ul>
	<input type="submit" value="Принять" name="tcp-russian-configuration" class="button-primary"/>
	</form>
</div>
