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
define( 'DB_NAME', 'landingtaxi' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'landingtaxi' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '0;Jj27.op1M!}e}Psa&`^`)~;<W`V*DxS&z]v!;%N4xf.g1{vQOR:uEUSX~M<_5b' );
define( 'SECURE_AUTH_KEY',  'rxKXs9pOb{}#mgMvf6}iqrG8KzETelt_boFg+F#(=YMt9kM!9ot6uR-|[503}V(-' );
define( 'LOGGED_IN_KEY',    '(W$3J88ZeJkbd2ZaLslsiBRvGjl}_B_/oj;@G,TGOI%t9@i>7V9kRi0,2;fSHA?N' );
define( 'NONCE_KEY',        ']G-q9v :w#&I,nNtFPN_jRW!OR,v,kV[h.AP$DV8qYrQ(5hCIV-,w{#,F8XtFelQ' );
define( 'AUTH_SALT',        '=H8yM}.g+.+sB?acv(i(,UdUd/++c!Am3xWX`Uelong,&[Yh`mCevt+C{s/L?Q03' );
define( 'SECURE_AUTH_SALT', 'K @nY8YaXZ+vaT%uF8nNF9.i-#5;5kZN,u;x6PJ+?rUKCx@H1OOsK-)kFG&K|TUv' );
define( 'LOGGED_IN_SALT',   '1]Q%.rEz5_;gyN:Ozqm0):`x#F-i9)q=`ugwJYbQ[5kEuG0c@G[,BQr{rR>0O4UN' );
define( 'NONCE_SALT',       '?LZy~Vx+4[=~{{N[);WwZ0.;-G!Lr=|HHb&&5HT.VV@Av;NfVlJd%r(^:pl?Xz]@' );

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
