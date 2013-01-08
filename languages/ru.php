<?php

	$russian = array(

		/**
		 * Sites
		 */
	
			'item:site' => "Сайты",
	
		/**
		 * Sessions
		 */
			
			'login' => "Войти",
			'loginok' => "Добро пожаловать!",
			'loginerror' => "Пароль или имя не найдены. Вход невозможен.",
			
			'login:empty' => "Имя пользователя и пароль не требуется.",
			'login:baduser' => "Не удается загрузить учетную запись.",
			'auth:nopams' => "Внутренняя ошибка.Метод аутентификации пользователей не установлен.",
			
			'logout' => "Выйти",
			'logoutok' => "Вы вышли.",
			'logouterror' => "Не удалось выйти. Пожалуйста, повторите попытку.",
	
			'loggedinrequired' => "Извините, страница недоступна незарегистрированным посетителям.",
			'adminrequired' => "Извините, страница доступна только администраторам.",
			'membershiprequired' => "Вы должны быть членом этой группы, чтобы посмотреть эту страницу.",
		/**
		 * Errors  !!!!!!!!!!!!!!!!!!!! полностью этот раздел заменить из файла en и перевести 
		 
		  еще смотри раздел Friends самый низ там децл перевести
		 */
			'exception:title' => "Критическая ошибка.",

	'actionundefined' => "Запрошенное действие (%s) не определено.",
	'actionnotfound' => "Действие файла %s не найдено.",
	'actionloggedout' => "Извините, но Вы не можете выполнить это действие, необходим вход.",
	'actionunauthorized' => 'Вы не авторизованы.',

	'InstallationException:SiteNotInstalled' => 'Error! Сайт '
		. ' не настроен или база не работает.',
	'InstallationException:MissingLibrary' => 'Невозможно загрузить %s',
	'InstallationException:CannotLoadSettings' => 'Движок не может загрузить конфигурационный файл. Его не существует или у Вас не хватает прав доступа.',

	'SecurityException:Codeblock' => "Ошибка доступа для выполнения кода.",
	'DatabaseException:WrongCredentials' => "Движок не может подключиться к базе с Вашими полномочиями. Проверьте конфигурационный файл.",
	'DatabaseException:NoConnect' => "Движок не может подключиться к базе '%s', проверьте создана ли база и есть ли к ней доступ.",
	'SecurityException:FunctionDenied' => "В доступе к функции '%s' отказано.",
	'DatabaseException:DBSetupIssues' => "Возникли следующие проблемы: ",
	'DatabaseException:ScriptNotFound' => "Движок не может найти запрошенный скрипт базы %s.",
	'DatabaseException:InvalidQuery' => "Неверный запрос.",

	'IOException:FailedToLoadGUID' => "Неудалось загрузить новый %s с GUID:%d",
	'InvalidParameterException:NonElggObject' => "Передан не объект в конструктор объектов движка!",
	'InvalidParameterException:UnrecognisedValue' => "Неопознанное значение передано в конструктор.",

	'InvalidClassException:NotValidElggStar' => "GUID:%d неверный %s",

	'PluginException:MisconfiguredPlugin' => "%s неверно заданный плагин.",
	'PluginException:CannotStart' => '%s (guid: %s) не может запуститься.  Причина: %s',
	'PluginException:InvalidID' => "%s неверный ID плагина.",
	'PluginException:InvalidPath' => "%s неверный путь до плагина.",
	'PluginException:InvalidManifest' => 'Неправильный manigest в плагине %s',
	'PluginException:InvalidPlugin' => '%s неправильный плагин.',
	'PluginException:InvalidPlugin:Details' => '%s неправильный плагин: %s',

	'ElggPlugin:MissingID' => 'Отсутствует ID плагина (guid %s)',
	'ElggPlugin:NoPluginPackagePackage' => 'Отсутствует УпаковщикПлагиновДвижка для ID плагина %s (guid %s)',

	'ElggPluginPackage:InvalidPlugin:MissingFile' => 'Отсутствует файл %s в пакете',
	'ElggPluginPackage:InvalidPlugin:InvalidDependency' => 'Недопустимый тип зависимости "%s"',
	'ElggPluginPackage:InvalidPlugin:InvalidProvides' => 'Недопустимый тип предоставляет "%s"',
	'ElggPluginPackage:InvalidPlugin:CircularDep' => 'Недопустимая %s зависимость "%s" в плагине %s.',

	'ElggPlugin:Exception:CannotIncludeFile' => 'Не могу подключить %s в плагине %s (guid: %s) at %s.  Проверьте права!',
	'ElggPlugin:Exception:CannotRegisterViews' => 'Не могу открыть папку views в плагине %s (guid: %s) at %s.  Проверьте права!',
	'ElggPlugin:Exception:CannotRegisterLanguages' => 'Не могу зарегистрировать язык в плагине %s (guid: %s) at %s.  Проверьте права!',
	'ElggPlugin:Exception:NoID' => 'Нет ID для плагина %s!',

	'PluginException:ParserError' => 'Ошибка при анализе manifest с API функциями %s в плагине %s.',
	'PluginException:NoAvailableParser' => 'Не могу найти parser для манифеста API %s в плагине %s.',
	'PluginException:ParserErrorMissingRequiredAttribute' => "Отсутствуют необходимые '%s' атрибута в манифесте плагина %s.",

	'ElggPlugin:Dependencies:Requires' => 'Требует',
	'ElggPlugin:Dependencies:Suggests' => 'Предлагает',
	'ElggPlugin:Dependencies:Conflicts' => 'Конфликты',
	'ElggPlugin:Dependencies:Conflicted' => 'Конфликтующее',
	'ElggPlugin:Dependencies:Provides' => 'Обеспечивает',
	'ElggPlugin:Dependencies:Priority' => 'Приоритет',

	'ElggPlugin:Dependencies:Elgg' => 'Версия движка',
	'ElggPlugin:Dependencies:PhpExtension' => 'PHP расширение: %s',
	'ElggPlugin:Dependencies:PhpIni' => 'PHP настройки: %s',
	'ElggPlugin:Dependencies:Plugin' => 'Плагин: %s',
	'ElggPlugin:Dependencies:Priority:After' => 'После %s',
	'ElggPlugin:Dependencies:Priority:Before' => 'До %s',
	'ElggPlugin:Dependencies:Priority:Uninstalled' => '%s не установлено',
	'ElggPlugin:Dependencies:Suggests:Unsatisfied' => 'Отсутствует',

	'ElggPlugin:InvalidAndDeactivated' => '%s недействительный плагин.',

	'InvalidParameterException:NonElggUser' => "В конструктор ДвижокUser передан пользователь, не принадлежащий Движку!",

	'InvalidParameterException:NonElggSite' => "В конструктор ДвижокSite передан сайт, не принадлежащий Движку!",

	'InvalidParameterException:NonElggGroup' => "В конструктор Передан ДвижокGroup передана группа, не принадлежащая Движку!",

	'IOException:UnableToSaveNew' => "Не удается сохранить новый %s",

	'InvalidParameterException:GUIDNotForExport' => "GUID не был указан во время экспорта, это не должно никогда случаться.",
	'InvalidParameterException:NonArrayReturnValue' => "Обьект переданный функцией сериализации не является параметром массива",

	'ConfigurationException:NoCachePath' => "Не установлен путь к кешу!",
	'IOException:NotDirectory' => "%s не является папкой.",

	'IOException:BaseEntitySaveFailed' => "Не удается сохранить данные нового объекта!",
	'InvalidParameterException:UnexpectedODDClass' => "import() передал неожиданный ODD клас",
	'InvalidParameterException:EntityTypeNotSet' => "Вы должны заполнить тип обьекта.",

	'ClassException:ClassnameNotClass' => "%s не является %s.",
	'ClassNotFoundException:MissingClass' => "Класс '%s' не найдет, отсутствует плагин?",
	'InstallationException:TypeNotSupported' => "Тип %s Не поддерживается. Это вызывает ошибку в Вашей установке, причиной может быть неполное обновление системы.",

	'ImportException:ImportFailed' => "Не удается импортировать элемент %d",
	'ImportException:ProblemSaving' => "Возникла проблема при сохранении %s",
	'ImportException:NoGUID' => "Новый объект создан, но ему не назначен GUID, этого не должно случатся.",

	'ImportException:GUIDNotFound' => "Обьект '%d' не найден.",
	'ImportException:ProblemUpdatingMeta' => "Возникла проблема при обновлении '%s' в объекте '%d'",

	'ExportException:NoSuchEntity' => "Нет такого обьекта с GUID:%d",

	'ImportException:NoODDElements' => "Не найдены элементы OpenDD в данных для импорта, импорт отменен.",
	'ImportException:NotAllImported' => "Не все элементы были импортированы.",

	'InvalidParameterException:UnrecognisedFileMode' => "Неопознанный режим файла '%s'",
	'InvalidParameterException:MissingOwner' => "Файл %s (file guid:%d) (owner guid:%d) должен иметь владельца!",
	'IOException:CouldNotMake' => "Не могу создать %s",
	'IOException:MissingFileName' => "Вы должны ввести имя перед открытием файла.",
	'ClassNotFoundException:NotFoundNotSavedWithFile' => "Файловый архив не найден или класс не сохранен с файлом!",
	'NotificationException:NoNotificationMethod' => "Не определен метод уведомления.",
	'NotificationException:NoHandlerFound' => "Не найден обработчик для '%s' или он не был запущен.",
	'NotificationException:ErrorNotifyingGuid' => "Возникла ошибка во время уведомления %d",
	'NotificationException:NoEmailAddress' => "Не удается получить email адрес к GUID:%d",
	'NotificationException:MissingParameter' => "Не найден обязательный параметр, '%s'",

	'DatabaseException:WhereSetNonQuery' => "Where-условие содержит не WhereQueryComponent",
	'DatabaseException:SelectFieldsMissing' => "Не найдены поля в запрое смены стиля",
	'DatabaseException:UnspecifiedQueryType' => "Неопознанный или неопределенный тип запроса.",
	'DatabaseException:NoTablesSpecified' => "Не указаны таблицы для запроса.",
	'DatabaseException:NoACL' => "В запросе не указан контроль доступа",

	'InvalidParameterException:NoEntityFound' => "Объект не найден, он не существует или у Вас нет к нему доступа.",

	'InvalidParameterException:GUIDNotFound' => "GUID:%s не найден, или у Вас нет к нему доступа.",
	'InvalidParameterException:IdNotExistForGUID' => "Извините, '%s' не существует для guid:%d",
	'InvalidParameterException:CanNotExportType' => "Извините, система не знает как экспортировать '%s'",
	'InvalidParameterException:NoDataFound' => "Данные не найдены.",
	'InvalidParameterException:DoesNotBelong' => "Не принадлежит объекту.",
	'InvalidParameterException:DoesNotBelongOrRefer' => "Не принадлежит объекту или не ссылается на объект.",
	'InvalidParameterException:MissingParameter' => "Не найден параметр, Вы должны указать GUID.",
	'InvalidParameterException:LibraryNotRegistered' => '%s незарегистрированная библиотека',

	'APIException:ApiResultUnknown' => "Результат API - неопределенного типа, этого не должно случатся.",
	'ConfigurationException:NoSiteID' => "Не указан ID сайта.",
	'SecurityException:APIAccessDenied' => "Извините, API доступ отключен администратором.",
	'SecurityException:NoAuthMethods' => "Не найдены методы проверки которые могли бы проверить API запрос.",
	'SecurityException:UnexpectedOutputInGatekeeper' => 'Неожиданный вывод в gatekeeper call. Остановлено выполнение для безопасности.',
	'InvalidParameterException:APIMethodOrFunctionNotSet' => "Метод или функция не указаны в запросе при вызове expose_method()",
	'InvalidParameterException:APIParametersArrayStructure' => "Параметры структуры массива некорректны для вывода в expose method '%s'",
	'InvalidParameterException:UnrecognisedHttpMethod' => "Нераспознанный http метод %s для api метода '%s'",
	'APIException:MissingParameterInMethod' => "Пропущен параметр %s в методе %s",
	'APIException:ParameterNotArray' => "%s не является массивом.",
	'APIException:UnrecognisedTypeCast' => "Неопознанный тип при передаче %s для переменной '%s' в метод '%s'",
	'APIException:InvalidParameter' => "Найден неверный параметр для '%s' в методе '%s'.",
	'APIException:FunctionParseError' => "%s(%s) имеет ошибку синтаксиса.",
	'APIException:FunctionNoReturn' => "%s(%s) невернула значение.",
	'APIException:APIAuthenticationFailed' => "Ошибка вызванного метода для API аутентификации",
	'APIException:UserAuthenticationFailed' => "Ошибка вызванного метода для User аутетификации",
	'SecurityException:AuthTokenExpired' => "Значение Аутентификация не найдено, неверное или истекло.",
	'CallException:InvalidCallMethod' => "%s должен вызываться используя '%s'",
	'APIException:MethodCallNotImplemented' => "Вызов метода '%s' не выполнен.",
	'APIException:FunctionDoesNotExist' => "Функция метода '%s' не вызывается",
	'APIException:AlgorithmNotSupported' => "Алгоритм '%s' не поддерживается или отключен.",
	'ConfigurationException:CacheDirNotSet' => "Директория кеша 'cache_path' не указана.",
	'APIException:NotGetOrPost' => "Метод запроса должен быть GET или POST",
	'APIException:MissingAPIKey' => "Отсутствует API ключ",
	'APIException:BadAPIKey' => "Неверный API ключ",
	'APIException:MissingHmac' => "Отсутствует X-Движок-hmac header",
	'APIException:MissingHmacAlgo' => "Отсутствует X-Движок-hmac-algo header",
	'APIException:MissingTime' => "Отсутствует X-Движок-time header",
	'APIException:MissingNonce' => "Отсутствует X-Движок-nonce header",
	'APIException:TemporalDrift' => "X-Движок-time слишком далеко в прошлом или будущем. Ошибка периода.",
	'APIException:NoQueryString' => "Нет данных в строке запроса",
	'APIException:MissingPOSTHash' => "Отсутствует X-Elgg-posthash header",
	'APIException:MissingPOSTAlgo' => "Отсутствует X-Elgg-posthash_algo header",
	'APIException:MissingContentType' => "Отсутствует тип содержимого для POST данных",
	'SecurityException:InvalidPostHash' => "Хеш данных POST неверный - Ожидалось %s но получили %s.",
	'SecurityException:DupePacket' => "Повторная подпись пакета.",
	'SecurityException:InvalidAPIKey' => "Неверный или отсутствует API ключ.",
	'NotImplementedException:CallMethodNotImplemented' => "Метод вызова '%s' на данный момент не поддерживается.",

	'NotImplementedException:XMLRPCMethodNotImplemented' => "XML-RPC метод вызова '%s' не реализован.",
	'InvalidParameterException:UnexpectedReturnFormat' => "Вызов метода '%s' вернул неожиданный результат.",
	'CallException:NotRPCCall' => "Вызов не является правильным вызовом XML-RPC",

	'PluginException:NoPluginName' => "Имя плагина не найдено",

	'SecurityException:authenticationfailed' => "Пользователь не может быть идентифицирован",

	'CronException:unknownperiod' => '%s - неизвестный период.',

	'SecurityException:deletedisablecurrentsite' => 'Вы не можете удалить или заблокировать сайт, который сейчас просматриваете.',

	'RegistrationException:EmptyPassword' => 'Поле пароля не может быть пустым.',
	'RegistrationException:PasswordMismatch' => 'Пароли должны совпадать!',
	'LoginException:BannedUser' => 'Вы забанены и не можете войти!',
	'LoginException:UsernameFailure' => 'Ошибка авторизации. Проверьте имя пользователя и пароль.',
	'LoginException:PasswordFailure' => 'Ошибка авторизации. Проверьте имя пользователя и пароль.',
	'LoginException:AccountLocked' => 'Ваш акаунт заблокирован. Обратитесь к администрации.',

	'memcache:notinstalled' => 'Модуль PHP memcache не установлен, для начала Вы должны установить php5-memcache',
	'memcache:noservers' => 'Нет memcache-серверов, определите их в переменной $CONFIG->memcache_servers',
	'memcache:versiontoolow' => 'Memcache требует как минимум версию %s для работы, у Вас же - %s',
	'memcache:noaddserver' => 'Поддержка множества серверов не разрешена, Вам может потребоваться обновление библиотеки PECL memcache',

	'deprecatedfunction' => 'Внимание: этот код использует устаревшую функцию \'%s\' и несовместим с этой версией Движка',

	'pageownerunavailable' => 'Внимание: вледелец страницы %d недоступен!',
	'viewfailure' => 'Был внутренний сбой в представлении %s',
	'changebookmark' => 'Измените вашу закладку для этой страницы',
		/**
		 * API
		 */
			'system.api.list' => "Список всех доступных вызовов API в системе.",
			'auth.gettoken' => "Этот вызов API позволяет пользователю входить, возвращая авторизующий токен, который может быть использован вместо имени/пароля для идентификации будущих вызовов.",
		
		/**
		 * User details
		  */

			'name' => "Отображаемое имя (Внимание, доступно публично!)",
			'email' => "Электронный адрес",
			'username' => "Логин",
			'loginusername' => "Логин или email",
			'password' => "Пароль",
			'passwordagain' => "Пароль (повтор для проверки)",
			'admin_option' => "Сделать этого пользователя администратором?",
	
		/**
		 * Access
		 */
	
			'PRIVATE' => "Только себе",
			'LOGGED_IN' => "Зарегистрированным",
			'PUBLIC' => "ПУБЛИЧНЫЙ",
			'access:friends:label' => "Друзьям",
			'access' => "Доступ",
	
		/**
		 * Dashboard and widgets
		 */
	
			'dashboard' => "Моя панель",
			'dashboard:nowidgets' => "Ваша информационная панель - шлюз к сайту. Нажмите 'Редактировать страницу' для добавления новых элементов, чтобы Вы были в курсе всего происходимого на сайте.",

			'widgets:add' => 'Добавить новые элементы на панель',
			'widgets:add:description' => "<b>Нажмите на элементы, которые Вы хотите добавить из Галереи элементов, переместите их туда где хотите их видеть. 
Для удаления элемента нажмите крестик в его окне.
Кстати, менять элементы можно хоть каждый день.</b>",
			'widgets:position:fixed' => '(увы, никак не передвинуть)',
			'widget:unavailable' => 'Вы уже добавили этот элемент',
			'widget:numbertodisplay' => 'Кол-во записей',
			
			'widget:delete' => 'Закрыть %s',
			'widget:edit' => 'Настройки элемента',
			
			'widgets' => "Элементы",
			'widget' => "Элемент",
			'item:object:widget' => "Элементы",
			'widgets:save:success' => "Элемент успешно сохранен.",
			'widgets:save:failure' => "Ошибка сохранения элемента. Попытайтесь снова.",
			'widgets:add:success' => "Элемент был добавлен",
			'widgets:add:failure' => "Не удалось добавить элемент",
			'widgets:move:failure' => "Не удается переместить элемент",
			'widgets:remove:failure' => "Не удается удалить элемент",
	
		/**
		 * Groups
		 */
	
			'group' => "Группа", 
			'item:group' => "Группы",
	
		/**
		 * Users
		 */

			'user' => "Пользователь",
			'item:user' => "Пользователей",
	
		/**
		 * Friends
		 */
	
			'friends' => "Друзья",
			'friends:yours' => "Ваши друзья",
			'friends:owned' => "Друзья пользователя %s",
			'friend:add' => "Добавить в друзья",
			'friend:remove' => "Убрать из друзей",
	
			'friends:add:successful' => "Вы успешно добавили пользователя %s в друзья.",
			'friends:add:failure' => "Не удается добавить пользователя %s в друзья. Пожалуйста повторите попытку.",
	
			'friends:remove:successful' => "Вы успешно удалили пользователя %s с Ваших друзей.",
			'friends:remove:failure' => "Не удается удалить пользователя %s с Ваших друзей. Пожалуйста, повторите попытку.",
	
			'friends:none' => "Этот пользователь еще никого не добавил в друзья.",
			'friends:none:you' => "Вы еще никого не добавили в друзья. Ищите пользователей с интересами, подобными Вашим, чтобы добавить их в друзья.",
	
			'friends:none:found' => "Друзей не найдено.",
	
			'friends:of:none' => "Никто еще не добавил этого пользователя в друзья.",
			'friends:of:none:you' => "Никто еще не добавил Вас в друзья. Добавляйте информацию, заполните Ваш профиль, чтобы другие пользователи нашли Вас.",
	
			'friends:of:owned' => "Чей друг",
			
			'friends:of' => "Чей друг",
			'friends:collections' => "Группы друзей",
			'collections:add' => "Новая группа",
			
			
			'friends:num_display' => "Показывать количество друзей",
			'friends:icon_size' => "Размер изображения",
			'friends:tiny' => "очень маленькое",
			'friends:small' => "маленькое",
			
			
			'friends:collections:add' => "Создать группу друзей",
			'friends:addfriends' => "Добавить друзей",
			'friends:collectionname' => "Название группы",
			'friends:collectionfriends' => "Друзей в группе",
			
			'friends:collectionedit' => "Редактировать эту группу",
			'friends:nocollections' => "У Вас еще нет групп.",
			'friends:collectiondeleted' => "Ваша группа удалена.",
			'friends:collectiondeletefailed' => "Не удается удалить группу. У Вас не прав доступа, или возникла другая ошибка.",
			'friends:collectionadded' => "Ваша группа успешно создана",
			'friends:nocollectionname' => "Вы должны назвать группу перед ее созданием.",
			'friends:collections:members' => "Пользователи в группе",
			'friends:collections:edit' => "Редактировать группу",
			'friends:collections:edited' => "Изменение сохранено.",
			'friends:collection:edit_failed' => 'Не удалось сохранить изменение :(',
		
	        'friends:river:created' => "%s добавил(а) элемент, отображающий друзей.",
	        'friends:river:updated' => "%s обновил(а) элемент, отображающий друзей.",
	        'friends:river:delete' => "%s удалил(а) элемент, отображающий друзей.",
	        'friends:river:add' => "%s добавил(а) в друзья пользователя ",
			
			'friendspicker:chararray' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', //от с этим бида-бида АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЫЭЮЯ
			
			'avatar' => 'Фото',
			'avatar:create' => 'Сохранить изменения',
			'avatar:edit' => 'Редактировать аватар  ',
			'avatar:preview' => 'Просмотр миниатюры',
			'avatar:upload' => 'Загрузить новую фотографию',
			'avatar:current' => 'Текущия фотография',
			'avatar:crop:title' => 'Редактирование миниатюры',
			'avatar:upload:instructions' => "Вы можете загрузить сюда собственную фотографию. Вы можете изменять её так часто, как хотелось бы. Поддерживаются форматы (GIF, JPG или PNG)",
			'avatar:create:instructions' => 'Выделите область на основной фотографии, которая будет отображаться в миниатюрах на сайте.Предварительный просмотр миниатюры появиться в окне справа.Когда вас устроит ваша миниатюра, нажмите внизу кнопку \'<b>Сохранить изменения</b>\'.Эта миниатюра будет использоваться по всему сайту в качестве аватара.',
			'avatar:upload:success' => 'Фотография загруженна :D',
			'avatar:upload:fail' => 'Неудалось загрузить фотографию =\\',
			'avatar:resize:fail' => 'Изменение размера миниатюры не удалось',
			'avatar:crop:success' => 'Успешное изменение миниатюры :D',
			'avatar:crop:fail' => 'Изменение миниатюры не удалось =\\',
			
			'profile:edit' => 'Редактировать профиль',
			'profile:aboutme' => "О себе",
			'profile:description' => "Напишите о себе :",
			'profile:briefdescription' => "Надпись под именем",
			'profile:location' => "Город",
			'profile:skills' => "Деятельность",
			'profile:interests' => "Интересы(вводить через запятую)",
			'profile:contactemail' => "Контактный email",
			'profile:phone' => "Домашний телефон",
                        'profile:mobile' => "Мобильный телефон",
                        'profile:website' => "Личный сайт",
			'profile:twitter' => "Twitter",
			'profile:saved' => "Ваши изменения были успешно сохранены.",
			
			'admin:appearance:profile_fields' => 'Редактирование Профиля',
			'profile:edit:default' => 'Сбросить профиль?',
			'profile:label' => "Название строки",
			'profile:type' => "Тип строки",
			'profile:editdefault:delete:fail' => 'Востановить профиль по умолчанию не получилось.',
			'profile:editdefault:delete:success' => 'Профиль по умолчанию удален!',
			'profile:defaultprofile:reset' => 'Профиль сброшен по умолчанию.',
			'profile:resetdefault' => 'Перезагрузить профиль по умолчанию',
			'profile:explainchangefields' => "Вы можете заменить существующие поля профиля используя форму ниже. \n\n Можете изменить поле профиля, например, 'Любимая комманда', потом выбрать тип поля (пр. текст, ссылка, теги), и нажать на кнопку 'Добавить'. Чтобы изменить порядок полей перетащите его мышкой. Для редактирования - нажмите на текст. \n\n В любое время вы можете сбросить порядок полей по умлочанию, но вы потеряете всю информацию, которую вводили.",
			'profile:editdefault:success' => 'Пункт успешно добавлен в профиль',
			'profile:editdefault:fail' => 'Профиль по умолчанию не может быть сохранен',
	
		/**
		 * Feeds
		 */
			'feed:rss' => 'Подписаться на канал',
		
		/**
		/* links
		 */
		 
		 	'link:view' => 'ссылка',
			'link:view:all' => 'Просмотреть все',
	
		/**
		 * River
		 */
		 
			'river' => "Лента но",			
			'river:friend:user:default' => "%s добавил(а) в друзья %s",
			'river:update:user:avatar' => '%s изменил(а) аватар',
			'river:noaccess' => 'У вас нет разрешения для просмотра',
			'river:posted:generic' => '%s написал(а)',
			'riveritem:single:user' => 'пользователь',
			'riveritem:plural:user' => 'пользователи',
			'river:ingroup' => 'в группе %s',
			'river:none' => 'Нет активности',
			
			'river:widget:title' => "Лента",
			'river:widget:description' => "Нет записей",
			'river:widget:type' => "Активность",
			'river:widgets:all' => 'На всем сайте',
			'river:widgets:friends' => 'Друзей',
			
		/**
		 * Notifications
		 */
			'notifications:usersettings' => "Настройки уведомления",
			'notifications:methods' => "Вы хотите получать уведомления на Ваш электронный адрес?",
	
			'notifications:usersettings:save:ok' => "Настройки уведомления успешно сохранены.",
			'notifications:usersettings:save:fail' => "Возникла ошибка при сохранении настроек уведомления.",
			
			'user.notification.get' => 'Возврат к настройкам уведомлений для данного пользователя',
			'user.notification.set' => 'Установка настроек уведомлений для данного паользователя',	
			
			
		/**
		 * Search
		 */
	
			'search' => "Поиск",
			'searchtitle' => "Поиск: %s",
			'users:searchtitle' => "Поиск пользователей: %s",
			'groups:searchtitle' => "Поиск групп: %s",
			'advancedsearchtitle' => "%s результатов совпадает с запросом '%s'",
			'notfound' => "Ничего не найдено",
			'next' => "Вперёд",
			'previous' => "Назад",
	
			'viewtype:change' => "Изменить вид вывода",
			'viewtype:list' => "Список",
			'viewtype:gallery' => "Галерея",
	
			'tag:search:startblurb' => "Записи, совпадающие с запросом '%s':",

			'user:search:startblurb' => "Пользователи, совпадающие с запросом '%s:",
			'user:search:finishblurb' => "Подробнее",
			
			'group:search:startblurb' => "Группы, совпадающие с запросом '%s':",
			'group:search:finishblurb' => "Нажмите для продолжения.",
			'search:go' => 'Искать',
			'userpicker:only_friends' => 'Только друзья',
		
	
		/**
		 * Account
		 */
	
			'account' => "Аккаунт",
			'settings' => "Настройки",
			'tools' => "Ещё",
            	
			'register' => "Регистрация",
			'registerok' => "Вы успешно зарегистрировались на %s. Для активации аккаунта, пожалуйста, потвердите Ваш электронный адрес, нажав на ссылке в письме, которое мы Вам отправили.",
			'registerbad' => "Ваша регистрация приостановлена. Логин уже существует, Ваши пароли не совпадают, или логин или пароль слишком краткие.",
			'registerdisabled' => "Регистрация отключена администратором.",
	
					
			'registration:notemail' => 'Почему-то нам кажется, что Вы указали неверный электронный адрес.',
			'registration:userexists' => 'Этот логин уще существует',
			'registration:usernametooshort' => 'Ваш логин должен состоять минимум из 4 символов.',
			'registration:passwordtooshort' => 'Пароль должен состоять минимум из 6 символов.',
			'registration:dupeemail' => 'Такой электронный адрес уже зарегистрирован.',
			'registration:invalidchars' => 'Простите, имя пользователя содержит запрещенные символы.',
			'registration:emailnotvalid' => 'Простите, введенный Вами электронный адрес неверен.',
			'registration:passwordnotvalid' => 'Простите, введенный Вами пароль не подходит.',
			'registration:usernamenotvalid' => 'Простите, введенный Вами логин не подходит.',
	
			'adduser' => "Добавить пользователя",
			'adduser:ok' => "Вы успешно добавили нового пользователя.",
			'adduser:bad' => "Не удается создать нового пользователя.",
			
			'item:object:reported_content' => "Жалобы",
	
			'user:set:name' => "Настройки аккаунта",
			'user:name:label' => "Отображаемое имя (Внимание, доступно публично!)",
			'user:name:success' => "Отображаемое имя изменено.",
			'user:name:fail' => "Не удается изменить имя в системе.",
	
			'user:set:password' => "Пароль аккаунта",
			'user:current_password:label' => 'Старый пароль',
			'user:password:label' => "Ваш новый пароль",
			'user:password2:label' => "Повтор нового пароля",
			'user:password:success' => "Пароль изменен",
			'user:password:fail' => "Не удается изменить пароль в системе.",
			'user:password:fail:notsame' => "Пароли не совпадают!",
			'user:password:fail:tooshort' => "Пароль должен быть длиннее.",
			'user:password:fail:incorrect_current_password' => 'Старый пароль введен неверно.',
			'user:resetpassword:unknown_user' => 'Пользователь неизвестен.',
			'user:resetpassword:reset_password_confirm' => 'К Вам на электронный адрес придет новый пароль.',

			'user:set:language' => "Настройки языка",
			'user:language:label' => "Язык интерфейса",
			'user:language:success' => "Настройки языка обновлены.",
			'user:language:fail' => "Ошибка сохранения смены языка.",
	
			'user:username:notfound' => 'Логин %s не найден.',
	
			'user:password:lost' => 'Забыли пароль?',
			'user:password:resetreq:success' => 'Успешный запрос нового пароля, письмо на Ваш электронный адрес отправлено',
			'user:password:resetreq:fail' => 'Ошибка запроса нового пароля.',
	
			'user:password:text' => 'Для генерации нового пароля, введите Ваш логин ниже. Мы вышлем Вам письмо на Ваш электронный адрес.',
			
			'user:persistent' => 'Запомнить меня',
			'walled_garden:welcome' => 'Добро пожаловать в',
			

		/**
		 * Administration
		 */
		 
			'menu:page:header:administer' => 'Администратор',
			'menu:page:header:configure' => 'Конфигурация',
			'menu:page:header:develop' => 'Разработка',
			'menu:page:header:default' => 'Другое',
			
			'admin:view_site' => 'На сайт',
			'admin:loggedin' => 'Вы вошли как %s',
			'admin:menu' => 'Меню',
			
			'admin:configuration:success' => "Ваши настройки сохранены.",
			'admin:configuration:fail' => "Ошибка при сохранении настроек.",
			
			'admin:unknown_section' => 'Неправильная админ Раздел',
	
			'admin' => "Админ",
			'admin:description' => "Панель администрирования помогает контролировать все возможности системы, от управления пользователями до настроек плагинов. Нажмите ниже чтобы начать.",
			
			'admin:statistics' => "Статистика",
			'admin:statistics:overview' => 'Обзор',
			
			'admin:appearance' => 'Внешний вид',
			'admin:utilities' => 'Утилиты',
			
			'admin:users' => "Управление пользователями",
			'admin:users:online' => 'Сейчас в online',
			'admin:users:newest' => 'Последние зарегистрированые',
			'admin:users:add' => 'Добавить нового пользователя',
			'admin:users:description' => "Эта админ-панель позволяет контролировать настройки пользователей.Выберите опцию ниже, чтобы начать работу.",
			'admin:users:adduser:label' => "Нажмите сюда для добовления нового пользователя",
			'admin:users:opt:linktext' => "Настройка пользователей...",
			'admin:users:opt:description' => "Настройка пользователей и информацию об аккаунте.",
			'admin:users:find' => 'Найдено',

			'admin:settings' => 'Настройки',
			'admin:settings:basic' => 'Основные настройки',
			'admin:settings:advanced' => 'Дополнительные настройки',
			'admin:site:description' => "Это панель администратора позволяет управлять глобальными настройками. Выберите опцию ниже, чтобы начать работу.",
			'admin:site:opt:linktext' => "Конфигурация сайта...",
			'admin:site:access:warning' => "Изменение доступа влияет только на разрешения на контент, созданный в будущем.",
			
			'admin:dashboard' => 'Главная панель',
			'admin:widget:online_users' => 'Пользователи оnline',
			'admin:widget:online_users:help' => 'Список пользователей которые сейчас в сети',
			'admin:widget:new_users' => 'Новые пользователи',
			'admin:widget:new_users:help' => 'Список недавно зарегистрированых пользователей',
			'admin:widget:content_stats' => 'Статистика контента',
			'admin:widget:content_stats:help' => 'Контент созданный пользователей',
			'widget:content_stats:type' => 'Тип контента',
			'widget:content_stats:number' => 'Номер',
			
			'admin:widget:admin_welcome' => 'Добро пожаловать',
			'admin:widget:admin_welcome:help' => "Краткое введение в админку",
			'admin:widget:admin_welcome:intro' =>
'Добро пожаловать!Прямо сейчас вы смотрите на приборную панель администратора.Она \'полезна для мониторинга\' того что сейчас происходит на сайте.',

			'admin:widget:admin_welcome:admin_overview' =>
			"Навигация по панели администратора осуществляется при помощи меню с права. Она организована в"
			. " Три раздела:
			<dl>
		<dt> Администрирование</dt><dd>Для повседневных задач, таких как мониторинг,проверка кто находится в сети и просмотр статистики.</dd>
				<dt>Конфигурация</dt><dd>Для отдельных задач, таких как настройка сайта или управление плагинами.</dd>
		<dt>Разработка</dt><dd>Для разработчиков, которые создают плагины или темы. (Требует включения плагина разрабочика.)</dd>
	</dl>
	",
			
			// argh,это криво вклеено
	'admin:widget:admin_welcome:outro' => '<br />Незабудьте проверить имеющиеся ресурсы через ссылки и удачного дня!',
	
			'admin:footer:faq' => 'Администрация FAQ',
			'admin:footer:manual' => 'Мануал администрации',
			'admin:footer:community_forums' => 'Форум подержки',
			'admin:footer:blog' => 'Блог',
			
			'admin:plugins:category:all' => 'Все плагины',
			'admin:plugins:category:active' => 'Включеные плагины',
			'admin:plugins:category:inactive' => 'Выключеные плагины',
			'admin:plugins:category:admin' => 'Плагины администратора',
			'admin:plugins:category:bundled' => 'Комплектные',
			'admin:plugins:category:content' => 'Содержащие',
			'admin:plugins:category:development' => 'Разработка',
			'admin:plugins:category:enhancement' => 'Улучшения',
			'admin:plugins:category:api' => 'Сервис/API',
			'admin:plugins:category:communication' => 'Комуникации',
			'admin:plugins:category:security' => 'Безопасность и Спам',
			'admin:plugins:category:social' => 'Социальные',
			'admin:plugins:category:multimedia' => 'Мультимедия',
			'admin:plugins:category:theme' => 'Темы',
			'admin:plugins:category:widget' => 'Виджеты',
			
			'admin:plugins:sort:priority' => 'По приоритету',
			'admin:plugins:sort:alpha' => 'В алфавитном проядке',
			'admin:plugins:sort:date' => 'По дате добавления',
			
			'admin:plugins:markdown:unknown_plugin' => 'Неизвестный плагин.',
			'admin:plugins:markdown:unknown_file' => 'Неизвестный файл.',
			
			'admin:notices:could_not_delete' => 'Не удалось удалить уведомления..',

			'admin:options' => 'Опции адимистратора.',

		
		/**
		 * Plugins
		 */
		 
			'plugins:settings:save:ok' => "Настройки плагина %s успешно сохранены.",
			'plugins:settings:save:fail' => "Возникла ошибка при сохранении настроек плагина %s.",
			'plugins:usersettings:save:ok' => "Пользовательские настройки плагина %s успешно сохранены.",
			'plugins:usersettings:save:fail' => "Возникла ошибка при сохранении пользовательских настроек плагина %s.",
			'admin:plugins:label:version' => "версия",
			'item:object:plugin' => 'Настройки конфигурации плагинов',
			
			'admin:plugins' => "Администрирование плагинов",
			'admin:plugins:activate_all' => 'Включить Все',
			'admin:plugins:deactivate_all' => 'Выключить Все',
			'admin:plugins:activate' => 'Включить',
			'admin:plugins:deactivate' => 'Выключить',
			'admin:plugins:description' => "Это панель администратора позволяет управлять и настраивать плагины установлены на сайте.",
			'admin:plugins:opt:linktext' => "Настройка плагинов...",
			'admin:plugins:opt:description' => "Настройка плагинов установленых на сайте. ",
			'admin:plugins:label:author' => "Автор",
			'admin:plugins:label:copyright' => "Авторское право",
			'admin:plugins:label:categories' => 'Категории',
			'admin:plugins:label:licence' => "Лицензия",
			'admin:plugins:label:website' => "URL",
			'admin:plugins:label:moreinfo' => 'Подробнее',
			'admin:plugins:label:version' => 'Версия',
			'admin:plugins:label:location' => 'Директория',
			'admin:plugins:label:dependencies' => 'Совместимость',
			
			'admin:plugins:warning:elgg_version_unknown' => 'В этом плагине, в файле manifest не указана совместимость версии.Скорее всего это не будет работать!',
			'admin:plugins:warning:unmet_dependencies' => 'Этот плагин имеет неправильные зависимости и не может быть активирован. Проверьте зависимости.',
			'admin:plugins:warning:invalid' => '%s это недопустимый плагин.Посмотрите <a href="http://docs.elgg.org/Invalid_Plugin">Документацию</a> для устранения неполадок.',
			'admin:plugins:cannot_activate' => 'Включение не удалось',
			
			'admin:plugins:set_priority:yes' => "Плагин %s успешно перемещен.",
			'admin:plugins:set_priority:no' => "Плагин %s не может быть перемещен.",
			'admin:plugins:deactivate:yes' => "Плагин %s успешно выключен.",
			'admin:plugins:deactivate:no' => "Плагин %s невозможно выключить..",
			'admin:plugins:activate:yes' => "Плагин %s успешно включен.",
			'admin:plugins:activate:no' => "Плагин %s невозможно включить.",
			'admin:plugins:categories:all' => 'Все категории',
			'admin:plugins:plugin_website' => 'Сайт плагина',
			'admin:plugins:author' => '%s',
			'admin:plugins:version' => 'Версия %s',
			'admin:plugins:simple' => 'Simple',
			'admin:plugins:advanced' => 'Advanced',
			'admin:plugin_settings' => 'Настройки плагина',
			'admin:plugins:simple_simple_fail' => 'Не удалось сохранить настройки.',
			'admin:plugins:simple_simple_success' => 'Настройки сохранены.',
			'admin:plugins:simple:cannot_activate' => 'Не удалось активировать этот плагин.Посмотрите расширенные области для получения доп. информации.',
			'admin:plugins:warning:unmet_dependencies_active' => 'Этот плагин активен, но имеет неудовлетворенные зависимости. Вы можете столкнуться с проблемами. См. "Подробнее" ниже.',
			
			'admin:plugins:dependencies:type' => 'Тип',
			'admin:plugins:dependencies:name' => 'Название',
			'admin:plugins:dependencies:expected_value' => 'Тестировался на версии',
			'admin:plugins:dependencies:local_value' => 'Актуальная версия',
			'admin:plugins:dependencies:comment' => 'Состояние',
			
			'admin:statistics:description' => "Это обзор статистических данных о вашем сайте.",
			'admin:statistics:opt:description' => "Просмотр статистической информации о пользователях и объектов на вашем сайте.",
			'admin:statistics:opt:linktext' => "Просмотр статистики...",
			'admin:statistics:label:basic' => "Базовая информация",
			'admin:statistics:label:numentities' => "Подробная статистика",
			'admin:statistics:label:numusers' => "Кол-во пользователей",
			'admin:statistics:label:numonline' => "Кол-во пользователей онлайн",
			'admin:statistics:label:onlineusers' => "Сейчас в сети",
			'admin:statistics:label:version' => "Версия движка",
			'admin:statistics:label:version:release' => "Реализ",
			'admin:statistics:label:version:version' => "Версия",

			'admin:user:label:search' => "Поиск пользователей:",
			'admin:user:label:searchbutton' => "Искать",
			
			'admin:user:ban:no' => "Неудалось забанить пользователя :(",
			'admin:user:ban:yes' => "Пользователь забанен :D",
			'admin:user:self:ban:no' => "Ты не можешь забанить себя",
			'admin:user:unban:no' => "Неудалось разбанить пользователя",
			'admin:user:unban:yes' => "Пользователь разбанен :D",
			'admin:user:delete:no' => "Неудалось удалить пользователя",
			'admin:user:delete:yes' => "Пользователь %s удален",
			'admin:user:self:delete:no' => "Ты не можешь удалить себя",
			
			'admin:user:resetpassword:yes' => "Пароль сброшен, пользователь проинформирован.",
			'admin:user:resetpassword:no' => "Неудалось сбросить пароль.",
			
			'admin:user:makeadmin:yes' => "Пользователь теперь администратор.",
			'admin:user:makeadmin:no' => "Неудалось сделать пользователя администратором.",
			
			'admin:user:removeadmin:yes' => "Пользователь больше не администратор.",
			'admin:user:removeadmin:no' => "Неудалось удалить права администратора этого пользователя.",
			'admin:user:self:removeadmin:no' => "Вы не можете удалять ваши собственные привилегии администратора.",
			
			'admin:appearance:menu_items' => 'Пункты меню',
			'admin:menu_items:configure' => 'Настройка главного меню',
			'admin:menu_items:description' => 'Выберите пункты меню вы хотите показать.  Неиспользуемые элементы будут добавлены как "More" в конце списка.',
			'admin:menu_items:hide_toolbar_entries' => 'Удалить ссылки из меню?',
			'admin:menu_items:saved' => 'Пункты меню сохранены.',
			'admin:add_menu_item' => 'Добавить пункт меню',
			'admin:add_menu_item:description' => 'Заполните отображаемое имя и адрес для добавления пользовательских элементов в меню навигации.',

			'admin:appearance:default_widgets' => 'Элементы по умолчанию',
			'admin:default_widgets:unknown_type' => 'Неизвестный тип элемента',
			'admin:default_widgets:instructions' => 'Добавление, удаление,изменения положение и настроек элементов по умолчанию для выбранной странице элемента.'
		. 'Эти изменения будут влиять только на новых пользователей на сайте.',



			
		/**
		 * User settings
		 */
			'usersettings:description' => "Панель пользователя позволяет управлять всеми Вашими персональными настройками, от управления пользователем до отображения плагинов. Выберите опцию ниже чтобы начать.",
	
			'usersettings:statistics' => "Ваша статистика",
			'usersettings:statistics:opt:description' => "Просмотр статистической информации о пользователях и обьектах на Вашем сайте.",
			'usersettings:statistics:opt:linktext' => "Статистика аккаунта",
	
			'usersettings:user' => "Ваши настройки",
			'usersettings:user:opt:description' => "Управление настройками пользователя.",
			'usersettings:user:opt:linktext' => "Изменить Ваши настройки",
	
			'usersettings:plugins' => "Плагины",
			'usersettings:plugins:opt:description' => "Управление настройками активных плагинов.",
			'usersettings:plugins:opt:linktext' => "Настройка плагинов",
	
			'usersettings:plugins:description' => "Эта панель позволяет управлять и настраивать персональными настройками плагинов, установленных системным администратором.",
			'usersettings:statistics:label:numentities' => "Ваши объекты",
	
			'usersettings:statistics:yourdetails' => "Ваши данные",
			'usersettings:statistics:label:name' => "Отображаемое имя (Внимание, доступно публично!)",
			'usersettings:statistics:label:email' => "Электронный адрес",
			'usersettings:statistics:label:membersince' => "Регистрация",
			'usersettings:statistics:label:lastlogin' => "Последний визит",
	
		/**
		* Activity river
        */
			'river:all' => 'Активность на всем сайте',
			'river:mine' => 'Моя активность',
			'river:friends' => 'Активность друзей',
			'river:select' => 'Показать %s',
			'river:comments:more' => '+%s больше',
			'river:generic_comment' => 'прокомментировал %s %s',

			'friends:widget:description' => "Выводит на экран ваших друзей.",
			'friends:num_display' => "Количество выводимых друзей",
			'friends:icon_size' => "Размер аватарок",
			'friends:tiny' => "Очень маленький",
			'friends:small' => "Маленький",

	
		/**
		 * Generic action words
		 */
	
			'save' => "Сохранить",
			'reset' => 'Сброс',
			'publish' => "Сохранить",
			'cancel' => "Отмена",
			'saving' => "Сохранение ...",
			'update' => "Обновить",
			'preview' => "Предварительный просмотр",
			'edit' => "Изменить",
			'delete' => "Удалить",
			'accept' => "Принять",
			'load' => "Скачать",
			'upload' => "Загрузить",
			'ban' => "Заблокировать",
			'unban' => "Разблокировать",
			'banned' => "Заблокирован",
			'enable' => "Включить",
			'disable' => "Выключить",
			'request' => "Запрос",
			'complete' => "Завершено",
			'open' => 'Открыть',
			'close' => 'Закрыть',
			'reply' => "Ответить",
			'more' => 'Дальше',
			'comments' => 'Комментарии',
			'import' => 'Импорт',
			'export' => 'Экспорт',
			'untitled' => 'Без имени',
			'help' => 'Помощь',
			'send' => 'Отправить',
			'post' => 'Написать',
			'submit' => 'Подтвердить',
			'site' => 'Сайт',
			'comment' => 'Комментировать',
			'upgrade' => 'Изменить',
			'sort' => 'Сортировать',
			'filter' => 'Фильтр',
			
			'site' => 'Сайт',
			'activity' => 'Активность',
			'members' => 'Участники',
			
			'up' => 'Вверх',
			'down' => 'Вниз',
			'top' => 'В самый верх',
			'bottom' => 'В середину',
			
			'more' => 'дальше',
	
			'invite' => "Пригласить",
	
			'resetpassword' => "Сбросить пароль",
			'makeadmin' => "Сделать администратором",
			'removeadmin' => "Удалить администратора",
	
			'option:yes' => "Да",
			'option:no' => "Нет",
	
			'unknown' => 'Неизвестно',
	
			'active' => 'активно',
			'total' => 'всего',
	
			'learnmore' => "Нажмите сюда для продолжения",
	
			'content' => "содержимое",
			'content:latest' => 'Последняя активность',
			'content:latest:blurb' => 'Или нажмите сюда для просмотра новой информации, добавленной на сайт',
	
			'link:text' => 'ссылка',
	
		/**
		 * Generic questions
		 */
	
			'question:areyousure' => 'Вы уверены?',
	
		/**
		 * Generic data words
		 */
	
			'title' => "Название",
			'description' => "Описание",
			'tags' => "Теги",
			'spotlight' => "А также...",
			'all' => "Все",
			'mine' => "Моя",
	
			'by' => 'от',
			'none' => 'n!o!n!e!',
	
			'annotations' => "Примечания",
			'relationships' => "Связи",
			'metadata' => "Метаданные",
			'tagcloud' => "Облако тегов",
			'tagcloud:allsitetags' => "Все теги сайта",
			
		/**
 		* Entity actions
 		*/
			'edit:this' => 'Править',
			'delete:this' => 'Удалить',
			'comment:this' => 'Оставить комментарий',

	
		/**
		 * Input / output strings
		 */

			'deleteconfirm' => "Вы уверены что хотите удалить этот элемент?",
			'fileexists' => "Файл уже загружен. Чтобы заменить его, выберите его ниже:",
			
		/**
		 * User add
		 */

			'useradd:subject' => 'Вы успешно зарегистрировались',
			'useradd:body' => '
%s,

Вы зарегистрировались на %s. Для входа нажмите сюда:

	%s

Ваши регистрационные реквизиты:

	Логин: %s
	Пароль: %s
	
',
	
	    /**
         * System messages
         **/

			'systemmessages:dismiss' => "закрыть",
			
			
		/**
		 * Import / export
		 */
			'importsuccess' => "Данные импортированы успешно",
			'importfail' => "Ошибка OpenDD импорта данных.",
	
		/**
		 * Time
		 */
	
			'friendlytime:justnow' => "только что",
			'friendlytime:minutes' => "%s минут назад",
			'friendlytime:minutes:singular' => "минуту назад",
			'friendlytime:hours' => "%s часов назад",
			'friendlytime:hours:singular' => "час назад",
			'friendlytime:days' => "%s дней назад",
			'friendlytime:days:singular' => "вчера",
			
			'date:month:01' => 'Январь %s',
			'date:month:02' => 'Февраль %s',
			'date:month:03' => 'Март %s',
			'date:month:04' => 'Апрель %s',
			'date:month:05' => 'Май %s',
			'date:month:06' => 'Июнь %s',
			'date:month:07' => 'Июль %s',
			'date:month:08' => 'Август %s',
			'date:month:09' => 'Сентябрь %s',
			'date:month:10' => 'Октябрь %s',
			'date:month:11' => 'Ноябрь %s',
			'date:month:12' => 'Декабрь %s',
	
	
		/**
		 * Installation and system settings
		 */
	
			'installation:sitename' => "Имя вашего сайта:",
			'installation:sitedescription' => "Краткое описание Вашего сайта (необязательно):",
			'installation:wwwroot' => "Адрес сайта:",
			'installation:path' => "Полный путь установки:",
			'installation:dataroot' => "Полный путь к каталогу данных:",
			'installation:dataroot:warning' => "Вы должны создать этот каталог вручную. Он не должен быть в каталоге установки.",
			'installation:sitepermissions' => "По умолчанию разрешения на доступ к сайту:",
			'installation:language' => "Язык по умолчанию:",
			'installation:debug' => "Режим отладки предоставляет дополнительную информацию, которая может быть использована для диагностики неисправностей. Тем не менее, это может замедлить работу системы, моежт быть использованы только если у вас возникли проблемы:",
			'installation:debug:none' => 'Выключить режим отладки (рекомендуется)',
			'installation:debug:error' => 'Показывать только критические ошибки',
			'installation:debug:warning' => 'Отображение ошибок и предупреждений',
			'installation:debug:notice' => 'Записывать все ошибки, предупреждения и уведомления',
			
			'installation:registration:description' => 'Регистрация пользователей включена по умолчанию. Выключите эту опцию, если вы не хотите, чтобы новые пользователи могли зарегистрироваться сами по себе.',
			'installation:registration:label' => 'Разрешить регистрацию',
			'installation:walled_garden:description' => 'Включить сайт для работы в качестве частной сети. Это не позволит, не вошедшим в систему пользователям просматривать любые страницы сайта, кроме тех, которые специально отмечены как общественности.',
			'installation:walled_garden:label' => 'Ограничить страницы зарегистрированным пользователям',
			
			'installation:httpslogin' => "Пользователи могут входить по HTTPS. Для этого Вам нужно будет настроить HTTPS на сервере.",
			'installation:httpslogin:label' => "Разрешить вход по HTTPS",
			'installation:view' => "Enter the view which will be used as the default for your site or leave this blank for the default view (if in doubt, leave as default(нихуя не понел о чем это...возможно для поисковых машин)):",
			
			'installation:siteemail' => "Электронный адрес сайта (будет использоваться для рассылки системных сообщений):",
			
			'installation:disableapi' => "Elgg предоставляет гибкое и расширяемое API, которое позволяет приложениям удаленно использовать некоторые возможности системы.",
			'installation:disableapi:label' => "Включить web services API",
			
			'installation:allow_user_default_access:description' => "Пользователи могут настраивать собственный уровень доступа, который будет иметь учитываться аналогичными настройками системы.",
			'installation:allow_user_default_access:label' => "Разрешить пользователям настраивать уровень доступа",
			
			'installation:simplecache:description' => "Простой кэш увеличивает производительность, кэшируя элементы вроде CSS и JavaScript. Рекомендуем включить данную опцию.",
			'installation:simplecache:label' => "Использовать простой кэш(рекомендуется)",
			
			'installation:viewpathcache:description' => "Кэш отображения путей файлов уменьшает время загрузки плагинов благодаря кэшированию местонахождения этих просмотров.",
			'installation:viewpathcache:label' => "Использовать кэш отображения путей файлов (рекомендуется)",
			
			'upgrading' => 'Обновление ...',
			'upgrade:db' => 'Ваша база данных была обновлена.',
			'upgrade:core' => 'Ваша Elgg установка была обновлена.',
			'upgrade:unable_to_upgrade' => 'Не удалось обновить.',
			'upgrade:unable_to_upgrade_info' =>
				'This installation cannot be upgraded because legacy views
				were detected in the Elgg core views directory. These views have been deprecated and need to be
				removed for Elgg to function correctly. If you have not made changes to Elgg core, you can
				simply delete the views directory and replace it with the one from the latest
				package of Elgg downloaded from <a href="http://elgg.org">elgg.org</a>.<br /><br />

				If you need detailed instructions, please visit the <a href="http://docs.elgg.org/wiki/Upgrading_Elgg">
				Upgrading Elgg documentation</a>.  If you require assistance, please post to the
				<a href="http://community.elgg.org/pg/groups/discussion/">Community Support Forums</a>.',
				
			'update:twitter_api:deactivated' => 'Twitter API был отключен при обновлении. Пожалуйста, включите его вручную, если требуется.',
			
			'update:oauth_api:deactivated' => 'OAuth API (ранее OAuth Lib) был отключен во время обновления. Пожалуйста, включите его вручную, если требуется.',

			'deprecated:function' => '%s() была установлена по верх %s()',
			
		/**
		 * Welcome
		 */
	
			'welcome' => "Здравствуйте,",
			'welcome:user' => 'Здравствуйте, %s',
	
		/**
		 * Emails
		 */
			'email:settings' => "Настройки электронного адреса",
			'email:address:label' => "Ваш электронный адрес",
			
			'email:save:success' => "Новый электронный адрес сохранен, отправлен запрос проверки реальности адреса.",
			'email:save:fail' => "Ваш новый электронный адрес не сохранен.",
	
			'email:confirm:success' => "Вы подтвердили Ваш электронный адрес.",
			'email:confirm:fail' => "Ваш электронный адрес не проверен...",
	
			'friend:newfriend:subject' => "%s добавил(а) Вас в друзья.",
			'friend:newfriend:body' => "%s добавил(а) Вас в друзья.

Для просмотра профиля пользователя нажмите здесь:

	%s

Не отвечайте на это письмо.",
	
	
			'email:validate:subject' => "%s, добро пожаловать!.",
			'email:validate:body' => "Здравствуйте, %s!

Пожалуйста, подтвердите Ваш электронный адрес, нажав ссылку ниже:

%s
",
				
			'email:resetpassword:subject' => "Пароль изменен.",
			'email:resetpassword:body' => "Здравствуйте, %s!
			
Ваш пароль изменен на: %s",
	
	
			'email:resetreq:subject' => "Запрос нового пароля.",
			'email:resetreq:body' => "Здравствуйте, %s!
			
Кто-то (с IP-адреса %s) запросил новый пароль для этого аккаунта.

Если запрос сделали Вы, нажмите ссылку ниже, если не Вы - проигнорируйте это письмо.

%s
",

		/**
		 * user default access
		 */
	
			'default_access:settings' => "Ваш уровень доступа по-умолчанию",
			'default_access:label' => "Доступ по-умолчанию",
			'user:default_access:success' => "Ваш уровень доступа по-умолчанию сохранен.",
			'user:default_access:failure' => "Ваш уровень доступа по-умолчанию не может быть.",
	
		/**
		 * XML-RPC
		 */
			'xmlrpc:noinputdata'	=>	"Не найдены входящие данные",
	
		/**
		 * Comments
		 */
	
			'comments:count' => "%s комментариев",
			
			'riveraction:annotation:generic_comment' => '%s откомментировал(а) %s',
			
			'generic_comments:add' => "Добавить комментарий",
			'generic_comments:post' => "Оставить комментарий",
			'generic_comments:text' => "Комментарий",
			'generic_comments:latest' => "Последние комментарии",
			'generic_comment:posted' => "Комментарий добавлен.",
			'generic_comment:deleted' => "Комментарий удален.",
			'generic_comment:blank' => "Извините, Вам нужно написать что-то в комментарии перед тем как его сохраненить.",
			'generic_comment:notfound' => "Извините, не найден указанный элемент.",
			'generic_comment:notdeleted' => "Извините, ошибка при удалении комментария.",
			'generic_comment:failure' => "Неожиданная ошибка возникла при добавлении комментария. Попробуйте снова.",
			'generic_comment:none' => 'Комментариев нет',
	
			'generic_comment:email:subject' => 'У Вас новый комментарий.',
			'generic_comment:email:body' => "Новый комментарий к \"%s\" от пользователя %s. А именно:

			
%s


Для ответа или просмотра, нажмите здесь:

	%s

Для просмотра профиля пользователя %s, нажмите здесь:

	%s",
	
		/**
		 * Entities
		 */
		 
		 
			'byline' => 'От %s',
			'entity:default:strapline' => 'Создан в %s %s',
			'entity:default:missingsupport:popup' => 'Этот объект не удается корректно отобразить. Возможно ему нужен плагин, который уже удален.',

			'entity:delete:success' => 'Объект %s удален',
			'entity:delete:fail' => 'Ошибка удаления объекта %s',
	
	
		/**
		 * Action gatekeeper
		 */
			'actiongatekeeper:missingfields' => 'В форме не найдены поля __token или __ts',
			'actiongatekeeper:tokeninvalid' => 'Значение переданное формой не совпадает со значением сгенерированным сервером.',
			'actiongatekeeper:timeerror' => 'Время формы истекло, пожалуйста обновите страницу и попробуйте снова.',
			'actiongatekeeper:pluginprevents' => 'Компонент воспрепятствовал отправке этой формы.',
			
		/**
		 * Word blacklists
		 */
			'word:blacklist' => 'и, затем, но, она, его, её, его, one, не, также, о, сайчас, следовательно, тем не менее, все ещё, подобно, иначе, следовательно, наоборот, довольно, следовательно, кроме того, тем не менее, взамен, тем временем, соответственно, это, кажется, что, кто, чье, кто бы ни, кому либо',
			
			
		/**
 		* Tag labels
 		*/

			'tag_names:tags' => 'Теги',
			'tags:site_cloud' => 'Облако тегов сайта',

		/**
		 * Javascript
		 */

			'js:security:token_refresh_failed' => 'Невозможно соединиться с %s. Есть проблемы с экономии содержания.',
			'js:security:token_refreshed' => 'Подключение к %s. восстановлено!',

	
		/**
		 * Languages according to ISO 639-1
		 */
			"aa" => "Afar",
			"ab" => "Abkhazian",
			"af" => "Afrikaans",
			"am" => "Amharic",
			"ar" => "Arabic",
			"as" => "Assamese",
			"ay" => "Aymara",
			"az" => "Azerbaijani",
			"ba" => "Bashkir",
			"be" => "Byelorussian",
			"bg" => "Bulgarian",
			"bh" => "Bihari",
			"bi" => "Bislama",
			"bn" => "Bengali; Bangla",
			"bo" => "Tibetan",
			"br" => "Breton",
			"ca" => "Catalan",
			"co" => "Corsican",
			"cs" => "Czech",
			"cy" => "Welsh",
			"da" => "Danish",
			"de" => "German",
			"dz" => "Bhutani",
			"el" => "Greek",
			"en" => "English",
			"eo" => "Esperanto",
			"es" => "Spanish",
			"et" => "Estonian",
			"eu" => "Basque",
			"fa" => "Persian",
			"fi" => "Finnish",
			"fj" => "Fiji",
			"fo" => "Faeroese",
			"fr" => "French",
			"fy" => "Frisian",
			"ga" => "Irish",
			"gd" => "Scots / Gaelic",
			"gl" => "Galician",
			"gn" => "Guarani",
			"gu" => "Gujarati",
			"he" => "Hebrew",
			"ha" => "Hausa",
			"hi" => "Hindi",
			"hr" => "Croatian",
			"hu" => "Hungarian",
			"hy" => "Armenian",
			"ia" => "Interlingua",
			"id" => "Indonesian",
			"ie" => "Interlingue",
			"ik" => "Inupiak",
			//"in" => "Indonesian",
			"is" => "Icelandic",
			"it" => "Italian",
			"iu" => "Inuktitut",
			"iw" => "Hebrew (obsolete)",
			"ja" => "Japanese",
			"ji" => "Yiddish (obsolete)",
			"jw" => "Javanese",
			"ka" => "Georgian",
			"kk" => "Kazakh",
			"kl" => "Greenlandic",
			"km" => "Cambodian",
			"kn" => "Kannada",
			"ko" => "Korean",
			"ks" => "Kashmiri",
			"ku" => "Kurdish",
			"ky" => "Kirghiz",
			"la" => "Latin",
			"ln" => "Lingala",
			"lo" => "Laothian",
			"lt" => "Lithuanian",
			"lv" => "Latvian/Lettish",
			"mg" => "Malagasy",
			"mi" => "Maori",
			"mk" => "Macedonian",
			"ml" => "Malayalam",
			"mn" => "Mongolian",
			"mo" => "Moldavian",
			"mr" => "Marathi",
			"ms" => "Malay",
			"mt" => "Maltese",
			"my" => "Burmese",
			"na" => "Nauru",
			"ne" => "Nepali",
			"nl" => "Dutch",
			"no" => "Norwegian",
			"oc" => "Occitan",
			"om" => "(Afan) Oromo",
			"or" => "Oriya",
			"pa" => "Punjabi",
			"pl" => "Polish",
			"ps" => "Pashto / Pushto",
			"pt" => "Portuguese",
			"qu" => "Quechua",
			"rm" => "Rhaeto-Romance",
			"rn" => "Kirundi",
			"ro" => "Romanian",
			"ru" => "Русский",
			"rw" => "Kinyarwanda",
			"sa" => "Sanskrit",
			"sd" => "Sindhi",
			"sg" => "Sangro",
			"sh" => "Serbo-Croatian",
			"si" => "Singhalese",
			"sk" => "Slovak",
			"sl" => "Slovenian",
			"sm" => "Samoan",
			"sn" => "Shona",
			"so" => "Somali",
			"sq" => "Albanian",
			"sr" => "Serbian",
			"ss" => "Siswati",
			"st" => "Sesotho",
			"su" => "Sundanese",
			"sv" => "Swedish",
			"sw" => "Swahili",
			"ta" => "Tamil",
			"te" => "Tegulu",
			"tg" => "Tajik",
			"th" => "Thai",
			"ti" => "Tigrinya",
			"tk" => "Turkmen",
			"tl" => "Tagalog",
			"tn" => "Setswana",
			"to" => "Tonga",
			"tr" => "Turkish",
			"ts" => "Tsonga",
			"tt" => "Tatar",
			"tw" => "Twi",
			"ug" => "Uigur",
			"uk" => "Украинский",
			"ur" => "Urdu",
			"uz" => "Uzbek",
			"vi" => "Vietnamese",
			"vo" => "Volapuk",
			"wo" => "Wolof",
			"xh" => "Xhosa",
			//"y" => "Yiddish",
			"yi" => "Yiddish",
			"yo" => "Yoruba",
			"za" => "Zuang",
			"zh" => "Chinese",
			"zu" => "Zulu",
			
			
	);
	
	add_translation("ru",$russian);

?>
