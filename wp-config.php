<?php
/**
 * A configuração de base do WordPress
 *
 * O script de criação wp-config.php utiliza este ficheiro durante a instalação.
 * Não é necessário utilizar o site, pode copiar este ficheiro para "wp-config.php"
 * e preencher os valores.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Definições da base de dados - obtenha estes dados do seu serviço de alojamento ** //

/**
 *
 * O nome da base de dados do WordPress
 */
define( 'DB_NAME', 'multimedia30' );

/**
 *
 * O nome do utilizador da base de dados
 */
define( 'DB_USER', 'root' );

/**
 *
 * A senha do utilizador da base de dados
 */
define( 'DB_PASSWORD', '' );

/**
 *
 * O nome do servidor da base de dados
 */
define( 'DB_HOST', 'localhost' );

/**
 *
 * O "Database Charset" a usar na criação das tabelas.
 */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 *
 * O "Database Collate type". Se tem dúvidas não mude.
 */
define( 'DB_COLLATE', '' );

/**
 *
 * #@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automaticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 *
 * Pode mudar estes valores em qualquer momento para invalidar todos os cookies existentes.
 * Isto forçará todos os utilizadores a terem de iniciar sessão novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'suHEFQEkC/D85G&CzPtIZ!H,?h|E0,F~.d)l}<,Asp.W]`h~7Ag*zd1@d@=.~lb:' );
define( 'SECURE_AUTH_KEY', '+AMib6Y{$q;b-z5YlY%Qi][;&Nhb)4D7 p6SJu9V3ln<qp4X5/s{f%ej(n0zQlu;' );
define( 'LOGGED_IN_KEY', '>EF5$a oM0IUn[7&iG)e.j+0GKw&h<.=+Xk_XLc<?.;6`0On>GavaS0}{b@mwy[^' );
define( 'NONCE_KEY', 'j]~X4V|Df}$%MTy&R3V(tjB6/L5[P[I:f%R |)y8#tsvbJC}{SUw)KVA_{4;Xjgw' );
define( 'AUTH_SALT', '1);uUq0dWFL]^@@1~R<9id,Z&Zmj@:9bzdWk|Rx~y*%*Hom)jL!_OizKUO#vQUM*' );
define( 'SECURE_AUTH_SALT', 'i/p#jeL{S4&|;%}wmp0V8+wfSj_Us`0}v(HlW6j(ySy1:^iIEdyb5F`c7NDy;4&2' );
define( 'LOGGED_IN_SALT', 'CRw=/O?9hP29w*HkMMgexidDEd4$lY,}Lu`nYb(|52zMx8xC8azMu f.1qos0VYN' );
define( 'NONCE_SALT', '(aUY#QV:OYdkMbbPrf1Ur*?k4(e 4oX|r-8I>7i}Mjt[4^f@13f9xva(#!Kg%82c' );

/**
 *
 * #@-
 */

/**
 * Prefixo das tabelas do WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para programadores: WordPress em modo de depuração.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para depuração,
 * consulte a documentação.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione quaisquer valores personalizados entre esta linha e a linha "pare de editar". */



/* E é tudo, pare de editar! */

/**
 *
 * Caminho absoluto para o directório do WordPress.
 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/**
 *
 * Define as variáveis do WordPress e ficheiros a incluir.
 */
require_once ABSPATH . 'wp-settings.php';
