<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file definisce le seguenti configurazioni: impostazioni MySQL,
 * Prefisso Tabella, Chiavi Segrete, Lingua di WordPress e ABSPATH.
 * E' possibile trovare ultetriori informazioni visitando la pagina: del
 * Codex {@link http://codex.wordpress.org/Editing_wp-config.php
 * Editing wp-config.php}. E' possibile ottenere le impostazioni per
 * MySQL dal proprio fornitore di hosting.
 *
 * Questo file viene utilizzato, durante l'installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web,è anche possibile copiare questo file in "wp-config.php" e
 * rimepire i valori corretti.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - E? possibile ottenere questoe informazioni
// ** dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'olbcit11208');

/** Nome utente del database MySQL */
define('DB_USER', 'olbcit11208');

/** Password del database MySQL */
define('DB_PASSWORD', 'passero');

/** Hostname MySQL  */
define('DB_HOST', 'sql.olbc.it');

/** Charset del Database da utilizare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8');

/** Il tipo di Collazione del Database. Da non modificare se non si ha
idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * E' possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * E' possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O)Tfb7a+/)LV+^L%;!o?Vp$^<LkIM}Aj^yPr V8Kw}dQsr4Xg:{oQrhU&|V>(SBJ');
define('SECURE_AUTH_KEY',  'b3[ *qz&!#N-Ju/bck`#9N;!M@}&=[nLE3?Y(&b#P3:ZpeEP(w3k4mw5FuO/~v+s');
define('LOGGED_IN_KEY',    '4ACEVoJ#$D>~zOTy+elmf20-hWQ0RCOG+CX+-+32Y/Ov*`hDN2cymG81q/t6(!0D');
define('NONCE_KEY',        '[zLPm<b^(M-Pq=.nX@x|y.A>?%?+1EdOJ;C[NDI a 9D{hyE@>FTm)&XO9Fe]geJ');
define('AUTH_SALT',        '6R?#3+?wSee42-l^3gfF+<Sh}hG|Ly4Q<m2XhzaeFH_RMygL{B^[;]%=R&s t2$]');
define('SECURE_AUTH_SALT', 'la,|xCu.,*aMp&5a%vG}e7IA@Q||2l+$/k5bQ.nG{rL=,A]Dw}XoomXkeza{Fp2w');
define('LOGGED_IN_SALT',   'R-~A5^04VX{l]*f$E-8~a;fLX_5qt|A+%Oi5,nccepd]QHArpPR1nl^!.6e]:h 9');
define('NONCE_SALT',       'd}B.As,th-Kvz@%Kw]oGY77iSj=)|1&%|#~;4g1}9Ky[g`sgBN>cK%4NaRZD:nEG');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress .
 *
 * E' possibile avere installazioni multiple su di un unico database if you give each a unique
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * E' fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all'interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta lle variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
