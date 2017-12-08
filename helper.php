<?php
/**
 * Вспомогательный класс для модуля "Топ по сумме пожертвований".
 * Исполняет следующий запрос:
 * SELECT username, donat FROM aasgz_users WHERE donat > 0 ORDER BY donat DESC;
 */
 
class ModTopHelper
{ 
    public static function getTop()
    {
        $db = JFactory::getDbo();

		$query = $db->getQuery(true);

		$query->select($db->quoteName(array('username', 'donat')));
		$query->from($db->quoteName('#__users'));
		$query->where($db->quoteName('donat') . ' > '. $db->quote('0'));
		$query->order('donat DESC');

		$db->setQuery($query);

		$result = $db->loadRowList();

		return $result;
    }
}