<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'simplvintage' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:4306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         '2WkU-l>`)a3 -i>#zmc{F)rYMqEIrB;ZHpoo[r;WokQo[[B2 JG+p*SYX*7MYSf/' );
define( 'SECURE_AUTH_KEY',  'd?g3W/iDh^2E}Efjd.!ml!RJA*8y)`ns) dVrv3N)ITp/-wO-VJ$%AY/tY%i${>w' );
define( 'LOGGED_IN_KEY',    'x*kXyazkC`b{q?S6 /Wv)*%#OWS$QNW>DP3DZ(;i1*g,Wm.D.&Fg7nOH!qZeaQH`' );
define( 'NONCE_KEY',        'k;{p#J/uFh|8]yP-?%4glw[)a-aoPFy~gXO]IwLwY$]]D1; 6*&cC^S!~MgEmAV8' );
define( 'AUTH_SALT',        '11(#qU{[NS3ei+LRtCkF&8:>(*K}WG@6D#d1!zt+gs{(jb>ys[tV-QK-!d)bp1Jl' );
define( 'SECURE_AUTH_SALT', 'fyPS2YxX7bFbWigC%W:Ub`ixrTO2-t %mdD3boSgV<4cbZ>@mYoqZRAOlw~1VbZC' );
define( 'LOGGED_IN_SALT',   'rNvFtZLG}?:$qLa#$-<Eq})fU$l0+U$|>(C6=oIfQ4Au7T07GE3n{rW!}pQbF_0.' );
define( 'NONCE_SALT',       'LxEogo`^<O.Lx|9vzFcd#y5CCO>Kqu?Zti5 D`:Um77i8@%Zu,Q.Y|,VHxSuE2Fo' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
