<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'instituto');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'usbw');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'eh^.F~Ue:%-C[<h%TE+J-_-G#S*|<>.Doy-=Aa>N4{@]NnXO:hc+*8}PI8Y(pfRY');
define('SECURE_AUTH_KEY',  'i !(f=vWe(Z~+?;K!h;/)+-2BI;gTp{hb/_I)ZDG;b-~tq,6GGMc|hHg3itfiV5M');
define('LOGGED_IN_KEY',    'bkD4w6+E-[TFQ7/C(I[+vhnW^%*4n[66_&4vPlQ,iA&){Xt6?uxeB?A,RWJq #cG');
define('NONCE_KEY',        '-Mr%$}^|L,E >94y7HBs64?&.,^Cs+rLEcY7BHP|uO29KQ|2@`uo<r8+6(0%H6b7');
define('AUTH_SALT',        '11j//|^v$?RE#?{jW?xg%i0y&W-Te6y}~hoL!n-6RT858S$%G$=~Gsfld$oA-hav');
define('SECURE_AUTH_SALT', '|;,D9> CDuDM 9mb$IG<M~c.g@~Ct8PS)|ad&O|HD2YRB_ci281~lvB?edZhz-P?');
define('LOGGED_IN_SALT',   'WAd0(ow7 tLb6(wj;yVut]gzDrpv%,)~k4.<C+|#G`83O3mHzHEb:-H@!G*{*j|f');
define('NONCE_SALT',       '~|X/ZMu6_4v[Ck9M$+I[;>;wEYczx!hxBm4{ZJ`(1|Z7;Yn3{`TmE7!D?Ad=s+LR');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
