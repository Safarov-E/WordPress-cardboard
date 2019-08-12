<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'cardboard' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cardboard_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'C9zwffz9' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '14hMX^F{5/D=A.z6q:L?8dN4n?yHJ>F9NuaMq1?$bL}^u5kjkC)]Hgy6R>L7${k7' );
define( 'SECURE_AUTH_KEY',  'InNcvwT2M,r/-z/^;l1LyL( D0{Ha{HEM C@b-5:gShrrt^x/G#ukHX~sXe+I?af' );
define( 'LOGGED_IN_KEY',    '9hXjy9O3E(j#r#]S<}*Oy5Mbxv?S8%ZNi_DpJ,(r05nw][(iUZ%M/`^iKB5/8upR' );
define( 'NONCE_KEY',        'T:<NRa-:AX*oIym#bDbZD1|cEe2g6.GXI(h0rGgNntZ)<io]1P=(u=PX1jqXin/ ' );
define( 'AUTH_SALT',        'NgQIYwO=A}{Gx(7MFUHXTiu;52y_7PUlBHS:/^zBiXZ2%q~^2G gi^WJ%grob*Za' );
define( 'SECURE_AUTH_SALT', 'W??$29|+I1UC0%(xhHwN/+5Q^ U)/EVTV&|@l1g7}W(Sw&g;9gkMafTz-MaW`2v=' );
define( 'LOGGED_IN_SALT',   '_[_X/@MdYJ$F9cA/+W=Zp:OEhjn]N4hHty=uB4O-yzn{lj.^Z k0HMd&X.3>5pxu' );
define( 'NONCE_SALT',       'U>m{0v hc:-~DTw3ZD@X6>9=J!pU{FLUBrsvX?c9r25/^5yM60lpr9NB7+|EZC:;' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
