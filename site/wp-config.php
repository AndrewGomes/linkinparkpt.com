<?php
/** 
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro é usado para criar o script  wp-config.php, durante
 * a instalação, mas não tem que usar essa funcionalidade se não quiser. 
 * Salve este ficheiro como "wp-config.php" e preencha os valores.
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'linktcom_wp');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', 'root');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves Únicas de Autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'GI<%e8/YR>GyC^{y$.HKsJ<~|h+1uO^Rz)|1Z}qTp`4OZ[ R;G|GkpFiRyo-yag4');
define('SECURE_AUTH_KEY',  '%Vnfd5<J/[,FCF)X!.<maGY^S@+&eWrN.9Z=t;9),xh4AxTAey9N0c3,*#?aKjbP');
define('LOGGED_IN_KEY',    'PP3f*}va>71<Cdb3F`|f[F+D*~Vob[Db#]1GJ,YU4KfF#dCx-jC8]&!yg=a~%-,m');
define('NONCE_KEY',        'ccs]MC02n;kEnK*dw_-Z2}6D?q!]*9=b][0V/s}is{7BDNZhs1.`w8>;j>mi[9l1');
define('AUTH_SALT',        '-VlRcG].~K,c(X489)cCe-B.?a^t1sbUo*?@e>[ON&o@Fhr$$e^`R9}x;{LoC[wj');
define('SECURE_AUTH_SALT', 'Ad|m<g/gtU@;?+#Dg.|P(x&+_na?cgI<5]9  3OT=CCnMN78`.(Mg`c#-w5}!|0A');
define('LOGGED_IN_SALT',   '-4$_C,vaO{Y~UFCP][rl}b`N1eLmU*-h?*dUcvxHNAt+7$Zc1H5qU&TS!bX_ hbB');
define('NONCE_SALT',       '*tEm08!z$e0`&2pE|jfdO(:q *|~r;Eww}w*0m%UA0BUNe+d-K6m5ON@3mvf5JKj');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'site_';

/**
 * Idioma de Localização do WordPress, Inglês por omissão.
 *
 * Mude isto para localizar o WordPress. Um ficheiro MO correspondendo ao idioma
 * escolhido deverá existir na directoria wp-content/languages. Instale por exemplo
 * pt_PT.mo em wp-content/languages e defina WPLANG como 'pt_PT' para activar o
 * suporte para a língua portuguesa.
 */
define('WPLANG', 'pt_PT');

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
