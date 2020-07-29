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
define( 'DB_NAME', 'edu' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'lara' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost:8889' );

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
define( 'AUTH_KEY',         'TT,zCy37w=*} S)3njp#@d6DK>.?.M$iV=-[Q?/4G9o6=H,J>&JZCq,E<6jw3;DY' );
define( 'SECURE_AUTH_KEY',  '3Eo#)fTvoL4s}m1K|r^8qLqrF@$w^){GCq.0Ywc(GL-&{6i@f&tR1PX[76qys=}s' );
define( 'LOGGED_IN_KEY',    ' 5H|CO>y$]>5iTb%gM[GUXJ)w#wbvw5caN;/-W+%U#4+(R_j9Iw^(UaXkvk|& YC' );
define( 'NONCE_KEY',        'y{%a7^Q(2hLN63-NH]%3f?XA7s9nVBU?JPNLOol-i^)2p@imF52qJ.7@JW0)ImK<' );
define( 'AUTH_SALT',        '{V?P^+,:w:Ks^6S9TiX4|byZN;HE+`| |_kX&Nz]0faTyII@j$w}Z]i_xm?1Q_:$' );
define( 'SECURE_AUTH_SALT', '!3vMu=|Vxg0@ C(O]K>OF`/ [:IgJd>iVB#z8L!Ui_sJlRqQ_l!mB12Y$_5aRP%x' );
define( 'LOGGED_IN_SALT',   'XaAd~=OFy&C=J42d_8=-Ob:ibJS.s4N]D$GDrT<`hGOgbb*_7uuq@9Q&TdDU;;3*' );
define( 'NONCE_SALT',       'BsDCnioch6 ]E{ayU`Ng>Dc#.9Co5Yd&&%/&w3cnZ%93T ml-?N2J6t{-Qd4`fv%' );

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
