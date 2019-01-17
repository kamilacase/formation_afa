<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'afamulticlientwp');


/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'afamulticlientwp');


/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'XzAFA48230Cl');


/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'afamulticlientwp.mysql.db');


/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'E0PomL:uqdWElQ]A*!pxV}UM?wEd4xt+1Q#ogh[1Cqixzx,n6{1Xr =xG19qUtR%');

define('SECURE_AUTH_KEY',  'UBnu<R$ScqI$u?:fbJNf8ytb!^<!jI{1N/DC+R` }rq,36eFz8{+C#gYAznHj<E:');

define('LOGGED_IN_KEY',    '*HI(1GDTUwr)U4E5;Ig}MF5t+I(AEdN.SwV8~I9h@l(#A92l`EjP+lGG_:nX7Tw ');

define('NONCE_KEY',        'BHx=4s6@o67O<fwVg`rtlfHtgi)l-@.wi>`$1==.)RgriYRJom<Hi4J`:=fRSNJ:');

define('AUTH_SALT',        'nD#z>Y/eof)JnT:Js}3Q+0Frny/[iYI;yS^+l`ASuP-Qe)-=eY6TUs?4Y>;xM{Ef');

define('SECURE_AUTH_SALT', 'pm*K@JPhm8/nIx3a9T)7@@4+h0DW% KR7p7+:ENwhtffNb}]Vl;kw`1txV)>ga_m');

define('LOGGED_IN_SALT',   'Ge)T*1)~XB:zukfcmLAc,8DY`_8ciQ#kxv}dE%R~maT6)}l1c1@Ig} )_^+{R4N]');

define('NONCE_SALT',       '3QX][_+5T6!zi-La.*[z4=NPCC{YNB!q14]VM8[,TyfLjd$8V]=I|C]Q&fv_x)n4');

/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'form_';


/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

define('WPLANG', 'fr_FR');

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');