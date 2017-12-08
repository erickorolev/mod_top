<?php
/**
 * Модуль "Топ по сумме пожертвований". В модуле отображается список всех зарегистрированных пользователей.
 * Список сортируется по уровню опыта. Список отображается в виде таблицы с колонками: № - логин - опыт; 
 */
 
defined('_JEXEC') or die;

require_once dirname(__FILE__) . '/helper.php';

$top = ModTopHelper::getTop();

require JModuleHelper::getLayoutPath('mod_top');