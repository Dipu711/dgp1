<?php
/**
 * This is a sample config for local development. wp-config.php will
 * load this file if you're not in a Pantheon environment. Simply edit/copy
 * as needed and rename to wp-config-local.php.
 *
 * Be sure to replace YOUR LOCAL DOMAIN below too.
 */

define( 'DB_NAME', 'pantheon1' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         ':m4I &[DBv6/OgZf2+gbqRe$KuT)UVNN>-;RT w3NaV#_m8*TqqUh=l%Q8qr%Am[' );
define( 'SECURE_AUTH_KEY',  'OZMrja6@PCF+M6Jn=eM8cgC[0E;n~*5VC|QQjzK5a/-(8xs3J[jXdUl4BLYBFGuG' );
define( 'LOGGED_IN_KEY',    '+&D%:-Hj2$L.)?XTIrG&-B}9a07Vkg5AF u4(LPJ.pRp/3_J]8@UN}BiB2!fJ`z~' );
define( 'NONCE_KEY',        'lf{rNQ4jJ+H]>|rN5C3!703hCu!e2r$LJ>Xqz-`>Nxyq/`Nf,!F&J_:D]?gK^A_x' );
define( 'AUTH_SALT',        'TTL,(e0[>lGxYmn~R0KcX8`!&(xn_{o-_g>|I[Y9JyYx_N$dO*>CIa{@bd%0r/R*' );
define( 'SECURE_AUTH_SALT', '22X=|RJENk~hHCh4#6dsn&.Jz3dnpX@8Mh^/4;f6h(pEj=;^`<h#MY)^Z`@o@$e&' );
define( 'LOGGED_IN_SALT',   '_Z-bjS1aAOJZi>njk7^hGL!_4ivC-ctk[YnG,asB>$=Q|OdoDEequ,,[Ly~L=o!/' );
define( 'NONCE_SALT',       'aTLNYYr9x8vY(T%uSrfUY#6k#y-84p?xBRWv_?Si66sbL^=|<Rn/j*A{jB:i1N2;' );

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

define( 'WP_HOME', 'http://localhost/gitrepo/WordPress' );
define( 'WP_SITEURL', 'http://localhost/gitrepo/WordPress' );

define( 'WP_AUTO_UPDATE_CORE', false );
