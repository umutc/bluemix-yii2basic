<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE=SQLDB;HOSTNAME=5.10.125.192;PORT=50001;PROTOCOL=TCPIP;UID=mail@umutcelik.com.tr;PWD=UC_ibm1993',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'schemaMap' => [
        'ibm' => [
            'class' => 'yii\db\db2\Schema',
            'defaultSchema' => 'SAMPLE'
        ]
    ]
];
return [
    //....
    'components' => [
        'db' => [
            'class'         => 'edgardmessias\db\ibm\db2\Connection',
            'dsn'           => 'ibm:DRIVER={IBM DB2 ODBC DRIVER};DATABASE=SQLDB;"HOSTNAME=5.10.125.192;PORT=50001;PROTOCOL=TCPIP;UID=mail@umutcelik.com.tr;PWD=UC_ibm1993',
            'username'      => 'root',
            'password'      => '',
            'defaultSchema' => '',
            'isISeries'     => false
        ],
    ],
];
