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
define( 'DB_NAME', 'futebol_bd' );

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
define( 'AUTH_KEY',         ' Uir~$[I~VheG!h*;s*e<<LMy*.XP+KRyo+Q!{2eK^BtPa`<dqVsO|-0# +]<|o^' );
define( 'SECURE_AUTH_KEY',  'WFm1yHK$Jz7AK0H,)Sx6XS@XdN[Yv@-c%/g6TzWtoWwO^(o(ja+M9r?X0n~;P+bO' );
define( 'LOGGED_IN_KEY',    '2p&j(%d7mX+rW//|=?IgNW9XVA1h ,ZaL*h>kf_z!_^XzPu6^fYhU0EpZs?:tzDV' );
define( 'NONCE_KEY',        'aa`{$N:3>4hDOLXv7FSBBdiy$DRD:}EwJIusPQQ6z7!E]p^^gZ(rWo4%!nn04L>O' );
define( 'AUTH_SALT',        'Zpkug1:2}H1+#BCg6B$@ZHL92u!O7m*(tMXMj[K3pAyOlQUeVC3#sbk8T^[);a%m' );
define( 'SECURE_AUTH_SALT', '9%U*j$23-/r+6hqwK<@/ &g(dl6U[q]QRz`6609W*&yb6`km;Ph>js+FJ7;{IGp}' );
define( 'LOGGED_IN_SALT',   'kS>e5AvwxV8$aEskJ#U[52SM{sebz5{r|O@srwM6UxXS6|{L;(HBP1W4C@q=UNtp' );
define( 'NONCE_SALT',       '+NrgV0?HQU=mf2747gLLeOw75&kkaQ*6=C)P#ZOWH O^o;WW{XrnXKp#mW!Hwq~E' );

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
