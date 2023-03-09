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
define( 'DB_NAME', 'dentiste-bdd' );

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
define( 'AUTH_KEY',         '@O2}CR)gOYDk47NYb,bOMd$^3{_t>lew6d)RvjJ3-im ~}EnE9}jj4;5hF7XvEka' );
define( 'SECURE_AUTH_KEY',  '^wS0%@h4r]-~9Cfm~R7%cI?K^sN|cOLm^143JM!+mvd$8u4E?;vVn^:?}GfQ#,9p' );
define( 'LOGGED_IN_KEY',    'k7/#`HO#>R[c5I#,#pQ%b%}>TDUV075C*;!CwMMSP]Fej2`:@H*;`;-[oJh-KLqn' );
define( 'NONCE_KEY',        'RF3GqX7i2*Atv1cMUaha3aS$p~jt9]^+aM87Fgj_H$J|#|4Jy+7,f6<0D#FG|.i8' );
define( 'AUTH_SALT',        '9=T3ui2]$:;c>Dn0] Y^xROZ{$Zw<qzF0>f&9dfl|d{&;TMpIYUC_Jk(+5cd2]6d' );
define( 'SECURE_AUTH_SALT', 'MLI~N(88 &OK/76$tl~tIGI}LDt-_uxk10wGA1HSa5FL0.BAa>!{$=kqE2uy9+n ' );
define( 'LOGGED_IN_SALT',   'w-w5O2ELQR?~8EM0/k?LYR-2140~m<_s%oiy NwiM6ae!61B/Nom+!*_zW@/7t5i' );
define( 'NONCE_SALT',       'j1XH_yjUXMChm!^*a7ctL?@dTjLm,P>+Ty$#=YFwYh-RZ#*g2Qnhno`3SXFxV]iW' );
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
