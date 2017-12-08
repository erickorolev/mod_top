<?php
/**
 * Вспомогательный класс для модуля "Топ по сумме пожертвований".
 */
 
class ModTopHelper
{
    /**
     * Запрос к базе данных на построение списка всех учеников с сортировокой по сумме пожертвований.
     * Ученик - это зарегистрированный пользователь, который оплатил обучение,
     * т.е. у которго количество пожертвований(donat) больше нуля.
     * @return array
     */
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