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
define( 'DB_NAME', 'first_site_test' );

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
define( 'AUTH_KEY',         '{nazm$!L(}e,o@fbcx3-<_+-SnSL0cjm|fc0m!Tpnvr#>$hiKh0NWW`DupWy_HGW' );
define( 'SECURE_AUTH_KEY',  'x=0)9y0%d`*)7ZG_4ZhOzoqmQ%OYnN7ZYiLtDCcG?lf%lc]R]t3.62:PlPDLrxL&' );
define( 'LOGGED_IN_KEY',    ')cT:!o,!Y8/Qn[Jt*%@Ds<3{{Zu[`W59ZTM0Vf(&xA44I  fZfOmPA6RQ#8_RC=2' );
define( 'NONCE_KEY',        '+D,M`;lC6=-qnE{qAnx#ho/SZ}q9u,-2>y)IntQfdmPQ6ru|-hZ6s-t+9s 6fKz{' );
define( 'AUTH_SALT',        'hk+`_&eu5%T$xH5=GKRx8,6Wk=Y@;Jr0:B_n5mB>e-&YAg,|WD7cO5#$0a2W-Kvp' );
define( 'SECURE_AUTH_SALT', 'HGy|UN`,/Z,K.s_2tFfNNR_7[V9vw9))nV~W*g,}(&g.bQ>XmV$`a0?`DL>V{N#n' );
define( 'LOGGED_IN_SALT',   'I5$pI{<2tA6fJ8P,$Jm3q-IYzzf5Cj,5N:ak[&>GGf!$<I@j/^*=tq>gdB?Ct>7)' );
define( 'NONCE_SALT',       'emP3}K~~P @3LTcQnspjnx=anaOm2de{}KNLEMnqleM|eH&80V7hhV!]5^g:;<K ' );

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
define( 'WP_DEBUG', true );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */

// Включить журнал /wp-content/debug.log
define( 'WP_DEBUG_LOG', true );

// Отключить вывод на экран
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Использовать версии JS и CSS для разработчика (при тестировании изменений в них)
define( 'SCRIPT_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
