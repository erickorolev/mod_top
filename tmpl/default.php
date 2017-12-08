<?php
/**
 * Шаблон модуля "Топ по сумме пожертвований".
 */
 
 defined('_JEXEC') or die; ?>
 
 <?php
// Подключение javascript файлов
$document = JFactory::getDocument();
$document->addScript('/modules/mod_top/js/hide.js');
?>
 
<table id="donat">
<tr>
<td style="width: 33px;" align="center"><strong>№</strong></td>
<td style="width: 148px;"><strong>Ник</strong></td>
<td style="width: 107px;"><strong>Рубли</strong></td>
</tr>
<?php

$position = 1;	

	foreach ($top as $row) {
		echo '<tr">';
		echo '<td>' . $position . '</td>';
        echo '<td>' . $row['0'] . '</td>';
		echo '<td>' . $row['1'] . '</td>';
		echo '</tr>';
		$position ++;
	}
?>
</table>
<input id="show" type="button" value="Раскрыть">
<input id="hide" type="button" value="Скрыть">