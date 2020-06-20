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
define( 'AUTH_KEY',         'up[|SD@RWt88V{|DC#HeW)5bjX*JoYF( 7or$~;,: RhnHrMRJROPvZG>+F)VVXx' );
define( 'SECURE_AUTH_KEY',  'Zxl9c0]:HC6|+QP3N|Tkrf8%<Db!8X_;[|Ir&UYQ%lrESjAwMgVG3YJ*aa#SEk.@' );
define( 'LOGGED_IN_KEY',    'lmx!HOZeutlTed~T:(eRI&.9W@ D5Em+Z2f4yJF.V1LSi}Lx2<pvwY!jm#lhdZ>V' );
define( 'NONCE_KEY',        '-Z(9ev?#)B:)8zXoV2j6as#6||L`2oSCr#ZGg54v/K#m&!RsrJej:VjXZZ7j)Y@H' );
define( 'AUTH_SALT',        'X_mB3w7~MZ;JDWxcL2]H4,A(B_1},3oS:n_uq~jxzm|+B~jH< sleql ?$NW^vv.' );
define( 'SECURE_AUTH_SALT', 'YgG*{&DJfhu(Hq.,|-uD?>h=m/Bk/PO;U#Ke3(#d?3,uI,z.C6Oja[6vxXZGOLV]' );
define( 'LOGGED_IN_SALT',   ';S6Q<E#S=)si3tT6pcWxXh; r2+<GVs=n,dcplYVT%}Fu`&dm[e+-!425U$_@tt}' );
define( 'NONCE_SALT',       '6>u-IWt(as0F^9 u).9dk[54HzMPthkd/Cun{w`c=E&JvY0X80f}6+0k$A5aXy)p' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
