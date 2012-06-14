<?php

	$russian = array(
	
		/**
		 * Menu items and titles
		 */
	
			'messageboard:board' => "Доска",
			'messageboard:messageboard' => "доска",
			'messageboard:viewall' => "Смотреть все",
			'messageboard:postit' => "Написать",
			'messageboard:history:title' => "история",
			'messageboard:none' => "Пока никто не написал на стене.",
			'messageboard:num_display' => "Число отображаемых записей",
			'messageboard:desc' => "Это стена, которую можно добавить в Ваш профиль и на которой смогут писать Ваши друзья.",
			
			'messageboard:user' => "стену пользователя %s",
	
			'messageboard:history' => "История",
			'messageboard:replyon' => 'ответить',
			
			'messageboard:owner' => '%s\'s message board',
			'messageboard:owner_history' => '%s\'s posts on %s\'s message board',

         /**
	     * Message board widget river
	     **/
	        
	        'messageboard:river:annotate' => "%s что-то написал(а) на Вашей стене.",
	        'messageboard:river:create' => "%s добавил(а) что-то на Вашу стену.",
	        'messageboard:river:update' => "%s обновил(а) что-то на Вашей стене.",
			'messageboard:river:added' => "%s добавил(а) что-то на",
		    'messageboard:river:messageboard' => "стену",
			
		/**
		 * Status messages
		 */
	
			'messageboard:posted' => "Запись на стене размещена.",
			'messageboard:deleted' => "Запись удалена.",
	
		/**
		 * Email messages
		 */
	
			'messageboard:email:subject' => 'У Вас есть новая запись на стене.',
			'messageboard:email:body' => "У Вас есть новая запись на стене от %s. Она гласит:

			
%s


Чтобы посмотреть записи на Вашей стене, нажмите здесь: 

	%s

Чтобы посмотреть польфиль %s, кликните здесь:

	%s

Это письмо составлено роботом. Пожалуйста, не отвечайте на него.",
	
		/**
		 * Error messages
		 */
	
			'messageboard:blank' => "Простите, но Вы должны что-нибудь написать перед размещением записи.",
			'messageboard:notfound' => "Простите, данный пункт не найден.",
			'messageboard:notdeleted' => "Простите, удаление невозможно.",
			'messageboard:somethingwentwrong' => "Что-то пошло не так в процессе отправки Вашего сообщения. Пожалуйста, попробуйте снова.",
	     	     
			'messageboard:failure' => "Простите, при размещении записи произошла ошибка. Попробуйте снова.",
	
	);
					
	add_translation("ru",$russian);

?>