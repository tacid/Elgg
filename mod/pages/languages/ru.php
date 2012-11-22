<?php
/**
 * Pages languages
 *
 * @package ElggPages
 */

$russian = array(

	/**
	 * Menu items and titles
	 */

	'pages' => "Документы",
	'pages:owner' => "Документы %s",
	'pages:friends' => "Документы друзей",
	'pages:all' => "Все документы сайта",
	'pages:add' => "Добавить документ",

	'pages:group' => "Документы группы",
	'groups:enablepages' => 'Включить документы группы',

	'pages:edit' => "Редактировать документы",
	'pages:delete' => "Удалить документы",
	'pages:history' => "Архив",
	'pages:view' => "Просмотреть документ",
	'pages:revision' => "Revision",

	'pages:navigation' => "Навигация",
	'pages:via' => "через документы",
	'item:object:page_top' => 'Top-level pages',
	'item:object:page' => 'Страницы',
	'pages:nogroup' => 'В группе нет документов',
	'pages:more' => 'Еще',
	'pages:none' => '---',

	/**
	* River
	**/

	'river:create:object:page' => '%s создал(а) %s',
	'river:create:object:page_top' => '%s создал(а) %s',
	'river:update:object:page' => '%s обновил(а) %s',
	'river:update:object:page_top' => '%s обновил(а) %s',
	'river:comment:object:page' => '%s комментировал(а) %s',
	'river:comment:object:page_top' => '%s комментировал(а) %s',

	/**
	 * Form fields
	 */

	'pages:title' => 'Заголовок документа',
	'pages:description' => 'Содержимое документа',
	'pages:tags' => 'Теги',
	'pages:access_id' => 'Доступ',
	'pages:write_access_id' => 'Доступ на запись',

	/**
	 * Status and error messages
	 */
	'pages:noaccess' => 'Нет доступа к документу.',
	'pages:cantedit' => 'Вы не можете редактировать этот документ.',
	'pages:saved' => 'Документ сохранен.',
	'pages:notsaved' => 'Документ не может быть сохранен.',
	'pages:error:no_title' => 'Вы должны указать название документа.',
	'pages:delete:success' => 'Ваш документ успешно удален.',
	'pages:delete:failure' => 'Этот документ не может быть удален.',

	/**
	 * Page
	 */
	'pages:strapline' => 'Последнее обновление %s от пользователя %s',

	/**
	 * History
	 */
	'pages:revision:subtitle' => 'Версия создана %s пользователем %s',

	/**
	 * Widget
	 **/

	'pages:num' => 'Число отображаемых документов',
	'pages:widget:description' => "Это список Ваших документов.",

	/**
	 * Submenu items
	 */
	'pages:label:view' => "Просмотр",
	'pages:label:edit' => "Редактировать",
	'pages:label:history' => "История",

	/**
	 * Sidebar items
	 */
	'pages:sidebar:this' => "Этот документ",
	'pages:sidebar:children' => "Дочерний документ",
	'pages:sidebar:parent' => "Создатель",

	'pages:newchild' => "Создать дочерний документ",
	'pages:backtoparent' => "Назад к '%s'",
);

add_translation("ru", $russian);