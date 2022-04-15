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
define( 'DB_NAME', 'rayc_bd' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'B4rb0s4!!' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'JUZ>4<-431f2]3_`1fBw8L.c}]_UCth8(K5^c.+s$4Z5ZuYk:(VfC{u(YR~I&V}O' );
define( 'SECURE_AUTH_KEY',  'N}]tOVp.RY_l8QbK0h1<]8;4M,<J;W~icu[]l<)iL~*pHgMh(/_ryaH_d=Nuzsk2' );
define( 'LOGGED_IN_KEY',    'I6Vh5BdKLm6v21]}@w$FmFrYf:/5hw=9:^a*c.b^+df(Z)t14w5I0yo3Zon}$3C$' );
define( 'NONCE_KEY',        'X}7M_G`2!nV%9BA;0slv|tvvgJB!Al)9<Sxy&g$OExn%Rv1O}l@4ad+Cl]u,CV#<' );
define( 'AUTH_SALT',        'm2>m4yF7 -PM1 NU|XXic!3MVfi0Q9dp[j`)ga_`w8<&)G)p8%.4Xg3fSe#0#wn?' );
define( 'SECURE_AUTH_SALT', '<;U#ra[fIKWRxo:xYY$qoqm^O[hY#{>cs}_Q@XCVx DW}-}^?f@J#k;eEKJ#A|_C' );
define( 'LOGGED_IN_SALT',   '[33UHx)[i`hhtu-HVBSneAlcM}oLJ~lzdplO}f,q}^[2LpW_Y6;+XSl?19~$[:Ge' );
define( 'NONCE_SALT',       'bm$8#d<{+R`Yb*7U+Y>|K}O$]}&Kq4KZeqgZ,]8$VHz(zoE~MT;YROB;c8b+PS[;' );

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
