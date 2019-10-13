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
define( 'DB_NAME', 'baza' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'x3~,z`&EUr}<2YI;G_RpWKk52z!<x$MQL;!wyqIVIwent%_Nf&UT@nE}ROZ+?Y98' );
define( 'SECURE_AUTH_KEY',  'CjUM90Q7s.R^pbwkim,8ac(^?tr5~0l~l}*whsbU%#EjflbyenGT5}w39tk*e_&t' );
define( 'LOGGED_IN_KEY',    'Yy(z|3(ldZk4F|~G}xyUI>q}D+C]cL)nbx`$)r).=m&z/m|  ~g58zioqZbxuZbw' );
define( 'NONCE_KEY',        '6&i=?8pVtpLa/p`^E12@JPHl~^`#G#L2h$Y@;{Vio< NlJRb1i3H2*~C8-K/J+9A' );
define( 'AUTH_SALT',        '[92pAhj^xkaM7} 3yk_ xZgM67i*k$g_4-vD[P,$-TDCTyYOrHewx9GO:.>rWXBB' );
define( 'SECURE_AUTH_SALT', '!D)lz<3Xz]Jg(X7WI.9u<0+MmJ5&b(#]{gIzdZYF4oyyRk`0Wy9k4k.GIsx,gy<I' );
define( 'LOGGED_IN_SALT',   'lO-$HIPG3z4VH? J[&gq>bn.4@Ym6;yu:),5}E qBVk^BQ$S?:;C6Z#9RGh{ho>R' );
define( 'NONCE_SALT',       '7<D9L*Z@DhJ0K#&grZ3;<0OHoNbbL]Y>[7_cbKhR,W.!J}iJ3`3ENqIYgP]_?km=' );

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
