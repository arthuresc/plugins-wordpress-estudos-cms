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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         'E3>%[e.^NgdBh:6Y}C]@%3_CPtg&rte>eZC^J4~{YkT]Ek|M/Uu9G,g+`]]Iw9vt' );
define( 'SECURE_AUTH_KEY',  'iWb5jsb%a32bN-nLmfbp?cQt%:UZSuX>A0$i{0{KIsZ5L,^POZ,`/NLJgqj,!JZ,' );
define( 'LOGGED_IN_KEY',    '&I]d6. ;E|Jn!7gZK0}VET(74^m<kIFsC|bfdX^$4AUyS7t(Ri.c3,gvCQ`64]MG' );
define( 'NONCE_KEY',        '|T;~U!WRs|9,2Mpw_4ADJEl]!(RGN}l[931`cpjxW$J30p=W$41+K U<)OEB0{}~' );
define( 'AUTH_SALT',        '=G3hjng7WgfTpZ;JB9n ~-)&F2}}3IxlQxk_*/I8Td=deY(NW%x}Em]+b+O^Cri=' );
define( 'SECURE_AUTH_SALT', '4ti![PqgA%.8qqT_|(&sEP,1PZi>S(*.b]]3f+q$<Pm&1N3AD*_Xiq-,N<8%KIi6' );
define( 'LOGGED_IN_SALT',   '+&}{eFo}G-y1:)B2#I/~JY&NIy(Fhx~wS{n,yp+%+,.)u}Rtn#-<vTBMF>c_j~#s' );
define( 'NONCE_SALT',       'vfkM`-P*#OA?@}y2{<@V(lp/K%`[uLoJfGb]1QCs:;ICfu6.?)`%)0<Wfqv9G+O*' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_tb';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
