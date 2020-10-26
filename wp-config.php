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
define( 'DB_NAME', 'db_docforweb' );

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
define( 'AUTH_KEY',         'J__8Vxkj`uGg/F@m0S9>?]VSsXDytaDPj|LE!rbK{/#z.Je-QhfmJ-@&!%80u+Lv' );
define( 'SECURE_AUTH_KEY',  ',s&_a{y>c{R8.ezQ1Ip!okXy|&5)ka>m(0yw]2w%$a4$i<lMwd$QLG@v{xqJ%qDs' );
define( 'LOGGED_IN_KEY',    'G:rK))7QU]VU9y3<F7*G-Wo:P]DSmJgs|Mp&2hpqeQ0!Y.qljF@#MZ;:e]snO.by' );
define( 'NONCE_KEY',        '@vFazKt0o`1V^!Hz=>_}]D} 3V%UsaQ%][8Q&9ts1[v9BYwU;:5?ty-u<8@:j`Vp' );
define( 'AUTH_SALT',        '(^LQ6I%9h]!Xx0d-X7<okR]j[*Pp;F.3<@(9vT/}oZP({<>l:z6jM}4QT5+6PvV0' );
define( 'SECURE_AUTH_SALT', 'iO}@umE>KHO?eo|2}>}BQ.%-;Mj+&p>tNc/XXDGYD(c6[)B|emm,?$:6A>h}V[G@' );
define( 'LOGGED_IN_SALT',   'wwKS:R2}{84R(a#&F0t]hgpe{Bnu1|2eM_!04.cahbhLHx:LI%)X@1p`SBc;G5`h' );
define( 'NONCE_SALT',       '|ZA$fMI;Re0g?e)>2x{>C}CT>Av@!KJM?N&wL)@n u51!:{ _R &ggr09cNTFFRO' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'dfw_';

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
