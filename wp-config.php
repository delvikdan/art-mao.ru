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
define( 'DB_NAME', 'ouspen_pr' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ouspen_pr' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'JuYDXE&7' );

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
define( 'AUTH_KEY',         'TpnW|kQ4N)H<!_jQ[/qW>0!0=u8%xLR%l*(wgyw)C%Y;j,VC=:D $f-hxRM=CMvH' );
define( 'SECURE_AUTH_KEY',  'Lw6F)IDF@>nj=RjR%B0fifa.lrdc>fY!Q&]RxuGOWHghyk<v81)sp_q6T=Z.U60n' );
define( 'LOGGED_IN_KEY',    '~D.Tj f8(c0R_X=N)+_Q2#s5I.})gSG;6||VDk8PNWC2<B%dojpQzKHI,bg=2<}d' );
define( 'NONCE_KEY',        'OpcQ:mtGo-#{xtdfBS0=V=ppbUJV$D::p46heKikLA6V7M+{.>7lrm*~)sq{{@tG' );
define( 'AUTH_SALT',        '0RfM#T(6Zs4+;7rt2.gjn`GY<qon/ flH8tDIx%L:[8+M*Zm.0&5M125vcdi@3kD' );
define( 'SECURE_AUTH_SALT', 'ksETb7?uv?tb&)Q}?Ou YGW<.6F R6V;?6ak}W;?]vQ!fC=)Or[WXu?,}X.1V]Qa' );
define( 'LOGGED_IN_SALT',   '=us>roiTg k==;TR_CR[Y2&nG=U=~i<  9Iuk{oOn`|[An%}t&Wz}?tMIH:4bG{D' );
define( 'NONCE_SALT',       '/c6Z)j@_z:pPe*Ri:c|zYvMsoTD(Zd1}GPk+J7mS?O>&<P191#Y+YjrE=l#d`]kt' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'mao_';

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

/** Contact Form 7 Removing BR tags */
define("WPCF7_AUTOP",false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
