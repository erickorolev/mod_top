<?php
/**
 * Шаблон модуля "Топ по сумме пожертвований".
 * Шаблон отображает таблицу в области не более 220px.
 * Содержимое таблицы превышает заданный размер области,
 * поэтому задается скроллинг для прокрутки области.
 */
 
 defined('_JEXEC') or die; ?>
 
 <?php
 // Подключение css стилей модуля
 $document = JFactory::getDocument();
 // Подключение стиля для скроллирования области
 $document->addStyleSheet('/modules/mod_top/css/scroll.css');
?>

<h3>Топ по по сумме пожертвований</h3>

<div class="scroll">
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
</div>