<?php

/**

 * @var int
 */
define('PRODUCT', 0);

/**

 * @var int
 */
define('STAGING', 1);

/**
 * @var int
 */
define('DEVELOPMENT', 2);

/**
 * @var int
 */
define('LOCAL', 3);

/**
 * @var int
 */
define('JENKINS', 4);

/**

 * bash:
 *     export WEB_APP_ENV=production
 * 
 * apache:
 *     SetEnv WEB_APP_ENV "production"
 */
switch (env('WEB_APP_ENV')) {
case 'production':
    Configure::write('debug', 0);
    /**
  
     * @var int
     */
    Configure::write('Environmental.setting', PRODUCT);

    /**
     */
    // slave
    define("DB_HOST", "localhost");
    define("DB_PORT", 3007);
    define("DB_LOGIN", "root");
    define("DB_PASSWORD", "123456");

    // master
    define("DB_HOST_MASTER", "localhost";
    define("DB_PORT_MASTER", 3006);
    define("DB_LOGIN_MASTER", "root");
    define("DB_PASSWORD_MASTER", 123456);

    define("DB_DATABASE", "survey");

    /**
     * mail
     */
    define("MAIL_HOST", "localhost");
    define("MAIL_PORT", 25);
    define("MAIL_USER", "");
    define("MAIL_PASSWORD", "");
    define("MAIL_TRANSPORT", "Smtp");

    define("LOG_LEVEL", 'warn');

    /**
     * webroot 
     * WWW_ROOT 
     * @var string
     */
    define("WWW_ROOT_ABSOL", "/data/www//htdocs/app/webroot/");

    /**
     * scp2 の設定
     */
    Configure::write('Ssh2.servers',
            array(
                array(
                    'host'        => '10.1.69.1',
                    'authType'    => ssh2::AUTH_PUBKEY_FILE,
                    'username'    => 'smape',
                    'pubkeyfile'  => '/home/smape/.ssh/id_rsa.pub',
                    'privkeyfile' => '/home/smape/.ssh/id_rsa',
                    'passphrase'  => null,
                ),
                array(
                    'host'        => '10.1.69.2',
                    'authType'    => ssh2::AUTH_PUBKEY_FILE,
                    'username'    => 'smape',
                    'pubkeyfile'  => '/home/smape/.ssh/id_rsa.pub',
                    'privkeyfile' => '/home/smape/.ssh/id_rsa',
                    'passphrase'  => null,
                ),
                'localMode' => false,
            ));
    break;
case 'development':
    Configure::write('Environmental.setting', DEVELOPMENT);
    Configure::write('debug', 1);

    // slave
    define("DB_HOST", "localhost");
    define("DB_PORT", 3306);
    define("DB_LOGIN", "root");
    define("DB_PASSWORD", "123456");

    // master
    define("DB_HOST_MASTER", "localhost");
    define("DB_PORT_MASTER", 3306);
    define("DB_LOGIN_MASTER", "root");
    define("DB_PASSWORD_MASTER", "123456");

    define("DB_DATABASE", "survey");

    define("MAIL_HOST", "localhost");
    define("MAIL_PORT", 25);
    define("MAIL_USER", "");
    define("MAIL_PASSWORD", "");
    define("MAIL_TRANSPORT", "Smtp");

    define("LOG_LEVEL", 'debug');

    define("WWW_ROOT_ABSOL", "/data/www/survey/htdocs/app/webroot/");

    Configure::write('Ssh2.servers', array(array(), 'localMode' => true,));
    break;

// 
default:
    Configure::write('Environmental.setting', LOCAL);
    Configure::write('debug', 2);

    // slave
    define("DB_HOST", "localhost");
    define("DB_PORT", 3306);
    define("DB_LOGIN", "root");
    define("DB_PASSWORD", "123456");

    // master
    define("DB_HOST_MASTER", "localhost");
    define("DB_PORT_MASTER", 3306);
    define("DB_LOGIN_MASTER", "root");
    define("DB_PASSWORD_MASTER", "123456");

    define("DB_DATABASE", "survey");

    define("MAIL_HOST", "ssl://smtp.gmail.com");
    define("MAIL_PORT", 465);
    define("MAIL_USER", "");
    define("MAIL_PASSWORD", "2589@abc");
    define("MAIL_TRANSPORT", "Smtp");

    define("WWW_ROOT_ABSOL", WWW_ROOT);

    Configure::write('Ssh2.servers', array(array(), 'localMode' => true,));
    break;
}

?>

