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
define( 'DB_NAME', 'cip_db' );

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
define( 'AUTH_KEY',         '1~RK<=[J0a9!@vZ];3%=g6g.FB`&K9dMrHP9N(IS=S(Z A1_T0kJvK2^~04#,z)c' );
define( 'SECURE_AUTH_KEY',  'Xt[^Z$p8)zH/2NKM qYnO<.P^}KV&z6cH?b`EcG/vU/H5nd|(]n^&$iA`j]tFsT&' );
define( 'LOGGED_IN_KEY',    't%5Ltfm_Mk_a&>{)#BTbvU>{Cxg]%IZZo;?J.=|i=FLLPUri&5N{PQ-{2;<Ts0J$' );
define( 'NONCE_KEY',        'e$qk)]L8jBKba8rmHfKVmV)>><0#abKs]3M=`~bS*K|HC(^CuR7v;YU;ZASG@Mg&' );
define( 'AUTH_SALT',        'Lh$(@BFVAi-!e>r#9c57:Jj7tb,MU?:FdQt8x4F:JG=LV~xvLtI(&j_kCz4/0rAc' );
define( 'SECURE_AUTH_SALT', 'F+=j]Q9pX3bG2l HyOAy/?K;sy}meoidDo24x:YM|7A4{VLQNe/0eL(M.XyEbfi9' );
define( 'LOGGED_IN_SALT',   '&Yc48Z3]@W5^euu]yJ5tDR$.l^iI@L_>9R0rWT~_U>/F6n&09hh-bVMXdfS:zyC2' );
define( 'NONCE_SALT',       'RrGa@>dj,^`2|3!%VLp2IxKmRoh^+ [H<8Px9oTp$|&;}7&D[A U;I[b*8Gib/Gg' );

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
