<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'fonnie' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'fonnie' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'rEYWtWJahk6jyPsH' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mDbBnj5TR~x(kX`7..I7UY;=<cqvtcmC*cSA,}S5Zh9IKqc]0r?/%^4SL0]ay|GC' );
define( 'SECURE_AUTH_KEY',  '$Qd<LkW;okt/[W }v<Cns:gFLtq2]qrp[>u5R{DM }!Zq;^XA=.r3*}g6V#*XC%.' );
define( 'LOGGED_IN_KEY',    'N.b p~I{[d?jf:YMV7iY[I/|s`^AXDFh[5A~1+(C%Ak9O|f8e$?*`2!l<1wg1J7k' );
define( 'NONCE_KEY',        '8I(SD0*sB,Aq&ZKY.~=e7<#{L:SdhIOzmj,]Y FR@GFA9:$zsFdSqu5~-EMnv$l6' );
define( 'AUTH_SALT',        'HG`?h3M1[ m-aJ3J9meU+RwGy7YDUh_U%.-+t.=3juFPM=D2d+A^ K {2).Ha?VN' );
define( 'SECURE_AUTH_SALT', 'jy4yp Nys%sm%@tl7T21*v#*h!NFIg_ds|3dUN<5<=_R0&3Y,TMmV^u:1ZEho)lP' );
define( 'LOGGED_IN_SALT',   'wT`RKbNhbQrTE2Tut>X8>}. c-8D4QpH:JnZUdkX>w^y>&SeD%A<dMetuo70^yXe' );
define( 'NONCE_SALT',       'e~,8~nwT]`mLFa0xDPb5%S8kPW;u((^`-Iq9HRN%$.${ba`OFi5a6Hl[Jto>}-3}' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'fn_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
