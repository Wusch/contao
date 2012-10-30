<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * Core translations are managed using Transifex. To create a new translation
 * or to help to maintain an existing one, please register at transifex.com.
 * 
 * @link http://help.transifex.com/intro/translating.html
 * @link https://www.transifex.com/projects/p/contao/language/ru/
 * 
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

$GLOBALS['TL_LANG']['ERR']['general'] = 'Произошла ошибка!';
$GLOBALS['TL_LANG']['ERR']['unique'] = 'Повторяющиеся записи в поле "%s"!';
$GLOBALS['TL_LANG']['ERR']['mandatory'] = 'Поле "%s" не должно быть пустым!';
$GLOBALS['TL_LANG']['ERR']['mdtryNoLabel'] = 'Это поле не должно оставаться пустым!';
$GLOBALS['TL_LANG']['ERR']['minlength'] = 'Поле "%s" должно быть длиной не менее %d символов!';
$GLOBALS['TL_LANG']['ERR']['maxlength'] = 'Поле "%s" должно быть длиной не более %d символов!';
$GLOBALS['TL_LANG']['ERR']['digit'] = 'Введите только цифры!';
$GLOBALS['TL_LANG']['ERR']['prcnt'] = 'Введите проценты от 0 до 100!';
$GLOBALS['TL_LANG']['ERR']['alpha'] = 'Введите только буквенные символы!';
$GLOBALS['TL_LANG']['ERR']['alnum'] = 'Введите только цифровые символы!';
$GLOBALS['TL_LANG']['ERR']['phone'] = 'Введите телефонный номер!';
$GLOBALS['TL_LANG']['ERR']['extnd'] = 'По соображениям безопасности, вы не должны использовать здесь следующие символы: =<>&/()#';
$GLOBALS['TL_LANG']['ERR']['email'] = 'Введите существующий e-mail адрес!';
$GLOBALS['TL_LANG']['ERR']['emails'] = 'Есть как минимум один неверный e-mail адрес!';
$GLOBALS['TL_LANG']['ERR']['url'] = 'Введите URL в правильном формате и кодировке!';
$GLOBALS['TL_LANG']['ERR']['alias'] = 'Введите только буквы, цифры и следующие специальные символы: .-_';
$GLOBALS['TL_LANG']['ERR']['folderalias'] = 'Введите только буквы, цифры и следующие специальные символы: .-/_';
$GLOBALS['TL_LANG']['ERR']['date'] = 'Введите дату как "%s"!';
$GLOBALS['TL_LANG']['ERR']['time'] = 'Введите время как "%s"!';
$GLOBALS['TL_LANG']['ERR']['dateTime'] = 'Введите дату и время как "%s"!';
$GLOBALS['TL_LANG']['ERR']['noSpace'] = 'Поле "%s" не должно содержать пробелов!';
$GLOBALS['TL_LANG']['ERR']['filesize'] = 'Максимальный размер файла для загрузки %s. (см. настройки Contao или php.ini)!';
$GLOBALS['TL_LANG']['ERR']['filetype'] = 'Тип файла "%s" не разрешен для загрузки!';
$GLOBALS['TL_LANG']['ERR']['filepartial'] = 'Файл %s был загружен частично!';
$GLOBALS['TL_LANG']['ERR']['filewidth'] = 'В файле %s превышена максимальная ширина изображения в %d пикселей!';
$GLOBALS['TL_LANG']['ERR']['fileheight'] = 'В файле %s превышена максимальная высота изображения в %d пикселей!';
$GLOBALS['TL_LANG']['ERR']['invalidReferer'] = 'Доступ запрещен! Текущий адрес хоста (%s) не соответствует представленному адресу (%s)!';
$GLOBALS['TL_LANG']['ERR']['invalidPass'] = 'Неверный пароль!';
$GLOBALS['TL_LANG']['ERR']['passwordLength'] = 'Пароль должен содержать минимум %d символов!';
$GLOBALS['TL_LANG']['ERR']['passwordName'] = 'Логин не должен совпадать с паролем!';
$GLOBALS['TL_LANG']['ERR']['passwordMatch'] = 'Пароли не совпадают!';
$GLOBALS['TL_LANG']['ERR']['accountLocked'] = 'Учетная запись заблокирована! Вы можете зайти через %d мин.';
$GLOBALS['TL_LANG']['ERR']['invalidLogin'] = 'Ошибка авторизации!';
$GLOBALS['TL_LANG']['ERR']['invalidColor'] = 'Неверный цветовой формат!';
$GLOBALS['TL_LANG']['ERR']['all_fields'] = 'Выберите хотя бы одно поле!';
$GLOBALS['TL_LANG']['ERR']['aliasExists'] = 'Алиас страницы "%s" уже существует!';
$GLOBALS['TL_LANG']['ERR']['importFolder'] = 'Каталог "%s" не может быть импортирован!';
$GLOBALS['TL_LANG']['ERR']['notWriteable'] = 'Файл "%s" не доступен для записи и поэтому не может быть обновлен!';
$GLOBALS['TL_LANG']['ERR']['invalidName'] = 'Неверное имя файла или каталога!';
$GLOBALS['TL_LANG']['ERR']['invalidFile'] = 'Неверное имя файла или каталога "%s"!';
$GLOBALS['TL_LANG']['ERR']['fileExists'] = 'Файл "%s" уже существует!';
$GLOBALS['TL_LANG']['ERR']['circularReference'] = 'Неверный объект переадресации (циклическая ссылка)!';
$GLOBALS['TL_LANG']['ERR']['ie6warning'] = '<strong>Внимание!</strong> Версия используемого браузера %sout of date%s и <strong>вы не можете использовать все возможности веб-сайта</strong>.';
$GLOBALS['TL_LANG']['ERR']['noFallbackEmpty'] = 'Ни в одном из имеющихся активных корней веб-сайта не включена в настройках DNS опция \'Язык обратной связи\'. Это означает, что эти веб-сайты доступны только на одном языке, указанном в настройках страницы! Посетители и поисковые системы, которые \'не говорят\' на этом языке не смогут просматривать этот веб-сайт.';
$GLOBALS['TL_LANG']['ERR']['noFallbackDns'] = 'Ни в одном из имеющихся активных корней веб-сайта <strong>%s</strong> не включена в настройках DNS опция \'Язык обратной связи\'. Это означает, что эти веб-сайты доступны только на одном языке, указанном в настройках страницы! Посетители и поисковые системы, которые \'не говорят\' на этом языке не смогут просматривать этот веб-сайт.';
$GLOBALS['TL_LANG']['ERR']['multipleFallback'] = 'Вы можете определить только один корень веб-сайта на домен, в качестве языка обратной связи.';
$GLOBALS['TL_LANG']['ERR']['topLevelRoot'] = 'Страницей верхнего уровня должен быть корень веб-сайта!';
$GLOBALS['TL_LANG']['ERR']['topLevelRegular'] = 'Имеются страницы верхнего уровня, которые не являются корнем веб-сайта. Создание веб-сайтов без корневой страницы больше не поддерживается, убедитесь, что все страницы сгруппированы под корневой страницей веб-сайта.';
$GLOBALS['TL_LANG']['ERR']['invalidTokenUrl'] = 'Ссылка, которую вы пытались открыть не может быть проверена. Если вы нажали на ссылку самостоятельно или получили её от доверенного лица, можете подтвердить процесс ниже.';
$GLOBALS['TL_LANG']['ERR']['version2format'] = 'Этот элемент все еще использует старый формат Contao 2 SRC. Вы обновляли базу данных?';
$GLOBALS['TL_LANG']['ERR']['form'] = 'Форма не может быть отправлена';
$GLOBALS['TL_LANG']['ERR']['captcha'] = 'Ответьте на контрольный вопрос!';
$GLOBALS['TL_LANG']['ERR']['download'] = 'Файл "%s" не доступен для загрузки!';
$GLOBALS['TL_LANG']['ERR']['invalid'] = 'Неверный ввод: %s';
$GLOBALS['TL_LANG']['ERR']['fileNotFoundSync'] = 'Не найдена запись базы данных для %s. Синхронизируйте файловую систему.';
$GLOBALS['TL_LANG']['SEC']['question1'] = 'Прибавьте %d к %d.';
$GLOBALS['TL_LANG']['SEC']['question2'] = 'Просуммируйте %d и %d.';
$GLOBALS['TL_LANG']['SEC']['question3'] = 'Сложите %d и %d.';
$GLOBALS['TL_LANG']['CTE']['texts'] = 'Текстовые элементы';
$GLOBALS['TL_LANG']['CTE']['headline'][0] = 'Заголовок';
$GLOBALS['TL_LANG']['CTE']['headline'][1] = 'Создает заголовок (h1 - h6).';
$GLOBALS['TL_LANG']['CTE']['text'][0] = 'Текст';
$GLOBALS['TL_LANG']['CTE']['text'][1] = 'Создает элемент форматированного текста.';
$GLOBALS['TL_LANG']['CTE']['html'][0] = 'HTML-код';
$GLOBALS['TL_LANG']['CTE']['html'][1] = 'Позволяет добавить пользовательский HTML-код.';
$GLOBALS['TL_LANG']['CTE']['list'][0] = 'Список';
$GLOBALS['TL_LANG']['CTE']['list'][1] = 'Создает отсортированный или неупорядоченный список.';
$GLOBALS['TL_LANG']['CTE']['table'][0] = 'Таблица';
$GLOBALS['TL_LANG']['CTE']['table'][1] = 'Создает таблицу с поддержкой сортировки.';
$GLOBALS['TL_LANG']['CTE']['accordion'][0] = 'Раздвижная панель (Accordion)';
$GLOBALS['TL_LANG']['CTE']['accordion'][1] = 'Создает раздвижную панель MooTools (Accordion).';
$GLOBALS['TL_LANG']['CTE']['code'][0] = 'Код';
$GLOBALS['TL_LANG']['CTE']['code'][1] = 'Выделяет фрагменты кода и выводит их на экран.';
$GLOBALS['TL_LANG']['CTE']['links'] = 'Элементы ссылки';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][0] = 'Гиперссылка';
$GLOBALS['TL_LANG']['CTE']['hyperlink'][1] = 'Создает гиперссылку на другой веб-сайт.';
$GLOBALS['TL_LANG']['CTE']['toplink'][0] = 'Ссылка \'Наверх страницы\'';
$GLOBALS['TL_LANG']['CTE']['toplink'][1] = 'Создает ссылку для быстрого перехода к верхней части страницы.';
$GLOBALS['TL_LANG']['CTE']['media'] = 'Мультимедиа элементы';
$GLOBALS['TL_LANG']['CTE']['image'][0] = 'Изображение';
$GLOBALS['TL_LANG']['CTE']['image'][1] = 'Создает отдельно стоящее изображение.';
$GLOBALS['TL_LANG']['CTE']['gallery'][0] = 'Галерея изображений';
$GLOBALS['TL_LANG']['CTE']['gallery'][1] = 'Создает лайтбокс галерею изображений, с возможностью полноразмерного просмотра.';
$GLOBALS['TL_LANG']['CTE']['player'][0] = 'Видео/аудио';
$GLOBALS['TL_LANG']['CTE']['player'][1] = 'Создает видео или аудио проигрыватель.';
$GLOBALS['TL_LANG']['CTE']['youtube'][0] = 'YouTube';
$GLOBALS['TL_LANG']['CTE']['youtube'][1] = 'Добавляет видео с YouTube.';
$GLOBALS['TL_LANG']['CTE']['files'] = 'Элементы файла';
$GLOBALS['TL_LANG']['CTE']['download'][0] = 'Загрузка с веб-сайта';
$GLOBALS['TL_LANG']['CTE']['download'][1] = 'Создает гиперссылку на файл для загрузки.';
$GLOBALS['TL_LANG']['CTE']['downloads'][0] = 'Загрузки с веб-сайта';
$GLOBALS['TL_LANG']['CTE']['downloads'][1] = 'Создает ссылки на несколько файлов для загрузки.';
$GLOBALS['TL_LANG']['CTE']['includes'] = 'Элементы вложения';
$GLOBALS['TL_LANG']['CTE']['article'][0] = 'Ссылка на статью';
$GLOBALS['TL_LANG']['CTE']['article'][1] = 'Позволяет включать статью в другую статью.';
$GLOBALS['TL_LANG']['CTE']['alias'][0] = 'Элемент контента';
$GLOBALS['TL_LANG']['CTE']['alias'][1] = 'Позволяет включать иные элементы контента в статью.';
$GLOBALS['TL_LANG']['CTE']['form'][0] = 'Форма';
$GLOBALS['TL_LANG']['CTE']['form'][1] = 'Позволяет внедрять формы в статью.';
$GLOBALS['TL_LANG']['CTE']['module'][0] = 'Модуль';
$GLOBALS['TL_LANG']['CTE']['module'][1] = 'Позволяет внедрять модули внешнего интерфейса в статью.';
$GLOBALS['TL_LANG']['CTE']['teaser'][0] = 'Анонс статьи';
$GLOBALS['TL_LANG']['CTE']['teaser'][1] = 'Позволяет показать текст анонса определённой статьи.';
$GLOBALS['TL_LANG']['PTY']['regular'][0] = 'Постоянная страница';
$GLOBALS['TL_LANG']['PTY']['regular'][1] = 'Постоянная страница содержит статьи и элементы контента. Это тип страницы по умолчанию.';
$GLOBALS['TL_LANG']['PTY']['redirect'][0] = 'Переадресация на внешний URL';
$GLOBALS['TL_LANG']['PTY']['redirect'][1] = 'Тип страницы автоматически перенаправляет посетителей на внешний веб-сайт. Работает как гиперссылка.';
$GLOBALS['TL_LANG']['PTY']['forward'][0] = 'Переадресация на другую страницу';
$GLOBALS['TL_LANG']['PTY']['forward'][1] = 'Тип страницы автоматически переправляет посетителей на другую страницу в структуре веб-сайта.';
$GLOBALS['TL_LANG']['PTY']['root'][0] = 'Корень веб-сайта';
$GLOBALS['TL_LANG']['PTY']['root'][1] = 'Этот тип страницы является отправной точкой нового веб-сайта в структуре веб-сайта.';
$GLOBALS['TL_LANG']['PTY']['error_403'][0] = 'Ошибка 403 (доступ запрещен)';
$GLOBALS['TL_LANG']['PTY']['error_403'][1] = 'Страница выводится, когда пользователь пытается получить доступ к защищенной странице без разрешения.';
$GLOBALS['TL_LANG']['PTY']['error_404'][0] = 'Ошибка 404 (страница не найдена)';
$GLOBALS['TL_LANG']['PTY']['error_404'][1] = 'Страница выводится, когда пользователь пытается получить доступ к несуществующей странице.';
$GLOBALS['TL_LANG']['FOP']['fop'][0] = 'Разрешения на операции с файлами';
$GLOBALS['TL_LANG']['FOP']['fop'][1] = 'Выберите разрешения на операции с файлами.';
$GLOBALS['TL_LANG']['FOP']['f1'] = 'Загрузить файлы на сервер';
$GLOBALS['TL_LANG']['FOP']['f2'] = 'Редактирование, копирование или перемещение файлов и каталогов';
$GLOBALS['TL_LANG']['FOP']['f3'] = 'Удалить одиночные файлы или пустой каталог';
$GLOBALS['TL_LANG']['FOP']['f4'] = 'Удалить каталог, включая все файлы и подкаталоги (!)';
$GLOBALS['TL_LANG']['FOP']['f5'] = 'Редактировать файлы в редакторе кода';
$GLOBALS['TL_LANG']['CHMOD']['editpage'] = 'Редактировать страницу';
$GLOBALS['TL_LANG']['CHMOD']['editnavigation'] = 'Редактировать иерархию страниц';
$GLOBALS['TL_LANG']['CHMOD']['deletepage'] = 'Удалить страницу';
$GLOBALS['TL_LANG']['CHMOD']['editarticles'] = 'Редактировать статьи';
$GLOBALS['TL_LANG']['CHMOD']['movearticles'] = 'Редактировать иерархию статей';
$GLOBALS['TL_LANG']['CHMOD']['deletearticles'] = 'Удалить статьи';
$GLOBALS['TL_LANG']['CHMOD']['cuser'] = 'Владелец';
$GLOBALS['TL_LANG']['CHMOD']['cgroup'] = 'Группа';
$GLOBALS['TL_LANG']['CHMOD']['cworld'] = 'Любой';
$GLOBALS['TL_LANG']['DAYS'][0] = 'Воскресенье';
$GLOBALS['TL_LANG']['DAYS'][1] = 'Понедельник';
$GLOBALS['TL_LANG']['DAYS'][2] = 'Вторник';
$GLOBALS['TL_LANG']['DAYS'][3] = 'Среда';
$GLOBALS['TL_LANG']['DAYS'][4] = 'Четверг';
$GLOBALS['TL_LANG']['DAYS'][5] = 'Пятница';
$GLOBALS['TL_LANG']['DAYS'][6] = 'Суббота';
$GLOBALS['TL_LANG']['DAYS_SHORT'][0] = 'Вс';
$GLOBALS['TL_LANG']['DAYS_SHORT'][1] = 'Пн';
$GLOBALS['TL_LANG']['DAYS_SHORT'][2] = 'Вт';
$GLOBALS['TL_LANG']['DAYS_SHORT'][3] = 'Ср';
$GLOBALS['TL_LANG']['DAYS_SHORT'][4] = 'Чт';
$GLOBALS['TL_LANG']['DAYS_SHORT'][5] = 'Пт';
$GLOBALS['TL_LANG']['DAYS_SHORT'][6] = 'Сб';
$GLOBALS['TL_LANG']['MONTHS'][0] = 'Январь';
$GLOBALS['TL_LANG']['MONTHS'][1] = 'Февраль';
$GLOBALS['TL_LANG']['MONTHS'][2] = 'Март';
$GLOBALS['TL_LANG']['MONTHS'][3] = 'Апрель';
$GLOBALS['TL_LANG']['MONTHS'][4] = 'Май';
$GLOBALS['TL_LANG']['MONTHS'][5] = 'Июнь';
$GLOBALS['TL_LANG']['MONTHS'][6] = 'Июль';
$GLOBALS['TL_LANG']['MONTHS'][7] = 'Август';
$GLOBALS['TL_LANG']['MONTHS'][8] = 'Сентябрь';
$GLOBALS['TL_LANG']['MONTHS'][9] = 'Октябрь';
$GLOBALS['TL_LANG']['MONTHS'][10] = 'Ноябрь';
$GLOBALS['TL_LANG']['MONTHS'][11] = 'Декабрь';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][0] = 'Янв';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][1] = 'Фев';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][2] = 'Мар';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][3] = 'Апр';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][4] = 'Май';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][5] = 'Июн';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][6] = 'Июл';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][7] = 'Авг';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][8] = 'Сен';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][9] = 'Окт';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][10] = 'Ноя';
$GLOBALS['TL_LANG']['MONTHS_SHORT'][11] = 'Дек';
$GLOBALS['TL_LANG']['MSC']['dayShortLength'] = '3';
$GLOBALS['TL_LANG']['MSC']['monthShortLength'] = '3';
$GLOBALS['TL_LANG']['MSC']['weekOffset'] = '0';
$GLOBALS['TL_LANG']['MSC']['titleFormat'] = '%B %d%o, %Y';
$GLOBALS['TL_LANG']['MSC']['url'][0] = 'URL назначения';
$GLOBALS['TL_LANG']['MSC']['url'][1] = 'Введите URL назначения, включая сетевой протокол (http://…), а для e-mail адреса (mailto:…).';
$GLOBALS['TL_LANG']['MSC']['target'][0] = 'Открыть в новом окне';
$GLOBALS['TL_LANG']['MSC']['target'][1] = 'Открыть ссылку в новом окне браузера.';
$GLOBALS['TL_LANG']['MSC']['decimalSeparator'] = '.';
$GLOBALS['TL_LANG']['MSC']['thousandsSeparator'] = ',';
$GLOBALS['TL_LANG']['MSC']['separator'][0] = 'Разделитель';
$GLOBALS['TL_LANG']['MSC']['separator'][1] = 'Выберите знак, который разделяет значения.';
$GLOBALS['TL_LANG']['MSC']['source'][0] = 'Исходные файлы';
$GLOBALS['TL_LANG']['MSC']['source'][1] = 'Выберите CSV-файлы для импорта.';
$GLOBALS['TL_LANG']['MSC']['comma'] = 'Запятая';
$GLOBALS['TL_LANG']['MSC']['semicolon'] = 'Точка с запятой';
$GLOBALS['TL_LANG']['MSC']['tabulator'] = 'Табулятор';
$GLOBALS['TL_LANG']['MSC']['linebreak'] = 'Разрыв строки';
$GLOBALS['TL_LANG']['MSC']['lw_import'][0] = 'CSV импорт';
$GLOBALS['TL_LANG']['MSC']['lw_import'][1] = 'Импорт списка из CSV-файла';
$GLOBALS['TL_LANG']['MSC']['lw_copy'] = 'Дублировать элемент';
$GLOBALS['TL_LANG']['MSC']['lw_up'] = 'Переместить элемент на одну позицию вверх';
$GLOBALS['TL_LANG']['MSC']['lw_down'] = 'Переместить элемент на одну позицию вниз';
$GLOBALS['TL_LANG']['MSC']['lw_delete'] = 'Удалить элемент';
$GLOBALS['TL_LANG']['MSC']['tw_import'][0] = 'CSV импорт';
$GLOBALS['TL_LANG']['MSC']['tw_import'][1] = 'Импорт табличных значений из CSV-файла';
$GLOBALS['TL_LANG']['MSC']['tw_expand'] = 'Увеличить размер поля ввода';
$GLOBALS['TL_LANG']['MSC']['tw_shrink'] = 'Уменьшить размер поля ввода';
$GLOBALS['TL_LANG']['MSC']['tw_rcopy'] = 'Дублировать строку';
$GLOBALS['TL_LANG']['MSC']['tw_rup'] = 'Переместить строку на одну позицию вверх';
$GLOBALS['TL_LANG']['MSC']['tw_rdown'] = 'Переместить строку на одну позицию вниз';
$GLOBALS['TL_LANG']['MSC']['tw_rdelete'] = 'Удалить строку';
$GLOBALS['TL_LANG']['MSC']['tw_ccopy'] = 'Дублировать колонку';
$GLOBALS['TL_LANG']['MSC']['tw_cmovel'] = 'Переместить колонку на одну позицию влево';
$GLOBALS['TL_LANG']['MSC']['tw_cmover'] = 'Переместить колонку на одну позицию вправо';
$GLOBALS['TL_LANG']['MSC']['tw_cdelete'] = 'Удалить колонку';
$GLOBALS['TL_LANG']['MSC']['ow_copy'] = 'Дублировать строку';
$GLOBALS['TL_LANG']['MSC']['ow_up'] = 'Переместить строку на одну позицию вверх';
$GLOBALS['TL_LANG']['MSC']['ow_down'] = 'Переместить строку на одну позицию вниз';
$GLOBALS['TL_LANG']['MSC']['ow_delete'] = 'Удалить строку';
$GLOBALS['TL_LANG']['MSC']['ow_value'] = 'Значение';
$GLOBALS['TL_LANG']['MSC']['ow_label'] = 'Метка';
$GLOBALS['TL_LANG']['MSC']['ow_key'] = 'Ключ';
$GLOBALS['TL_LANG']['MSC']['ow_default'] = 'По умолчанию';
$GLOBALS['TL_LANG']['MSC']['ow_group'] = 'Группа';
$GLOBALS['TL_LANG']['MSC']['mw_copy'] = 'Дублировать строку';
$GLOBALS['TL_LANG']['MSC']['mw_up'] = 'Переместить строку на одну позицию вверх';
$GLOBALS['TL_LANG']['MSC']['mw_down'] = 'Переместить строку на одну позицию вниз';
$GLOBALS['TL_LANG']['MSC']['mw_delete'] = 'Удалить строку';
$GLOBALS['TL_LANG']['MSC']['mw_module'] = 'Модуль';
$GLOBALS['TL_LANG']['MSC']['mw_column'] = 'Колонка';
$GLOBALS['TL_LANG']['MSC']['aw_title'] = 'Название';
$GLOBALS['TL_LANG']['MSC']['aw_link'] = 'Ссылка';
$GLOBALS['TL_LANG']['MSC']['aw_caption'] = 'Подпись';
$GLOBALS['TL_LANG']['MSC']['aw_delete'] = 'Удалить язык';
$GLOBALS['TL_LANG']['MSC']['aw_new'] = 'Добавить язык';
$GLOBALS['TL_LANG']['MSC']['relative'] = 'Относительные размеры';
$GLOBALS['TL_LANG']['MSC']['proportional'][0] = 'Пропорционально';
$GLOBALS['TL_LANG']['MSC']['proportional'][1] = 'Более длинная сторона изображения скорректирована относительно заданного размера и изображение изменено пропорционально.';
$GLOBALS['TL_LANG']['MSC']['box'][0] = 'Установить поле';
$GLOBALS['TL_LANG']['MSC']['box'][1] = 'Более короткая сторона изображения скорректирована относительно заданного размера и изображение изменено пропорционально.';
$GLOBALS['TL_LANG']['MSC']['crop'] = 'Точный размер';
$GLOBALS['TL_LANG']['MSC']['left_top'][0] = 'Лево | Верх (Left | Top)';
$GLOBALS['TL_LANG']['MSC']['left_top'][1] = 'Сохраняет левую часть альбомного изображения и верхнюю часть портретного изображения.';
$GLOBALS['TL_LANG']['MSC']['center_top'][0] = 'Центр | Верх (Center | Top)';
$GLOBALS['TL_LANG']['MSC']['center_top'][1] = 'Сохраняет центральную часть альбомного изображения и верхнюю часть портретного изображения.';
$GLOBALS['TL_LANG']['MSC']['right_top'][0] = 'Право | Верх (Right | Top)';
$GLOBALS['TL_LANG']['MSC']['right_top'][1] = 'Сохраняет правую часть альбомного изображения и верхнюю часть портретного изображения.';
$GLOBALS['TL_LANG']['MSC']['left_center'][0] = 'Лево | Центр (Left | Center)';
$GLOBALS['TL_LANG']['MSC']['left_center'][1] = 'Сохраняет левую часть альбомного изображения и центральную часть портретного изображения.';
$GLOBALS['TL_LANG']['MSC']['center_center'][0] = 'Центр | Центр (Center | Center)';
$GLOBALS['TL_LANG']['MSC']['center_center'][1] = 'Сохраняет центральную часть альбомного изображения и центральную часть портретного изображения.';
$GLOBALS['TL_LANG']['MSC']['right_center'][0] = 'Право | Центр (Right | Center)';
$GLOBALS['TL_LANG']['MSC']['right_center'][1] = 'Сохраняет правую часть альбомного изображения и центральную часть портретного изображения.';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][0] = 'Лево | Низ (Left | Bottom)';
$GLOBALS['TL_LANG']['MSC']['left_bottom'][1] = 'Сохраняет левую часть альбомного изображения и нижнюю часть портретного изображения.';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][0] = 'Центр | Низ (Center | Bottom)';
$GLOBALS['TL_LANG']['MSC']['center_bottom'][1] = 'Сохраняет центральную часть альбомного изображения и нижнюю часть портретного изображения.';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][0] = 'Право | Низ (Right | Bottom)';
$GLOBALS['TL_LANG']['MSC']['right_bottom'][1] = 'Сохраняет правую часть альбомного изображения и нижнюю часть портретного изображения.';
$GLOBALS['TL_LANG']['MSC']['id'][0] = 'ID';
$GLOBALS['TL_LANG']['MSC']['id'][1] = 'Внимание, изменение идентификатора (ID) может привести к нарушению целостности данных!';
$GLOBALS['TL_LANG']['MSC']['pid'][0] = 'Родительский ID';
$GLOBALS['TL_LANG']['MSC']['pid'][1] = 'Внимание, изменение родительского идентификатора (ID) может привести к нарушению целостности данных!';
$GLOBALS['TL_LANG']['MSC']['sorting'][0] = 'Сортировка значений';
$GLOBALS['TL_LANG']['MSC']['sorting'][1] = 'Сортировка значений используется для выстраивания записей в нужном порядке.';
$GLOBALS['TL_LANG']['MSC']['all'][0] = 'Редактировать все';
$GLOBALS['TL_LANG']['MSC']['all'][1] = 'Редактировать несколько записей одновременно';
$GLOBALS['TL_LANG']['MSC']['all_override'][0] = 'Переопределить несколько';
$GLOBALS['TL_LANG']['MSC']['all_override'][1] = 'Переопределить несколько записей сразу';
$GLOBALS['TL_LANG']['MSC']['all_fields'][0] = 'Доступные поля';
$GLOBALS['TL_LANG']['MSC']['all_fields'][1] = 'Выберите поля, которые хотите отредактировать.';
$GLOBALS['TL_LANG']['MSC']['password'][0] = 'Пароль';
$GLOBALS['TL_LANG']['MSC']['password'][1] = 'Введите пароль.';
$GLOBALS['TL_LANG']['MSC']['confirm'][0] = 'Подтвердите пароль';
$GLOBALS['TL_LANG']['MSC']['confirm'][1] = 'Подтвердите пароль.';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][0] = 'Дата добавления';
$GLOBALS['TL_LANG']['MSC']['dateAdded'][1] = 'Дата добавления: %s';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][0] = 'Последний вход';
$GLOBALS['TL_LANG']['MSC']['lastLogin'][1] = 'Последний вход: %s';
$GLOBALS['TL_LANG']['MSC']['move_up'][0] = 'Переместить вверх';
$GLOBALS['TL_LANG']['MSC']['move_up'][1] = 'Переместить на одну позицию вверх';
$GLOBALS['TL_LANG']['MSC']['move_down'][0] = 'Переместить вниз';
$GLOBALS['TL_LANG']['MSC']['move_down'][1] = 'Переместить на одну позицию вниз';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][0] = 'URL файлов';
$GLOBALS['TL_LANG']['MSC']['staticFiles'][1] = 'URL файлов применяется к каталогу <em>files</em> и всем эскизам изображений (оптимизация скорости страниц).';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][0] = 'URL ресурсов';
$GLOBALS['TL_LANG']['MSC']['staticPlugins'][1] = 'URL ресурсов применяется к каталогу <em>assets</em> и всем ресурсам внутри (оптимизация скорости страниц).';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][0] = 'Комбинации клавиш панели управления';
$GLOBALS['TL_LANG']['MSC']['shortcuts'][1] = 'Узнайте больше об ускорении рабочего процесса при помощи <a href="http://contao.org/en/keyboard-shortcuts.html" title="Обзор сочетаний клавиш на contao.org" target="_blank">комбинаций клавиш</a>.';
$GLOBALS['TL_LANG']['MSC']['toggleAll'][0] = 'Переключить все';
$GLOBALS['TL_LANG']['MSC']['toggleAll'][1] = 'Развернуть или свернуть все узлы';
$GLOBALS['TL_LANG']['MSC']['lockedAccount'][0] = 'Учетная запись Contao заблокирована';
$GLOBALS['TL_LANG']['MSC']['lockedAccount'][1] = "Следующая учетная запись Contao была заблокирована по соображениям безопасности.\n\nИмя пользователя: %s\nРеальное имя: %s\nВеб-сайт: %s\n\nУчетная запись заблокирована на %d минут, так как пользователь ввел неверный пароль три раза подряд. После истечения этого периода времени, учетная запись будет автоматически разблокирована.\n\nЭто письмо создано автоматически Contao. Вы не сможете ответить на него.\n";
$GLOBALS['TL_LANG']['MSC']['toggleMobile'][0] = 'Мобильная версия';
$GLOBALS['TL_LANG']['MSC']['toggleMobile'][1] = 'Перейти к мобильной версии';
$GLOBALS['TL_LANG']['MSC']['toggleDesktop'][0] = 'Полная версия';
$GLOBALS['TL_LANG']['MSC']['toggleDesktop'][1] = 'Перейти к полной версии';
$GLOBALS['TL_LANG']['MSC']['feLink'] = 'Перейти к внешнему интерфейсу';
$GLOBALS['TL_LANG']['MSC']['fePreview'] = 'Предпросмотр';
$GLOBALS['TL_LANG']['MSC']['fePreviewTitle'] = 'Предпросмотр веб-сайта в новом окне';
$GLOBALS['TL_LANG']['MSC']['feUser'] = 'Пользователь внешнего интерфейса';
$GLOBALS['TL_LANG']['MSC']['backToTop'] = 'Наверх';
$GLOBALS['TL_LANG']['MSC']['backToTopTitle'] = 'Перейти наверх';
$GLOBALS['TL_LANG']['MSC']['home'] = 'Домой';
$GLOBALS['TL_LANG']['MSC']['homeTitle'] = 'Перейти к начальной странице панели управления';
$GLOBALS['TL_LANG']['MSC']['user'] = 'Пользователь';
$GLOBALS['TL_LANG']['MSC']['loginTo'] = 'Вход в: <em>%s</em>';
$GLOBALS['TL_LANG']['MSC']['loginBT'] = 'Вход';
$GLOBALS['TL_LANG']['MSC']['logoutBT'] = 'Выход';
$GLOBALS['TL_LANG']['MSC']['logoutBTTitle'] = 'Закрыть текущую сессию';
$GLOBALS['TL_LANG']['MSC']['backBT'] = 'Назад';
$GLOBALS['TL_LANG']['MSC']['backBTTitle'] = 'Вернуться на предыдущую страницу';
$GLOBALS['TL_LANG']['MSC']['cancelBT'] = 'Отмена';
$GLOBALS['TL_LANG']['MSC']['deleteConfirm'] = 'Вы действительно хотите удалить запись ID %s?';
$GLOBALS['TL_LANG']['MSC']['delAllConfirm'] = 'Вы действительно хотите удалить выбранные записи?';
$GLOBALS['TL_LANG']['MSC']['filterRecords'] = 'Записи';
$GLOBALS['TL_LANG']['MSC']['filterAll'] = 'Все';
$GLOBALS['TL_LANG']['MSC']['showRecord'] = 'Показать детали записи %s';
$GLOBALS['TL_LANG']['MSC']['editRecord'] = 'Редактировать запись %s';
$GLOBALS['TL_LANG']['MSC']['all_info'] = 'Редактировать выбранные записи в таблице %s';
$GLOBALS['TL_LANG']['MSC']['showOnly'] = 'Показать';
$GLOBALS['TL_LANG']['MSC']['sortBy'] = 'Сортировать';
$GLOBALS['TL_LANG']['MSC']['filter'] = 'Фильтр';
$GLOBALS['TL_LANG']['MSC']['search'] = 'Поиск';
$GLOBALS['TL_LANG']['MSC']['noResult'] = 'Записи не найдены.';
$GLOBALS['TL_LANG']['MSC']['save'] = 'Сохранить';
$GLOBALS['TL_LANG']['MSC']['saveNclose'] = 'Сохранить и закрыть';
$GLOBALS['TL_LANG']['MSC']['saveNedit'] = 'Сохранить и отредактировать';
$GLOBALS['TL_LANG']['MSC']['saveNback'] = 'Сохранить и вернуться';
$GLOBALS['TL_LANG']['MSC']['saveNcreate'] = 'Сохранить и создать';
$GLOBALS['TL_LANG']['MSC']['continue'] = 'Продолжить';
$GLOBALS['TL_LANG']['MSC']['close'] = 'Закрыть';
$GLOBALS['TL_LANG']['MSC']['skipNavigation'] = 'Пропустить навигацию';
$GLOBALS['TL_LANG']['MSC']['selectAll'] = 'Выбрать всё';
$GLOBALS['TL_LANG']['MSC']['pw_new'] = 'Сменить пароль';
$GLOBALS['TL_LANG']['MSC']['pw_change'] = 'Введите новый пароль';
$GLOBALS['TL_LANG']['MSC']['pw_changed'] = 'Пароль был обновлен.';
$GLOBALS['TL_LANG']['MSC']['fallback'] = 'по умолчанию';
$GLOBALS['TL_LANG']['MSC']['view'] = 'Посмотреть в новом окне';
$GLOBALS['TL_LANG']['MSC']['fullsize'] = 'Открыть изображение в полный размер, в новом окне';
$GLOBALS['TL_LANG']['MSC']['datepicker'] = 'Выбор даты';
$GLOBALS['TL_LANG']['MSC']['colorpicker'] = 'Палитра цветов';
$GLOBALS['TL_LANG']['MSC']['pagepicker'] = 'Выберите страницы';
$GLOBALS['TL_LANG']['MSC']['filepicker'] = 'Выберите файлы';
$GLOBALS['TL_LANG']['MSC']['ppHeadline'] = 'Страницы Contao';
$GLOBALS['TL_LANG']['MSC']['fpHeadline'] = 'Файлы Contao';
$GLOBALS['TL_LANG']['MSC']['yes'] = 'да';
$GLOBALS['TL_LANG']['MSC']['no'] = 'нет';
$GLOBALS['TL_LANG']['MSC']['goBack'] = 'Вернуться';
$GLOBALS['TL_LANG']['MSC']['reload'] = 'Обновить';
$GLOBALS['TL_LANG']['MSC']['above'] = 'выше';
$GLOBALS['TL_LANG']['MSC']['below'] = 'ниже';
$GLOBALS['TL_LANG']['MSC']['date'] = 'Дата';
$GLOBALS['TL_LANG']['MSC']['tstamp'] = 'Дата изменения';
$GLOBALS['TL_LANG']['MSC']['entry'] = 'записей <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['entries'] = 'записей <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['files'] = 'файлов <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['left'] = 'слева';
$GLOBALS['TL_LANG']['MSC']['center'] = 'по центру';
$GLOBALS['TL_LANG']['MSC']['right'] = 'справа';
$GLOBALS['TL_LANG']['MSC']['justify'] = 'по ширине';
$GLOBALS['TL_LANG']['MSC']['filetree'] = 'Файловая система';
$GLOBALS['TL_LANG']['MSC']['male'] = 'Мужчина';
$GLOBALS['TL_LANG']['MSC']['female'] = 'Женщина';
$GLOBALS['TL_LANG']['MSC']['fileSize'] = 'Размер файла';
$GLOBALS['TL_LANG']['MSC']['fileCreated'] = 'Создан';
$GLOBALS['TL_LANG']['MSC']['fileModified'] = 'Последнее изменение';
$GLOBALS['TL_LANG']['MSC']['fileAccessed'] = 'Последний доступ';
$GLOBALS['TL_LANG']['MSC']['fileDownload'] = 'Загрузить';
$GLOBALS['TL_LANG']['MSC']['fileDownloadTitle'] = 'Загрузить этот файл';
$GLOBALS['TL_LANG']['MSC']['fileImageSize'] = 'Ширина/высота в пикселах';
$GLOBALS['TL_LANG']['MSC']['filePath'] = 'Относительный путь';
$GLOBALS['TL_LANG']['MSC']['version'] = 'Версия';
$GLOBALS['TL_LANG']['MSC']['restore'] = 'Восстановить';
$GLOBALS['TL_LANG']['MSC']['backendModules'] = 'Панель управления';
$GLOBALS['TL_LANG']['MSC']['welcomeTo'] = '%s панель управления';
$GLOBALS['TL_LANG']['MSC']['updateVersion'] = 'Доступна Contao версии %s';
$GLOBALS['TL_LANG']['MSC']['wordWrap'] = 'Переход на новую строку';
$GLOBALS['TL_LANG']['MSC']['saveAlert'] = 'Внимание! Все несохраненные изменения будут потеряны. Продолжить?';
$GLOBALS['TL_LANG']['MSC']['toggleNodes'] = 'Все узлы';
$GLOBALS['TL_LANG']['MSC']['expandNode'] = 'Развернуть узел';
$GLOBALS['TL_LANG']['MSC']['collapseNode'] = 'Свернуть узел';
$GLOBALS['TL_LANG']['MSC']['loadingData'] = 'Загрузка данных';
$GLOBALS['TL_LANG']['MSC']['deleteSelected'] = 'Удалить';
$GLOBALS['TL_LANG']['MSC']['editSelected'] = 'Редактировать';
$GLOBALS['TL_LANG']['MSC']['overrideSelected'] = 'Заменить';
$GLOBALS['TL_LANG']['MSC']['moveSelected'] = 'Переместить';
$GLOBALS['TL_LANG']['MSC']['copySelected'] = 'Копировать';
$GLOBALS['TL_LANG']['MSC']['aliasSelected'] = 'Создать алиасы';
$GLOBALS['TL_LANG']['MSC']['changeSelected'] = 'Изменить выбор';
$GLOBALS['TL_LANG']['MSC']['resetSelected'] = 'Отменить выбор';
$GLOBALS['TL_LANG']['MSC']['fileManager'] = 'Открыть файл-менеджер в всплывающем окне';
$GLOBALS['TL_LANG']['MSC']['systemMessages'] = 'Системные сообщения';
$GLOBALS['TL_LANG']['MSC']['clearClipboard'] = 'Очистить буфер обмена';
$GLOBALS['TL_LANG']['MSC']['hiddenElements'] = 'Неопубликованные элементы';
$GLOBALS['TL_LANG']['MSC']['hiddenHide'] = 'скрыть';
$GLOBALS['TL_LANG']['MSC']['hiddenShow'] = 'показать';
$GLOBALS['TL_LANG']['MSC']['apply'] = 'Применить';
$GLOBALS['TL_LANG']['MSC']['applyTitle'] = 'Применить изменения';
$GLOBALS['TL_LANG']['MSC']['mandatory'] = 'Обязательное поле';
$GLOBALS['TL_LANG']['MSC']['create'] = 'Создать';
$GLOBALS['TL_LANG']['MSC']['delete'] = 'Удалить';
$GLOBALS['TL_LANG']['MSC']['protected'] = 'Защищенный';
$GLOBALS['TL_LANG']['MSC']['guests'] = 'Только для гостей';
$GLOBALS['TL_LANG']['MSC']['updateMode'] = 'Режим обновления';
$GLOBALS['TL_LANG']['MSC']['updateAdd'] = 'Добавить выбранные значения';
$GLOBALS['TL_LANG']['MSC']['updateRemove'] = 'Удалить выбранные значения';
$GLOBALS['TL_LANG']['MSC']['updateReplace'] = 'Заменить существующие записи';
$GLOBALS['TL_LANG']['MSC']['ascending'] = 'по возрастанию';
$GLOBALS['TL_LANG']['MSC']['descending'] = 'по убыванию';
$GLOBALS['TL_LANG']['MSC']['default'] = 'По умолчанию';
$GLOBALS['TL_LANG']['MSC']['helpWizard'] = 'Мастер помощи';
$GLOBALS['TL_LANG']['MSC']['helpWizardTitle'] = 'Мастер помощи';
$GLOBALS['TL_LANG']['MSC']['noCookies'] = 'Разрешите cookies для использования Contao.';
$GLOBALS['TL_LANG']['MSC']['copyOf'] = '%s (скопировано)';
$GLOBALS['TL_LANG']['MSC']['coreOnlyMode'] = 'Contao запущен в <strong>безопасном режиме</strong>, в котором загружаются только основные модули системы. Например, этот режим работы активируется после онлайн обновления, для предотвращения возможной несовместимости с модулями сторонних разработчиков. Вы можете отключить его в настройках панели управления после проверки совместимости с установленными модулями сторонних разработчиков.';
$GLOBALS['TL_LANG']['MSC']['name'] = 'Имя';
$GLOBALS['TL_LANG']['MSC']['emailAddress'] = 'E-mail адрес';
$GLOBALS['TL_LANG']['MSC']['register'] = 'Регистрация';
$GLOBALS['TL_LANG']['MSC']['accountActivated'] = 'Ваша учетная запись активирована.';
$GLOBALS['TL_LANG']['MSC']['accountError'] = 'Невозможно обработать текущий запрос.';
$GLOBALS['TL_LANG']['MSC']['emailSubject'] = 'Ваша регистрация на %s';
$GLOBALS['TL_LANG']['MSC']['adminSubject'] = 'Новая регистрация на %s';
$GLOBALS['TL_LANG']['MSC']['adminText'] = 'Новый участник (ID %s) зарегистрирован на веб-сайте. %s Если e-mail активация не разрешена, следует активировать учетную запись вручную, через панель управления.';
$GLOBALS['TL_LANG']['MSC']['requestPassword'] = 'Запрос пароля';
$GLOBALS['TL_LANG']['MSC']['setNewPassword'] = 'Установите новый пароль';
$GLOBALS['TL_LANG']['MSC']['newPasswordSet'] = 'Ваш пароль был обновлен.';
$GLOBALS['TL_LANG']['MSC']['passwordSubject'] = 'Ваш пароль требуется для %s';
$GLOBALS['TL_LANG']['MSC']['accountNotFound'] = 'Учетная запись не найдена';
$GLOBALS['TL_LANG']['MSC']['securityQuestion'] = 'Контрольный вопрос';
$GLOBALS['TL_LANG']['MSC']['closeAccount'] = 'Закрыть учетную запись';
$GLOBALS['TL_LANG']['MSC']['changeSelection'] = 'Изменить выбор';
$GLOBALS['TL_LANG']['MSC']['currentlySelected'] = 'Выбрано';
$GLOBALS['TL_LANG']['MSC']['selectNode'] = 'Показать только этот узел';
$GLOBALS['TL_LANG']['MSC']['selectAllNodes'] = 'Показать все узлы';
$GLOBALS['TL_LANG']['MSC']['showDifferences'] = 'Показать отличия';
$GLOBALS['TL_LANG']['MSC']['editElement'] = 'Редактировать элемент';
$GLOBALS['TL_LANG']['MSC']['table'] = 'Таблица';
$GLOBALS['TL_LANG']['MSC']['description'] = 'Описание';
$GLOBALS['TL_LANG']['MSC']['noVersions'] = 'В настоящее время нет версий.';
$GLOBALS['TL_LANG']['MSC']['latestChanges'] = 'Последние изменения';
$GLOBALS['TL_LANG']['MSC']['identicalVersions'] = 'Две выбранные версии идентичны.';
$GLOBALS['TL_LANG']['MSC']['selectNewPosition'] = 'Выберите (новое) расположение элемента';
$GLOBALS['TL_LANG']['MSC']['go'] = 'Перейти';
$GLOBALS['TL_LANG']['MSC']['quicknav'] = 'Быстрая навигация';
$GLOBALS['TL_LANG']['MSC']['quicklink'] = 'Быстрая ссылка';
$GLOBALS['TL_LANG']['MSC']['username'] = 'Пользователь';
$GLOBALS['TL_LANG']['MSC']['login'] = 'Вход';
$GLOBALS['TL_LANG']['MSC']['logout'] = 'Выход';
$GLOBALS['TL_LANG']['MSC']['loggedInAs'] = 'Вы вошли как %s.';
$GLOBALS['TL_LANG']['MSC']['emptyField'] = 'Введите имя пользователя и пароль!';
$GLOBALS['TL_LANG']['MSC']['confirmation'] = 'Подтверждение';
$GLOBALS['TL_LANG']['MSC']['sMatches'] = '%s вариантов для %s';
$GLOBALS['TL_LANG']['MSC']['sEmpty'] = 'Нет совпадений для <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sResults'] = 'Результаты %s - %s из %s для <strong>%s</strong>';
$GLOBALS['TL_LANG']['MSC']['sNoResult'] = 'Ваш поиск <strong>%s</strong> не принес результатов.';
$GLOBALS['TL_LANG']['MSC']['seconds'] = 'секунды';
$GLOBALS['TL_LANG']['MSC']['up'] = 'Вверх';
$GLOBALS['TL_LANG']['MSC']['first'] = '&#171; Первая';
$GLOBALS['TL_LANG']['MSC']['previous'] = 'Предыдущая';
$GLOBALS['TL_LANG']['MSC']['next'] = 'Следующая';
$GLOBALS['TL_LANG']['MSC']['last'] = 'Последняя &#187;';
$GLOBALS['TL_LANG']['MSC']['goToPage'] = 'На страницу %s';
$GLOBALS['TL_LANG']['MSC']['totalPages'] = 'Страниц %s из %s';
$GLOBALS['TL_LANG']['MSC']['fileUploaded'] = 'Файл %s успешно загружен';
$GLOBALS['TL_LANG']['MSC']['fileExceeds'] = 'Изображение %s успешно загружено, однако оно слишком большое для автоматического изменения размера.';
$GLOBALS['TL_LANG']['MSC']['fileResized'] = 'Изображение %s загружено и уменьшено до максимально допустимых размеров.';
$GLOBALS['TL_LANG']['MSC']['searchLabel'] = 'Искать';
$GLOBALS['TL_LANG']['MSC']['keywords'] = 'Ключевые слова';
$GLOBALS['TL_LANG']['MSC']['options'] = 'Настройки';
$GLOBALS['TL_LANG']['MSC']['matchAll'] = 'Все слова';
$GLOBALS['TL_LANG']['MSC']['matchAny'] = 'Любое слово';
$GLOBALS['TL_LANG']['MSC']['saveData'] = 'Сохранить данные';
$GLOBALS['TL_LANG']['MSC']['printPage'] = 'Печать страницы';
$GLOBALS['TL_LANG']['MSC']['printAsPdf'] = 'Сохранить в PDF';
$GLOBALS['TL_LANG']['MSC']['facebookShare'] = 'Поделиться в Facebook';
$GLOBALS['TL_LANG']['MSC']['twitterShare'] = 'Добавить в Twitter';
$GLOBALS['TL_LANG']['MSC']['gplusShare'] = 'Поделиться в Google+';
$GLOBALS['TL_LANG']['MSC']['pleaseWait'] = 'Пожалуйста, подождите';
$GLOBALS['TL_LANG']['MSC']['loading'] = 'Загрузка...';
$GLOBALS['TL_LANG']['MSC']['more'] = 'Подробнее...';
$GLOBALS['TL_LANG']['MSC']['readMore'] = 'Прочитать всю статью: %s';
$GLOBALS['TL_LANG']['MSC']['targetPage'] = 'Целевая страница';
$GLOBALS['TL_LANG']['MSC']['invalidPage'] = 'К сожалению, "%s" не существует.';
$GLOBALS['TL_LANG']['MSC']['list_orderBy'] = 'Сортировать по %s';
$GLOBALS['TL_LANG']['MSC']['list_perPage'] = 'Результатов на странице';
$GLOBALS['TL_LANG']['MSC']['published'] = 'Опубликовано';
$GLOBALS['TL_LANG']['MSC']['unpublished'] = 'Не опубликовано';
$GLOBALS['TL_LANG']['MSC']['addComment'] = 'Добавить комментарий';
$GLOBALS['TL_LANG']['MSC']['autologin'] = 'Запомнить меня';
$GLOBALS['TL_LANG']['MSC']['relevance'] = 'Релевантность %s';
$GLOBALS['TL_LANG']['MSC']['invalidTokenUrl'] = 'Неверный токен';
$GLOBALS['TL_LANG']['MSC']['changelog'] = 'Журнал изменений';
$GLOBALS['TL_LANG']['MSC']['coreOnlyOff'] = 'Отключить';
$GLOBALS['TL_LANG']['UNITS'][0] = 'Байт';
$GLOBALS['TL_LANG']['UNITS'][1] = 'Кбайт';
$GLOBALS['TL_LANG']['UNITS'][2] = 'Мбайт';
$GLOBALS['TL_LANG']['UNITS'][3] = 'Гбайт';
$GLOBALS['TL_LANG']['UNITS'][4] = 'Тбайт';
$GLOBALS['TL_LANG']['UNITS'][5] = 'Пбайт';
$GLOBALS['TL_LANG']['UNITS'][6] = 'Эбайт';
$GLOBALS['TL_LANG']['UNITS'][7] = 'Збайт';
$GLOBALS['TL_LANG']['UNITS'][8] = 'Йбайт';
$GLOBALS['TL_LANG']['CONFIRM']['do'] = 'Модуль';
$GLOBALS['TL_LANG']['CONFIRM']['table'] = 'Задействованная таблица';
$GLOBALS['TL_LANG']['CONFIRM']['act'] = 'Действие';
$GLOBALS['TL_LANG']['CONFIRM']['id'] = 'Задействованная запись';
$GLOBALS['TL_LANG']['DP']['select_a_time'] = 'Выберите время';
$GLOBALS['TL_LANG']['DP']['use_mouse_wheel'] = 'Используйте колесо мыши для быстрого изменения значения';
$GLOBALS['TL_LANG']['DP']['time_confirm_button'] = 'OK';
$GLOBALS['TL_LANG']['DP']['apply_range'] = 'Применить';
$GLOBALS['TL_LANG']['DP']['cancel'] = 'Отмена';
$GLOBALS['TL_LANG']['DP']['week'] = 'Неделя';
$GLOBALS['TL_LANG']['MSC']['dragItemsHint'] = 'Перетащите элементы для изменения их порядка';
