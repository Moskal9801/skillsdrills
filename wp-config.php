<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'skillsdrills_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vDO/ccubQ:;v[=UW#^%``7=(*4}t1|$>ala/kWgD2$U?*c@HQXAHVJX<%=t%f+.`' );
define( 'SECURE_AUTH_KEY',  '.~s#tAgPjFfREx?FTC;n&Q}L%bWjU>,{?5`z=3E|DmaO:#^9 7r4 QX1]u=&?e3=' );
define( 'LOGGED_IN_KEY',    'yT/VBDfK=,*Q&9;h]N^;Qpg./tHY|c=,R)`b>%+H#BIYT}hF6dtD9uBECUIGLv=%' );
define( 'NONCE_KEY',        'p(>ChOAWl3N]miXDaO:M6ty{R$@hX3xVmWf >;<8cD|#|&F#OgEa<_@75$^u:cS=' );
define( 'AUTH_SALT',        'o?#,slURIA#i*D]yO%}I!0kULYc]0[.&[:bGPV~yHDW/obYGZ.9ErlaM{KEh5yS<' );
define( 'SECURE_AUTH_SALT', 'UaBr$hC/nkICjHxcxr(yELn]2v)3jtr6L%Mmt;$DWv1y6<BS%$Uf$O*[Q=i:2o5F' );
define( 'LOGGED_IN_SALT',   'c]I|-TVd-&EvLs7 .-%35jx2gylNJCc~Ts$.%t9$?f=g:5uzvo$>p#RIcuD;y3$j' );
define( 'NONCE_SALT',       'l}ZLZo=!rxJbg4d:$Oa&L|+{Yg~,bt[gW:V;5D8i4$i*55b:H8+!dw,IglvC[~W;' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
