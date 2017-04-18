<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'brick');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'brick');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'brick2514');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'psB3g{VVs%`q_u+[O-6L3pL*}#y%iNFy@9E.-ZlO5oqHTsKVoO7rz2^X#q)L9e}P');
define('SECURE_AUTH_KEY', '@W,fv-*tph}[N *#F)mND/9UoVM);Y)lQ}0Wx6qi,:UwweYZiV*YtTo!+:Ie-;Q`');
define('LOGGED_IN_KEY', 'cRA=S2r7I26YB1V;%t9LOM`%e!(UM3IG+HeIp_uweZFlEuxnYw=@*VKl5^Cxv,NZ');
define('NONCE_KEY', ' RJZ@DWsZ9aR>KFfW?2Y%VsiPFbYdVr`HAJC5!G{!s=vBBg>=eO>{}URRjp-@NJd');
define('AUTH_SALT', '*g,p~$2[[sqaJRInNkLO-C@tvsK6KI!|NaD)_}iYTVg-{UErmhv4e%|DWF!qi,W$');
define('SECURE_AUTH_SALT', '?:gv@KPY0t`#H755~Uk~{o=%hEraPcFTG0X[0oc}fI5{Iu;a:m @QkU+ZMB>ptj)');
define('LOGGED_IN_SALT', '6TT,EK@uc6~Oe( #WChVp{f.@/%xW(;6Ci]vC;p3LO6[@UVfPpJ%/0)_H:1X78pT');
define('NONCE_SALT', '1Jtoi#!mQAvy(#b1jL+m^td]tschu(<) (k8_naD2G7G%:d*@o9+ucm{<G6gT1Ul');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

