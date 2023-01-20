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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'web' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '-E_LJ#R,-ZGCq&=((g}`$.Qr&)TfBZB?9<Qd^E}5?1,M.xAp7YnV)3nAd}~ZWc0e' );
define( 'SECURE_AUTH_KEY',  'xk@0*<+;B92+?<4r:z&HJS!%D2KPI{uoO]Xntj.5z6-NE2PWlNvBp[6/?Pfbm<#L' );
define( 'LOGGED_IN_KEY',    'A*Zg )8ROl4/6W2Qi2zexgOcI{v=!#i:[-5;^#&(*97C{L.BX~pg9&?3]fkb;K3(' );
define( 'NONCE_KEY',        'kb8/a/fsoP-!JW+.M nNR;-Y7Ym6oiQBZ-)Z$/+I;,hCtKdg(6QLZ3|;/kNUx(7I' );
define( 'AUTH_SALT',        '}pOb^gz*%al1z8HE_|J3D/.qU^;rni^x|0m_,`a2r#6^R)l$h:Q sCFM+F&[bM-0' );
define( 'SECURE_AUTH_SALT', 'IQ>yfsg=f^?cU)=BTZ0<zJOfOF?.3?>c{8v-u[U|f#D[_Prq9w#]ao$3!VM|0BMs' );
define( 'LOGGED_IN_SALT',   '+3,oA?NrO~cj/=sF9-HhY FSSpUw08rQ-^UGe8SO,4t@R}d~,xB+_N5N4Q<Cm|j,' );
define( 'NONCE_SALT',       'UKZ2[Ky/oug.ews>Uh/p,}}R.:4KvhSE!aZ3j2Qqsj#~GTk=J)Asx=hK~GUs$g*B' );

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
