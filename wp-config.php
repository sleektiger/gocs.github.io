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
define( 'DB_NAME', 'gocs' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'N5le4E@{tO|}`2%hSnT1U)m!m|G}z}z@_ggFl<JrT @{%(f`+cRNj>@.r}Ravc(]' );
define( 'SECURE_AUTH_KEY',  't+tuRvbk<@#/Ohy?S}}dM+3DKE/X %KU.gY)au)&b=B(sbcCa:Sx0[%^_x{T^1HJ' );
define( 'LOGGED_IN_KEY',    '85-MSc|/7$~|!FxyJC+3rq]OyzFCo9CX2E9w.`@jne@vp4sxeoz#7VLO_dR$k&PZ' );
define( 'NONCE_KEY',        '61Q,0+RQg@SO2yO%HYha Cv6 6m-<&Q*FX,a.W@(]oMClMoIiF$.->$[]26bIugi' );
define( 'AUTH_SALT',        '4p79=&SD&t7<W:vusM1cp`G6Sz#cntDr2-&}7E#8`.mw_>C~IWfj+}]9d.DNj&YI' );
define( 'SECURE_AUTH_SALT', '2&+w?RzrO_DG&nn|}%-39!zkut6wFOW0|g>}AMke<]qC/U^wFE7T)_ePlO/adhbu' );
define( 'LOGGED_IN_SALT',   's]gz]BH^ICYy]~j{h3%B0>md2rg*YBscNE~d6WSC 1:/|WEe:R#k.{FV; rAV<Dp' );
define( 'NONCE_SALT',       'k0)Ex^#6M+*YEP<Q/Y,e,#L}Zir~NmK5:w!%6 3a<hJL-H*mw-CoYY@ff}=[JS^D' );

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
