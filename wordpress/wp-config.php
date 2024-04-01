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
define('DB_NAME', 'db_saintcas6_2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'db_saintcas6_2');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'zbz28oqt');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mysql5.validname.com');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'D$C $NcR*@S4Auog$(DPSwLS%.%zh<CR735+@OEH_:._gCU}Y^L FkMWnJqq#n.|');
define('SECURE_AUTH_KEY',  'o*Y,/w7yPva6VKv=.(qWNON~6=[g%q72ETLoBMz-:c6?iO!QDa~/dwp@DJckPk`9');
define('LOGGED_IN_KEY',    '43roa)K%0NNx] d#,wFhm#w(%4K^57JX5}<&l,<gH6@D.G%6 E-(&VHXNxQiz`CM');
define('NONCE_KEY',        'Cytm~5HUOl3iku6K*I<|$}b</h%Eu`u*;s#[|gJ{&wUC5sRay0>@~~Uu:g)5GrB@');
define('AUTH_SALT',        '~T7lXXLx;t^w<~^-Yay )wax]F@<Fyb|6mG<ALWTgv$q ?R@qO]8SXaDh# !6(O.');
define('SECURE_AUTH_SALT', '<th;I?vXZLWi^2NcjldF}ta3~fnyO B(Z:h$:*/).-Vznzs`n1u?lQFd0,lF6Vg5');
define('LOGGED_IN_SALT',   ';WHSX~OM>aZz~?,XlR?g-fD!1eO1q^iOf`.p#8K+c62[5*O_rm}mFWw:M=`tV1oP');
define('NONCE_SALT',       'rUkJb;,XRf2TUP%i%}`]BvkMUoZ{mP0Exwv7P%KwAESwOc5UY&nxIE)Rqt=XvCK`');
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
/* Increase memory to resolve JetElements issue*/
define( 'WP_MEMORY_LIMIT', '512M');
/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
