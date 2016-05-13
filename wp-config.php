<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'collibrisV2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KqiPbyAZKo.)h^9E)*iHRjD6!HP#+!W;R1;Q(0/gno^,Fz>4yoJh3,S.Cgd?yR|!');
define('SECURE_AUTH_KEY',  '}/ehz_99g2FMhZ?@ds3U9@CNt9}_#aX$`W$;iuky_U}Y$Ihz@3SUy)A0+;F3/;G;');
define('LOGGED_IN_KEY',    ';PI]h6WEzZa<n,_*CVwBNM8#X:|ESSPAPOdJpT1VPzHZ@LfQ)xD&ggaQ,<wDDnL$');
define('NONCE_KEY',        'a*cU`nE,^]hIZT85/Gr1fj&d7HHAAE5@Gz SbXpLd,=29.0~{r5F$Hhg>xo/A]Pp');
define('AUTH_SALT',        '*(ZT)pa73L+Re&GI:BvjHSa;df[3yh#u1:C/m$M:|hjj|&SHe3]JF*l9+T2[pWEV');
define('SECURE_AUTH_SALT', '@nS+2}eY4__#?ID4oUADM?hD-;`o3bb`j)8>KsPfOL-.h}(3B&$KF1_L_`tVO9sA');
define('LOGGED_IN_SALT',   '4EQem$BA1J;a(T(z9%t1)^zAT)X1Gxtj`TEZ&cO =B8XDe#s*(h!!>{us[X8KCPa');
define('NONCE_SALT',       '/*zTuNrAZ&<>LmAt+a&Kxd70p>f6(ayGWMOoYh{(1pUwNB:2[!=5A)q8MO?^E:wN');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');