<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', 'wp_db' );

/** MySQL felhasználónév */
define( 'DB_USER', 'root' );

/** MySQL jelszó. */
define( 'DB_PASSWORD', '@Piros1Feher2Zold3!' );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', 'localhost' );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', ',)&VUN4cC#}7UOsO#gO5gsB!s!MfbSxCv+]*@[Abq=lIp_uFyZ#yn4[,_*up0`Lf' );
define( 'SECURE_AUTH_KEY', '3cJN3fDC3qwSWvWUX{aC>{RTBGUff!o.G@in6y5ZA]!VYTG*EnYkFRh[?i}HZgEs' );
define( 'LOGGED_IN_KEY', '2];{<w4K^ [7:xJ]UM.9KS,M$5lD{Sa(k/^&?~$NX^2Q5=geg(n<f1a-#O&S#3e:' );
define( 'NONCE_KEY', '/noh{}E?,f_JFZKvV5<1/s.nZyMEGB@T,q}<$/<@A/$wX[;iBL$>p$K|h4r9o,mv' );
define( 'AUTH_SALT',        '=!~:`a-+wl7Supa7.e.2=RU219Q_AgDSQC<d-4WDrHMEdJ%{`D&aRNU~=7C{D&{J' );
define( 'SECURE_AUTH_SALT', ':ZC{I[l?q3Ji6&k6?7Zn5D?uEfA?q2o#wzyLQeo$W.sPWii&/}]%pvj%_7TF<m:6' );
define( 'LOGGED_IN_SALT',   'A:S:m]:R!nh*OyU%L)-.1K[6e4Baq&zKl0f8Z_(3f<2_&Bdj5L^qmPt5A|MU}S5q' );
define( 'NONCE_SALT',       'xN;?Ua($g]LiG|=psLsp,gW7ZO5uw]uu-D%HT~e>]H/1>84;GDAGfVSkhB)o<]+n' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
