<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
//            'dsn' => 'pgsql:host=10.33.81.23;dbname=lxjtestdb',
//            'username' => 'lxjtest',
            'dsn' => 'mysql:host=10.33.81.156;dbname=lxjtestdb',
            'username' => 'root',
            'password' => '67535782',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
