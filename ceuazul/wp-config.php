<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ceuazul' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CYL2jZee4fRz77NHxIcCr}XD?QCb;_R5vhJ)/d@QP{z<M7=x!+HO;#~kY@Fh{+Q`' );
define( 'SECURE_AUTH_KEY',  'WU8#h wY&kDq8u:].L>9ta?!XnbbjrsDy{VI,s/B=k^1`#v[ihE)J&Iac5w~-/tq' );
define( 'LOGGED_IN_KEY',    'PJ|_5B_L0tZ%&M1.%8qCX5qsc`g/,#lDaZ^+ax@SW0.591gK6/]pZ eL% >c6,VI' );
define( 'NONCE_KEY',        '-$??u0Yj-&Jd``@epMYd`>XVYF2Vn&,De{ycA!F9r{P#tgTk)mmBpeyXK`eW*6W0' );
define( 'AUTH_SALT',        '{|j.< Ok|8O+ZA,:uy)E.z&3C2baNw1U+F@QejC:O.PUQr(GG;hp8OD4~?0Bvs==' );
define( 'SECURE_AUTH_SALT', '|YQn&C@Yx}{ldZ7Vi4En$pf564G%(ha%yuI|YvzQXIxA:S;Z@V,a_a*HJ7zxy>4%' );
define( 'LOGGED_IN_SALT',   '/b!A]Sc}xU0 4ozpy-51P1o-X~WB1JfHzm)iHNZ*OZjqdh<<S{F[TBw]w2LR~+mB' );
define( 'NONCE_SALT',       '3][H8 ]l@6#Oo&V0W]R(-qk-G1 Ro&|)56zi9H9~d6WE`t0lw!m~)7*CIC{)FK_F' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_ceuazul';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
