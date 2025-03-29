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
define( 'DB_NAME', 'cocoonut' );
/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );
/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );
/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );
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
define( 'AUTH_KEY',         ')9+lLacXJm%o5nN#V#Q</:.9e{4|6W,KY qDZp^tW(cF,UJYQ]@DiP%B`2dwt2zl' );
define( 'SECURE_AUTH_KEY',  '/W8ok.W1S>4fuUMlN[&^]0-X9#.@jd1vK=@ bIZf9CIm760s;Azu#:AKf8Rj?_{H' );
define( 'LOGGED_IN_KEY',    'K>*S[cU!{1B1yxniR1uj)1{@D3Lr-{9L4aXKqA GCE(K3gcUnX1n][b%iX]<to@*' );
define( 'NONCE_KEY',        'T@vYy<cEPaA;<:T&%Wj<zojJ.J<nnEZwUUP*feDpkd[NGqhhN-52PjP-wm N&g89' );
define( 'AUTH_SALT',        'MW5Lmbf &p;sJnbE_7a>9c87^vYeW3a@Q2OuYHo]2V0g8*&%L6A{ZLI|#+c_/18Z' );
define( 'SECURE_AUTH_SALT', 'K2AGb6m!i5v<Ni-h,7anL#AR5H-OL_A}?rU&}4c*^u4NV;Q)2(n16#o5suc~yqrc' );
define( 'LOGGED_IN_SALT',   '6v%16}ORxf45E~n?8.(d21dcW6{*4jvT<(6{sNMT1+03guItp5%lI,=dOVB[P8E]' );
define( 'NONCE_SALT',       'TQgzC-Ag0CN[G-$_{;0{q#N!^K*]sg!5x8{5T9j-sUkY7}MQdV%&R93^,ODl~8U+' );
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