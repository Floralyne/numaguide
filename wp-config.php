<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'numaguide' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yfgvZb3i`^(&^?`pieEuWbVJ!KPfS}o#%n17|5jje@:vNXY8f<?2zEfVL}qge8K9' );
define( 'SECURE_AUTH_KEY',  '`k8br@) mR&9ik,l_dxF:75Ft$S4M<++t1UfI@U*#Rdu/L]4#79m[Pn#lW-s#C^j' );
define( 'LOGGED_IN_KEY',    ',$/YJ/rF/9(??b:qBN7&?6>df!4-CV-ak3w77>&bIhnUl=cG{D(<R <a7}B5T{B@' );
define( 'NONCE_KEY',        'RytR3de&_c/2tE{Y3rAt~nJvi;x`?jbfNSv@Vd!qAM>]09tF&{q`eGpuAQ[Rk@57' );
define( 'AUTH_SALT',        'D3s{H5BF3,V_4~kskzQL1PvIar8/YY1m?jVf,]$i-mxncH#T/85c<P]k]HJk<krQ' );
define( 'SECURE_AUTH_SALT', '6fu-32)[ia^2s&<mo,e3x9#$;t/Eu22]TcYI!&%wz`@~YOxPM>(lA=)%>7!qwiZ-' );
define( 'LOGGED_IN_SALT',   'zLLpMO++e j?<U3[hoN89 UdZ2ht#.#a_.L{LCWxF$UTDfTEqrbMN69Oca->?@Nw' );
define( 'NONCE_SALT',       'k};#~$gzMo?TO9fvA^e2xx-l6!FbEw{i-Tz<V6HH4=k%n(4F~I=anVHCN z=4<el' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
