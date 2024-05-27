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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'SYItJ5%X6z_30%I8>`tJyT6xY1Gg8SsZB. 8Kv# k7j,PhyGT.%3NZVo0dM~|C}F' );
define( 'SECURE_AUTH_KEY',  'w8O=T?dV7^Hh,%j>6Odxu9_$zupRJkXkxK@.T,*O]zdRu_yFI!qfnwptdH@JVIi=' );
define( 'LOGGED_IN_KEY',    'y$T_HPVGXdK428CKRnlDAN8MGMa/DEgLL@D8fY*0=uDKdQ|9EMj3xtS+C=1{4:ED' );
define( 'NONCE_KEY',        '-NIap$RX&A89<6UwJUP,g_u+Ox)O%uPiwR{.QjxmtBKlBmYzl;~xl:hwL~5N>vC?' );
define( 'AUTH_SALT',        'Nv.!vPX;r4GtUJ%P0$]..19`.SbLT6(Z1;|vjImNm*S.zwvO&[!$@T:sb.t.7`:I' );
define( 'SECURE_AUTH_SALT', 'F*yN7^15z532eziE/+951f_e`J27rx]R-UWrhyrV?$v[TI{fV$^Pn2Fx,M}0l_mS' );
define( 'LOGGED_IN_SALT',   'V<K,:!OM;wh:Gc:`GYKlO&IaRbIwGsg`{FDA?Uz@+!$[=Tm%f}.x7nfJv>ut]Zeu' );
define( 'NONCE_SALT',       'Rh{b41mj9k#L#bL8nq<k|,*Sd(O* DT&f>[E#nmaZG$FMbb6nF{1auzKm!{p$g)c' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
